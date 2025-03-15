<?php
include_once APPPATH . "modules/admin/core/MY_Controller.php";
class Products extends MY_Controller
{
    var $page = "products";
    // var $img_width = '700px';
    // var $img_height = '700px';

    function __construct()
    {
        parent::__construct();
        $this->load->model('Products_model', 'model');
        $this->load->model('Category_model', 'category');
        $this->controller = get_class();
        $this->check_session();
    }
    public function check_session(){
        if (!$this->session->has_userdata('user')) {
            redirect(base_url());
        }
    }
    public function index(){
        $data['records'] = $this->model->get_products_list();
        $this->load->view("$this->page/index", $data);
    }
    public function create(){
        $data['category'] = $this->category->get_category_list();
        $this->load->view("$this->page/create", $data);
    }
    public function form($product_id = 0){
        if ($post = $this->input->post('form') ) {
            $post['MoreImage'] = json_encode($this->input->post('image'));
        if ($product_id) {
            $res = $this->model->update_products($product_id, $post);
            if ($res) {
                $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Product Update Success!! </strong>']);
            }else{
                $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Failure !!! </strong>']);
            }
            redirect(base_url().'admin/Edit-Product/'.$product_id);
        }else{
                $res = $this->model->insert_product($post);
                if ($res) {
                    $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Product Create Success!! </strong>']);
                }else{
                     $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Failure !!! </strong>']);
                }
                redirect(base_url().'admin/Create-Products');
            }
        }
        
    }
    public function edit($id){
        $data['obj'] = $this->model->get_products_details($id);
        $data['category'] = $this->category->get_category_list();
        $this->load->view("$this->page/create", $data);
    }
    public function delete($id){
        $data = array('IsDeleted' => 1 );
        $res = $this->model->update_products($id, $data);
        if ($res) {
                $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Product Delete Success!! </strong>']);
            }else{
                $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Failure !!! </strong>']);
            }
        redirect(base_url().'admin/Manage-Products');   
    }
    public function re_arrange(){

        $data['records'] = $this->model->get_products_order();

        $this->load->view('products/rearrange', $data);
    }
    
}