<?php
include_once APPPATH . "modules/admin/core/MY_Controller.php";
class Hardware extends MY_Controller
{
    var $page = "hardware";
    var $img_width = '700px';
    var $img_height = '400px';

    function __construct()
    {
        parent::__construct();
        $this->load->model('Hardware_model', 'model');
        $this->load->model('Brand_model', 'brand');
        $this->load->model('Category_model', 'category');
        $this->load->model('Hardware_document_model', 'document');
        $this->controller = get_class();
    }

    public function index()
    {
        if ($this->session->has_userdata('user')) {
            $data['records'] = $this->model->get_all();
            $this->load->view("$this->page/index", $data);
        } else {
            redirect(base_url() . 'admin/login');
        }
    }

    public function create()
    {
        if ($this->session->has_userdata('user')) {
            $data['brands'] = $this->brand->get_all();
            $data['categories'] = $this->category->get_all();
            $this->load->view("$this->page/create", $data);
        } else {
            redirect(base_url() . 'admin/login');
        }
    }

    public function edit($id)
    {
        $data['obj'] = $this->model->get($id);
        $data['brands'] = $this->brand->get_all();
        $data['categories'] = $this->category->get_all();
        $this->load->view("$this->page/create", $data);
    }

    public function delete($id)
    {
        $res = $this->model->delete($id);
        if ($res) {
            $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Hardware Delete Successfully </strong>']);
        } else {
            $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Update Failure !!! </strong>']);
        }
        redirect(base_url() . 'Manage-Hardware');
    }

    public function form($id = 0)
    {
        $post = $this->input->post('form');
        $post['MoreImage'] = json_encode($this->input->post('image'));
        $post['CreatedBy'] = $this->session->user->UserId;

        if ($id) {
            $res = $this->model->update($id, $post);
            if ($res) {
                $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Hardware Updated Successfully </strong>']);
            } else {
                $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Update Failed </strong>']);
            }
            redirect(base_url() . 'Edit-Hardware/' . $id);
        } else {
            $res = $this->model->insert($post);
            if ($res) {
                $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Hardware Created Successfully </strong>']);
            } else {
                $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Update Failed </strong>']);
            }
            redirect(base_url() . 'Create-Hardware');
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
            $data['documents'] = $this->document->get_by(array('HardwareId' => $id));
            $this->load->view("$this->page/document", $data);
        } else {
            redirect(base_url() . 'admin/login');
        }
    }

    public function docform($id)
    {
        $post = $this->input->post('form');
        $post['HardwareId'] = $id;
        
        $config['upload_path'] = FCPATH . 'media/doc/';
        $config['allowed_types'] = 'pdf|jpg|jpeg|png|gif';
        // $config['max_size'] = '30000';
        $config['file_name'] = time();
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('doc')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = $this->upload->data();
            $post['Document'] = $data['file_name'];
        }
        
        $config['upload_path'] = FCPATH . 'media/image/';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('img')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = $this->upload->data();
            $post['Image'] = $data['file_name'];
        }
        
        $res = $this->document->insert($post);
        if ($res) {
            $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Document Created Successfully </strong>']);
        } else {
            $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Update Failure !!! </strong>']);
        }
        redirect(base_url() . 'Upload-Hardware-Documents/' . $id);
    }

    public function editdoc($id,$iid)
    {
        $post = $this->input->post('form');
        
        $config['upload_path'] = FCPATH . 'media/doc/';
        $config['allowed_types'] = 'pdf|jpg|jpeg|png|gif';
        // $config['max_size'] = '30000';
        $config['file_name'] = time();
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('doc')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = $this->upload->data();
            $post['Document'] = $data['file_name'];
        }
        
        
        $config['upload_path'] = FCPATH . 'media/image/';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('img')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = $this->upload->data();
            $post['Image'] = $data['file_name'];
        }
        
        $res = $this->document->update($id, $post);
        if ($res) {
            $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Document Created Successfully </strong>']);
        } else {
            $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Update Failure !!! </strong>']);
        }
        redirect(base_url() . 'Upload-Hardware-Documents/' . $iid);
        
    }
    
    public function get_document()
    {
        $data['today'] = date('Y-m-d');
        $DocId = $this->input->post('DocId');
        $data['details'] = $this->document->get($DocId);
        echo json_encode($data);
    }

    public function deletedoc($id, $docid)
    {
        $res = $this->document->delete($docid);
        if ($res) {
            $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Document Delete Successfully </strong>']);
        } else {
            $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Update Failure !!! </strong>']);
        }
        redirect(base_url() . 'Upload-Hardware-Documents/' . $id);
    }
}
