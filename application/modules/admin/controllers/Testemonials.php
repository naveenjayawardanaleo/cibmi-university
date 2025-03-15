<?php
include_once APPPATH . "modules/admin/core/MY_Controller.php";
class Testemonials extends MY_Controller
{
    var $page = "products";
    var $img_width = '700px';
    var $img_height = '700px';

    function __construct()
    {
        parent::__construct();
        $this->load->model('Testemonials_model', 'model');
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
        $data['records'] = $this->model->get_testemonial_list();
        $this->load->view('testemonials/index', $data);
    }
    public function create(){
        $this->load->view('testemonials/create');
    }
    public function form($testemonial_id = 0){
        if ($post = $this->input->post('form')) {
            if ($testemonial_id) {
                $res = $this->model->update_testemonial($testemonial_id, $post);
                if ($res) {
                    $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Testmonial Update Success!! </strong>']);
                }else{
                    $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Failure !!! </strong>']);
                }
                redirect(base_url().'admin/Edit-Testemonial/'.$testemonial_id);
            }else{
                $post['CreatedBy'] = $this->session->user->UserId;
                $res = $this->model->insert_testmonials($post);
                if ($res) {
                    $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Testmonial Create Success!! </strong>']);
                }else{
                    $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Failure !!! </strong>']);
                }
                redirect(base_url().'admin/Create-Testemonial');
            }   
        }
    }
    public function edit($id){
        $data['obj'] = $this->model->get_testemonials($id);
        $this->load->view('testemonials/create', $data);
        // print_r($data['obj']);

    }
    public function delete($id){
        $data = array('IsDeleted' => 1 );
        $res = $this->model->update_testemonial($id, $data); 
        if ($res) {
            $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Testmonial Delete Success!! </strong>']);
        }else{
            $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Failure !!! </strong>']);
        }
        redirect(base_url().'admin/Manage-Testemonial');
    }
    public function re_arrange(){
        $data['records'] = $this->model->get_testemonials_order();
        
        $this->load->view('testemonials/rearrange', $data);
    }
}