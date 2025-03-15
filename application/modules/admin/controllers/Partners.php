<?php
include_once APPPATH . "modules/admin/core/MY_Controller.php";
class Partners extends MY_Controller
{
    var $page = "brand";
    // var $img_width = '406px';
    // var $img_height = '250px';

    function __construct()
    {
        parent::__construct();
        $this->load->model('Partners_model', 'model');
        $this->controller = get_class();
    }

    public function create(){
        $this->load->view('partners/create');
    }
    public function form($partner_id=0){
        if ($post = $this->input->post('form')) {
            if ($partner_id) {
               $res = $this->model->update_partners($partner_id, $post);
               if ($res) {
                    $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Partner Update Successfully </strong>']);
                } else {
                    $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Update Failure !!! </strong>']);
                }
                redirect(base_url().'admin/Edit-Partners/'.$partner_id); 
            }else{
                $post['CreatedBy'] = $this->session->user->UserId;
                $res = $this->model->insert_partners($post);
                if ($res) {
                    $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Partner Create Successfully </strong>']);
                } else {
                    $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Create Failure !!! </strong>']);
                }
                redirect(base_url().'admin/Create-Partner');
            }
        }
    }
    public function index(){
        $data['records'] = $this->model->get_partners();
        $this->load->view('partners/index', $data);
    }

    public function edit($partner_id){
        $data['obj'] = $this->model->get_partners_details($partner_id);
        $this->load->view('partners/create', $data);
    }
    public function delete($partner_id){
        $data = array('IsDeleted' => 1 );
        $res = $this->model->update_partners($partner_id, $data);
        if ($res) {
                    $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Partner Delete Successfully </strong>']);
                } else {
                    $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Delete Failure !!! </strong>']);
                }
            redirect(base_url().'admin/Manage-Partners');
    }
    public function rearrange(){
        $data['records'] = $this->model->get_partners_order();
        $this->load->view('partners/rearrange', $data);
    }
}