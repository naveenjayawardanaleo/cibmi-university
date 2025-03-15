<?php
include_once APPPATH . "modules/admin/core/MY_Controller.php";
class Category extends MY_Controller
{
    var $page = "category";
    // var $img_width = '700px';
    // var $img_height = '700px';

    function __construct()
    {
        parent::__construct();
        $this->load->model('Category_model', 'model');
        $this->load->model('Maincategory_model', 'category');
        $this->controller = get_class();
    }

    public function index()
    {
        if ($this->session->has_userdata('user')) {
            $data['records'] = $this->model->get_maincategory_list();

            // $data['obj'] = $this->model->get($id);

            
            $data['records'] = $this->model->get_all();
            $this->load->view("$this->page/index", $data);
        } else {
            redirect(base_url() . 'admin/login');
        }
    }

    public function create()
    {


        if ($this->session->has_userdata('user')) {
            $data['maincategory'] = $this->model->get_maincategory_list();

            // echo 'hu';
            $this->load->view("$this->page/create", $data);
        } else {
            redirect(base_url() . 'admin/login');
        }
    }

    public function edit($id)
    {

        $data['maincategory'] = $this->model->get_maincategory_list();

        $data['obj'] = $this->model->get($id);
        $this->load->view("$this->page/create", $data);
    }

    public function delete($id)
    {
        $res = $this->model->delete($id);
        if ($res) {
            $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Category Delete Successfully </strong>']);
        } else {
            $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Update Failure !!! </strong>']);
        }
        redirect(base_url() . 'Manage-Category');
    }

    public function form($id = 0)
    {
        $post = $this->input->post('form');
        $post['MoreImage'] = json_encode($this->input->post('image'));
        $post['CreatedBy'] = $this->session->user->UserId;

        if ($id) {
            $res = $this->model->update($id, $post);
            if ($res) {
                $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Category Updated Successfully </strong>']);
            } else {
                $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Update Failed </strong>']);
            }
            redirect(base_url() . 'Edit-Category/' . $id);
        } else {
            $res = $this->model->insert($post);
            if ($res) {
                $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Category Created Successfully </strong>']);
            } else {
                $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Update Failed </strong>']);
            }
            redirect(base_url() . 'Create-Category');
        }
    }

    function rearrange()
    {
        $data['records'] = $this->model->get_all_by_order();
        $this->load->view("$this->page/rearrange", $data);
    }

    public function documents_upload($id)
    {
        if ($this->session->has_userdata('user')) {
            $data['obj'] = $this->model->get($id);
            $data['documents'] = $this->document->get_by(array('CategoryId' => $id));
            $this->load->view("$this->page/document", $data);
        } else {
            redirect(base_url() . 'admin/login');
        }
    }

    public function docform($id)
    {
        $post = $this->input->post('form');
        $post['CategoryId'] = $id;
        $config['upload_path'] = FCPATH . 'media/doc/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '30000';
        $config['file_name'] = time();
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('doc')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = $this->upload->data();
            $post['Document'] = $data['file_name'];
        }
        $res = $this->document->insert($post);
        if ($res) {
            $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Document Created Successfully </strong>']);
        } else {
            $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Update Failure !!! </strong>']);
        }
        redirect(base_url() . 'Upload-Category-Documents/' . $id);
    }

    public function deletedoc($id, $docid)
    {
        $res = $this->document->delete($docid);
        if ($res) {
            $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Document Delete Successfully </strong>']);
        } else {
            $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Update Failure !!! </strong>']);
        }
        redirect(base_url() . 'Upload-Category-Documents/' . $id);
    }
    public function re_arrange()
    {
        $data['records'] = $this->model->get_all_by_order();
        // $category = 

        $this->load->view('category/rearrange', $data);
    }
}
