<?php
include_once APPPATH . "modules/admin/core/MY_Controller.php";
class Gallery extends MY_Controller
{
    var $page = "gallery";
    var $img_width = '700px';
    var $img_height = '700px';

    function __construct()
    {
        parent::__construct();
        $this->load->model('Gallery_model', 'model');
        $this->controller = get_class();
    }
    public function create(){
       $this->load->view('gallery/create');
    }
    public function form($gallery_id = 0){
        if ($post = $this->input->post('form')) {
            $post['MoreImage'] = json_encode($this->input->post('image'));
            if ($gallery_id) {
                $res = $this->model->update_gallery($gallery_id, $post);
                if ($res) {
                    $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Gallery Update Success!! </strong>']);
                }else{
                    $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Failure !!! </strong>']);
                }
                redirect(base_url().'admin/Edit-Gallery/'.$gallery_id);
            }else{
                $post['CreatedBy'] = $this->session->user->UserId;
                $res = $this->model->insert_gallery($post);
                if ($res) {
                    $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Gallery Update Success!! </strong>']);
                }else{
                    $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Failure !!! </strong>']);
                }
                redirect(base_url().'admin/Create-Gallery');
            }
        }
    }
    public function index(){
        $data['records'] = $this->model->get_gallery_list();
        $this->load->view('gallery/index', $data);
    }
    public function edit($gellery_id){
        $data['obj'] = $this->model->get_gallery_details($gellery_id);
        $this->load->view('gallery/create', $data);

    }
    public function delete($gallery_id){
        $data = array('IsDeleted' => 1 );
        $res = $this->model->update_gallery($gallery_id, $data);
         if ($res) {
                    $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Product Update Success!! </strong>']);
                }else{
                    $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Failure !!! </strong>']);
                }
        redirect(base_url().'admin/Manage-Gallery');
    }
    public function rearrange(){
        $data['records'] = $this->model->get_gallery_from_order();
        $this->load->view('gallery/rearrange', $data);
    }
   

}