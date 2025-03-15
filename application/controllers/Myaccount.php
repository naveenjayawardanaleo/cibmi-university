<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Myaccount extends Front_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Brand_model', 'brand');
        $this->load->model('Banners_model', 'banners');
        $this->load->model('Products_model', 'products');
        $this->load->model('Category_model', 'category');
        $this->load->model('Maincategory_model', 'maincategory');
        $this->load->model('Partners_model', 'partners');
        $this->load->model('Gallery_model', 'gallery');
        $this->load->model('Hardware_document_model', 'hardwaredoc');
        $this->load->model('Pantry_model', 'pantry');
        $this->load->model('Pantry_document_model', 'pantrydoc');
        $this->load->model('Polymer_model', 'polymer');
        $this->load->model('Polymer_document_model', 'polymerdoc');
        $this->load->model('Project_model', 'project');
        $this->load->model('Testemonials_model', 'testemonials');
        $this->load->model('Gallery_model', 'gallery');
        $this->load->model('Quartz_model', 'quartz');
        $this->load->model('Quartz_document_model', 'quartzdoc');
        $this->load->model('Page_model', 'pages');
        $this->load->model('Clients_model', 'clients');
        $this->load->model('Orders_model', 'orders');
        $this->load->model('Quotation_model', 'quotation');

        $this->load->helper('xml');
        $this->load->helper("url");
        $this->load->library('cart');

        $this->load->library('pagination');
        $this->load->helper('download');
    }




    public function index()
    {

        // $d['partners'] = $this->partners->get_partners_order();

        // $d['pages'] = $this->pages->get_page_details(6);

        $this->view('myaccount');
    }
    public function track_order()
    {

        // $d['partners'] = $this->partners->get_partners_order();

        // $d['pages'] = $this->pages->get_page_details(6);

        $this->view('track_order');
    }

    public function get_quotation()
    {


        if ($_SESSION['clientId']) {
            $clientId = $this->session->userdata('clientId');

            // $data['user'] = $this->clients->edit_checking($emailchk);
            $d['products'] = $this->products->get_quotation_data($clientId);

            //  var_dump($d); die;

            // return $data;
            $this->load->view('get_quotation', $d);

            // return $data;

        } else {
            $this->load->view('login');
        }




        // $d['products'] = $this->partners->get_partners_order();

        // $d['pages'] = $this->pages->get_page_details(6);

        // $this->view('wish_list');
    }
    public function register()
    {

        // $d['partners'] = $this->partners->get_partners_order();

        // $d['pages'] = $this->pages->get_page_details(6);

        $this->view('register');
    }

    public function login()
    {

        // $d['partners'] = $this->partners->get_partners_order();

        // $d['pages'] = $this->pages->get_page_details(6);

        $this->view('login');
    }





    // public function register_client()
    // {



    //     $this->view('wish_list');
    // }
    function register_client()
    {


        $FirstName = $this->input->post('FirstName');
        $LastName = $this->input->post('LastName');
        $Nic = $this->input->post('Nic');
        $MobileNumber = $this->input->post('MobileNumber');
        $SecondNumber = $this->input->post('SecondNumber');
        
        $Address = $this->input->post('Address');
        
        $Email = $this->input->post('Email');

        $Password = $this->input->post('Password');
        $data = $this->clients->email_checking($Email);


       
			$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$code = substr(str_shuffle($set), 0, 12);
 
			

        if ($data) {

            // $this->view('myaccount');


            $this->session->set_flashdata('error', 'Already used Email Address.');

            redirect('/Register', 'refresh');
        } else {

            $this->clients->register($FirstName, $LastName, $Email,  $Nic,  $MobileNumber, $SecondNumber, $Password, $Address);

            // var_dump($data);die;

            $newdata = array(
                'username'  => $FirstName,
                'lastname'  => $LastName,
                'email'     => $Email,
                'logged_in' => TRUE
            );

            $this->session->set_userdata($newdata);

            $this->session->set_flashdata('error', 'Not Already used Email Address.');

            redirect('/myaccount', 'refresh');
        }

        $this->view('myaccount');
    }



    public function login_check()
    {
        //load session library
        $this->load->library('session');

        $Email = $_POST['Email'];
        $Password = $_POST['Password'];

        $data = $this->clients->login_checking($Email, $Password);

        if ($data) {


            // var_dump($data);die;

            $newdata = array(
                'clientId'  => $data['ClientsId'],
                'username'  => $data['FirstName'],
                'lastname'  => $data['LastName'],
                'email'     => $Email,
                'logged_in' => TRUE
            );

            $this->session->set_userdata($newdata);

            // $this->session->set_userdata('username', $FirstName);
            $this->view('myaccount');
        } else {


            $this->session->set_flashdata('error', 'Invalid login. Please Try Again or use Forgot Password');
            // $this->view('login');
            redirect('/Login', 'refresh');
        }
    }
    public function edit_account()
    {
        $this->load->library('session');

        // $data['hello'] = $this->session->userdata('email');

        // $data['hello']='hellow world';

        if ($_SESSION['email']) {
            $emailchk = $this->session->userdata('email');

            $data['user'] = $this->clients->edit_checking($emailchk);

            ///  var_dump($data); die;

            // return $data;
            // $this->load->view('edit_account', $data);
            $this->view('edit_account', $data);
            // return $data;

        } else {

            $data['hello'] = 'not login';
        }

        

    }
    public function update_account()
    {


        
        $ClientsId = $this->input->post('ClientsId');
        $Email = $this->input->post('Email');
     
 
        $Password = $this->input->post('Password');


        $data = $this->clients->clientId_checking($ClientsId);

        if ($data) {

            // $this->view('myaccount');

            $this->clients->checkupdate($Email, $Password);

            // var_dump($data);die;
            $this->session->set_flashdata('error', 'success');

            $newdata = array(
                'clientId'  => $data['ClientsId'],
                'username'  => $data['FirstName'],
                'lastname'  => $data['LastName'],
                'email'     => $Email,
                'logged_in' => TRUE
            );

            $this->session->set_userdata($newdata);


            redirect('/Edit-Account', 'refresh');
        } else {


            $this->session->set_flashdata('error', 'Already used Email Address.');

            redirect('/Edit-Account', 'refresh');
        }

        $this->view('myaccount');
    }
    public function my_orders()
    {


        $d['orders'] = $this->orders->my_orders();


        // var_dump($d); die;

        $this->view('my_orders', $d);
    }


    public function quotation_add()
    {

        $ClientId = $this->input->post('ClientId');
        $ProductId = $this->input->post('ProductId');

        // print_r($ClientId);

        // $ClientId = $_POST['ClientId'];
        // $ProductId = $_POST['ProductId'];




        $data['asdas'] = $this->quotation->addtoquotation($ClientId, $ProductId);


        // var_dump($data); die;
        $response = array(
            'success' => true,
            'ClientId' => $ClientId['ClientId'],
            'ProductId' => $ProductId['ProductId'],
        );

        echo json_encode($response);
    }


    public function remove_data_quotation_list()
    {

        $QuoId = $this->input->post('QuoId');

        $this->quotation->remove_data_quotation_list($QuoId);
    }

    function gotocart()
    {
        // $this->load->library('cart');


        $CartProductId = $this->input->post('CartProductId');
        $ProName = $this->input->post('ProName');
        $ProPrice = $this->input->post('ProPrice');
        $img = $this->input->post('img');
        $qty = $this->input->post('qty');




        $data = array(
            'rowid'  => 'b99ccdf16028f015540f341130b6d8ec',

            'id'      => $CartProductId,
            'qty'     => $qty,
            'img'     => $img,
            'price'   => $ProPrice,
            'name'    => $ProName,
            'options' => array('Size' => 'L', 'Color' => 'Red')
        );

        $this->cart->insert($data);


        echo json_encode($data);
    }
    public function delete_cart()
    {
        $this->load->library('cart');

        $CartProductId = $this->input->post('CartProductId');


        $data = array(
            'rowid'  => $CartProductId,
            'qty'    => 0,

        );

        // var_dump($data); die;
        $this->cart->update($data);
        echo json_encode($data);

    }
    public function cart_page()
    {
        $this->load->library('cart');

        $data['user'] = $this->session;

        $this->view('cart');
    }

    public function checkout()
    {
        $this->load->library('cart');
        
        $this->view('checkout');
    }


    public function logout()
    {
        unset(
            $_SESSION['username'],
            $_SESSION['lastname'],
            $_SESSION['email']
        );
        $this->view('login');
    }
    public function Sessions()
    {

        $data['clients'] = $this->clients->get_clients_order();
        $data['partners'] = $this->partners->get_partners_order();



        
        if ($_SESSION['email']) {
            $emailchk = $this->session->userdata('email');

            $data['user'] = $this->clients->edit_checking($emailchk);

            ///  var_dump($data); die;

            // return $data;
            // $this->load->view('edit_account', $data);
            $this->view('sessions', $data);
            // return $data;

        } else {

            $data['hello'] = 'not login';
        }



        // $this->view('sessions', $data);
        // $this->view('sessions');
    }
    








}
