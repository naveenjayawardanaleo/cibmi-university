<?php
include_once APPPATH . "modules/admin/core/MY_Controller.php";
class Page extends MY_Controller
{
    var $page = "Page";
    var $image_crop=1;
    // var $img_width = '1200px';
    // var $img_height = '1200px';

    function __construct()
    {
        parent::__construct();
        $this->load->model('Page_model', 'model');
        $this->controller = get_class();
    }
    public function index(){
        $this->load->view('page/index');
    }
    public function edit($id){
        $d['page_id'] = $id;
        $d['obj'] = $this->model->get_page_details($id);

        $this->load->view('page/create', $d);
    }
    public function form($id){
        $post = $this->input->post('form');
        $res = $this->model->update_page($id, $post);
        if($res){
            $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Page Update Success!! </strong>']);
        }else{
            $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Failure !!! </strong>']);
        }
        redirect(base_url().'admin/Edit-page/'.$id);
    }

}