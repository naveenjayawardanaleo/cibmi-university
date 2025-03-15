<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends Front_Controller
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
        // $this->load->model('Gallery_model', 'gallery');
        // $this->load->model('Hardware_document_model', 'hardwaredoc');
        $this->load->model('Hardware_model', 'hardware');
        // $this->load->model('Pantry_model', 'pantry');
        // $this->load->model('Pantry_document_model', 'pantrydoc');
        // $this->load->model('Polymer_model', 'polymer');
        // $this->load->model('Polymer_document_model', 'polymerdoc');
        $this->load->model('Project_model', 'project');
        $this->load->model('Testemonials_model', 'testemonials');
        $this->load->model('Gallery_model', 'gallery');
        // $this->load->model('Quartz_model', 'quartz');
        // $this->load->model('Quartz_document_model', 'quartzdoc');
        $this->load->model('Page_model', 'pages');

        $this->load->helper('xml');
        $this->load->helper("url");
        $this->load->library('pagination');
        $this->load->helper('download');
        $this->load->library('cart');

    }

    public function error()
    {
        // $d['product'] = $this->products->get_all_by_order();

        $this->view('404');
    }

    public function index()
    {
        $d['today'] = date('Y-m-d');
        $d['brands'] = $this->brand->get_all_by_order();
        // $d['banners'] = $this->banners->get_all_by_order();

        $d['records'] = $this->testemonials->get_testemonials_order();


        // $d['advertistment1'] = $this->pages->get_page_details(12);
        // $d['advertistment2'] = $this->pages->get_page_details(13);


        $d['hardware'] = $this->hardware->get_all();
        // $d['categories'] = $this->category->get_all_by_order();
        // $d['projects'] = $this->project->get_all_by_order(6);
        // $d['gallery'] = $this->gallery->get_gallery_from_order();
        // $d['partners'] = $this->partners->get_partners_order();
        $this->view('index', $d);
    }

    public function about()
    {

        $d['pages'] = $this->pages->get_page_details(2);
        $d['about2'] = $this->pages->get_page_details(3);
        $d['vision'] = $this->pages->get_page_details(7);
        $d['mission'] = $this->pages->get_page_details(10);
        $d['partners'] = $this->partners->get_partners_order();

        $d['today'] = date('Y-m-d');
        $this->view('about', $d);
    }
    public function terms_condition()
    {

        // $d['partners'] = $this->partners->get_partners_order();

        $d['pages'] = $this->pages->get_page_details(6);

        $this->view('terms_condition', $d);
    }
    public function how_to_entroll()
    {

        // $d['partners'] = $this->partners->get_partners_order();

        // $d['pages'] = $this->pages->get_page_details(11);

        $this->view('how_to_enroll', $d);
    }
    public function courses()
    {

        // $d['partners'] = $this->partners->get_partners_order();

        // $d['pages'] = $this->pages->get_page_details(11);

        $this->view('courses', $d);
    }

    public function delivery_information()
    {

        // $d['partners'] = $this->partners->get_partners_order();
        $d['pages'] = $this->pages->get_page_details(4);

        $d['today'] = date('Y-m-d');
        $this->view('delivery_information', $d);
    }
    public function privacy_policy()
    {
        $d['pages'] = $this->pages->get_page_details(5);

        // $d['partners'] = $this->partners->get_partners_order();

        $d['today'] = date('Y-m-d');
        $this->view('privacy_policy', $d);
    }
    public function faq()
    {
        $d['pages'] = $this->pages->get_page_details(5);

        // $d['partners'] = $this->partners->get_partners_order();

        $d['today'] = date('Y-m-d');
        $this->view('faq', $d);
    }
    public function contact_us()
    {
        $d['pages'] = $this->pages->get_page_details(5);

        // $d['partners'] = $this->partners->get_partners_order();

        $d['today'] = date('Y-m-d');
        $this->view('contact_us', $d);
    }




    public function online_cv()
    {

        // $d['partners'] = $this->partners->get_partners_order();

        $d['today'] = date('Y-m-d');
        $this->view('online_cv', $d);
    }
    public function contact()
    {
        if ($this->input->post()) {
            $this->load->library('email');
            $post = $this->input->post('form');
            $to_email = email;
            $from_email = $post['Email'];
            $this->email->from($from_email);
            $this->email->to($to_email);
            $this->email->subject("Contact Form");
            $mge = "<table border='1' cellpadding='2' >";
            foreach ($post as $key => $value) {
                $mge .= "<tr>"
                    . "<td><strong>" . ucfirst(str_replace("_", " ", $key)) . "</strong></td>"
                    . "<td>" . (is_array($value) ? implode(", ", $value) : $value) . "</td>"
                    . "</tr>";
            }
            $mge .= "</table>";

            $this->email->message($mge);
            $this->email->set_mailtype("html");
            // Send mail
            if ($this->email->send()) {
                $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Thank you. We will contact you shortly </strong>']);
            } else {
                $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Something went wrong. Please try again shortly </strong>']);
            }
        }
        $this->view('contact');
    }
    public function inquiry()
    {
        if ($this->input->post()) {
            $this->load->library('email');
            $post = $this->input->post('form');
            $to_email = email;
            $from_email = $post['Email'];
            $name = $post['Full-Name'];
            $this->email->from($from_email, $name);
            $this->email->to($to_email);
            $this->email->subject("Contact Form");

            $mge = "<table border='1' cellpadding='2' style='    border-collapse: collapse;
            width: 100%;'>";
            foreach ($post as $key => $value) {
                $mge .= "<tr>"
                    . "<td style='padding: 10px;'><strong>" . ucfirst(str_replace("_", " ", $key)) . "</strong></td>"
                    . "<td>" . (is_array($value) ? implode(", ", $value) : $value) . "</td>"
                    . "</tr>";
            }
            $mge .= "</table>";

            $this->email->message($mge);
            $this->email->set_mailtype("html");
            // Send mail
            if ($this->email->send()) {
                $this->session->set_flashdata('notification', ["alert" => "warning", "text" => '<strong> Thank you. We will contact you shortly </strong>']);
            } else {
                $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Something went wrong. Please try again shortly </strong>']);
            }
        }
        $this->view('contact');
    }

    public function category($id)
    {
        $d['today'] = date('Y-m-d');
        $d['total'] = $this->hardware->get_by(array('CategoryId' => $id));
        $category = $this->category->get($id);
        /* Pagination */
        $config["total_rows"] = count($d['total']);
        $config["per_page"] = 12;
        $config["uri_segment"] = 2;
        $config['page_query_string'] = TRUE;
        $config['query_string_segment'] = 'page';
        $config["use_page_numbers"] = TRUE;
        $config["full_tag_open"] = '<ul>';
        $config["full_tag_close"] = '</ul>';
        $config['next_link'] = 'Next &gt;';
        $config['next_tag_open'] = '<li class="prev-next">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&lt; Previous';
        $config['prev_tag_open'] = '<li class="prev-next">';
        $config['prev_tag_close'] = '</li>';
        $config['first_link'] = '<<';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = '>>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active-page">';
        $config['cur_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config["base_url"] = base_url() . "Category/" . url_title($category->CategoryTitle) . '/' . $category->CategoryId;

        $this->pagination->initialize($config);
        if ($this->input->get('page')) {
            $page = $this->input->get('page');
        } else {
            $page = 1;
        }
        $d['records'] = $this->hardware->get_all_per_page_with_category($config["per_page"], $page, $id);
        $d['categories'] = $this->category->get_all_by_order();
        $d["links"] = $this->pagination->create_links();
        $this->view('hardware', $d);
    }

    public function hardware()
    {
        $d['today'] = date('Y-m-d');
        $total = $this->hardware->get_all();
        /* Pagination */
        $config["total_rows"] = count($total);
        $config["per_page"] = 12;
        $config["uri_segment"] = 2;
        $config['page_query_string'] = TRUE;
        $config['query_string_segment'] = 'page';
        $config["use_page_numbers"] = TRUE;
        $config["full_tag_open"] = '<ul>';
        $config["full_tag_close"] = '</ul>';
        $config['next_link'] = 'Next &gt;';
        $config['next_tag_open'] = '<li class="prev-next">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&lt; Previous';
        $config['prev_tag_open'] = '<li class="prev-next">';
        $config['prev_tag_close'] = '</li>';
        $config['first_link'] = '<<';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = '>>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active-page"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['base_url'] = base_url() . "Hardware";

        $this->pagination->initialize($config);
        if ($this->input->get('page')) {
            $page = $this->input->get('page');
        } else {
            $page = 1;
        }

        $d['hardware'] = $this->hardware->get_all();



        
        // $d['records'] = $this->hardware->get_all_per_page($config["per_page"], $page);
        // $d['categories'] = $this->category->get_all_by_order();
        // $d["links"] = $this->pagination->create_links();
        $this->view('news', $d);
    }

    public function hardware_details($id)
    {
        $d['today'] = date('Y-m-d');
        $d['record'] = $this->hardware->get($id);
        // $d['document'] = $this->hardwaredoc->get_by(array('HardwareId' => $id));
        $d['recent'] = $this->hardware->get_all(4);
        $this->view('news_details', $d);
    }

    public function pantry()
    {
        $d['today'] = date('Y-m-d');
        $total = $this->pantry->get_all();
        /* Pagination */
        $config["total_rows"] = count($total);
        $config["per_page"] = 12;
        $config["uri_segment"] = 2;
        $config['page_query_string'] = TRUE;
        $config['query_string_segment'] = 'page';
        $config["use_page_numbers"] = TRUE;
        $config["full_tag_open"] = '<ul>';
        $config["full_tag_close"] = '</ul>';
        $config['next_link'] = 'Next &gt;';
        $config['next_tag_open'] = '<li class="prev-next">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&lt; Previous';
        $config['prev_tag_open'] = '<li class="prev-next">';
        $config['prev_tag_close'] = '</li>';
        $config['first_link'] = '<<';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = '>>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active-page">';
        $config['cur_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['base_url'] = base_url() . "Pantry-Cupboards";

        $this->pagination->initialize($config);
        if ($this->input->get('page')) {
            $page = $this->input->get('page');
        } else {
            $page = 1;
        }
        $d['records'] = $this->pantry->get_all_per_page($config["per_page"], $page);
        $d['categories'] = $this->category->get_all_by_order();
        $d["links"] = $this->pagination->create_links();
        $this->view('pantry', $d);
    }

    public function pantry_details($id)
    {
        $d['today'] = date('Y-m-d');
        $d['record'] = $this->pantry->get($id);
        $d['document'] = $this->pantrydoc->get_by(array('PantryId' => $id));
        $d['recent'] = $this->pantry->get_all_by_order(3);
        $this->view('pantry-details', $d);
    }

    public function polymer()
    {
        $d['today'] = date('Y-m-d');
        $total = $this->polymer->get_all();
        /* Pagination */
        $config["total_rows"] = count($total);
        $config["per_page"] = 12;
        $config["uri_segment"] = 2;
        $config['page_query_string'] = TRUE;
        $config['query_string_segment'] = 'page';
        $config["use_page_numbers"] = TRUE;
        $config["full_tag_open"] = '<ul>';
        $config["full_tag_close"] = '</ul>';
        $config['next_link'] = 'Next &gt;';
        $config['next_tag_open'] = '<li class="prev-next">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&lt; Previous';
        $config['prev_tag_open'] = '<li class="prev-next">';
        $config['prev_tag_close'] = '</li>';
        $config['first_link'] = '<<';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = '>>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active-page">';
        $config['cur_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['base_url'] = base_url() . "Polymer-Boards";

        $this->pagination->initialize($config);
        if ($this->input->get('page')) {
            $page = $this->input->get('page');
        } else {
            $page = 1;
        }
        $d['records'] = $this->polymer->get_all_per_page($config["per_page"], $page);
        $d['categories'] = $this->category->get_all_by_order();
        $d["links"] = $this->pagination->create_links();
        $this->view('polymer', $d);
    }

    public function polymer_details($id)
    {
        $d['today'] = date('Y-m-d');
        $d['record'] = $this->polymer->get($id);
        $d['document'] = $this->polymerdoc->get_by(array('PolymerId' => $id));
        $d['recent'] = $this->polymer->get_all_by_order(3);
        $this->view('polymer-details', $d);
    }

    public function project()
    {
        $d['today'] = date('Y-m-d');
        $total = $this->project->get_all();
        /* Pagination */
        $config["total_rows"] = count($total);
        $config["per_page"] = 6;
        $config["uri_segment"] = 2;
        $config['page_query_string'] = TRUE;
        $config['query_string_segment'] = 'page';
        $config["use_page_numbers"] = TRUE;
        $config["full_tag_open"] = '<ul>';
        $config["full_tag_close"] = '</ul>';
        $config['next_link'] = 'Next &gt;';
        $config['next_tag_open'] = '<li class="prev-next">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&lt; Previous';
        $config['prev_tag_open'] = '<li class="prev-next">';
        $config['prev_tag_close'] = '</li>';
        $config['first_link'] = '<<';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = '>>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active-page">';
        $config['cur_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['base_url'] = base_url() . "Project";

        $this->pagination->initialize($config);
        if ($this->input->get('page')) {
            $page = $this->input->get('page');
        } else {
            $page = 1;
        }
        $d['records'] = $this->project->get_all_per_page($config["per_page"], $page);
        $d['categories'] = $this->category->get_all_by_order();
        $d["links"] = $this->pagination->create_links();
        $this->view('project', $d);
    }

    public function project_details($id)
    {
        $d['today'] = date('Y-m-d');
        $d['record'] = $this->project->get($id);
        $d['document'] = $this->projectdoc->get_by(array('ProjectId' => $id));
        $d['recent'] = $this->project->get_all_by_order(3);
        $this->view('project-details', $d);
    }

    public function quartz()
    {
        $d['today'] = date('Y-m-d');
        $total = $this->quartz->get_all();
        /* Pagination */
        $config["total_rows"] = count($total);
        $config["per_page"] = 12;
        $config["uri_segment"] = 2;
        $config['page_query_string'] = TRUE;
        $config['query_string_segment'] = 'page';
        $config["use_page_numbers"] = TRUE;
        $config["full_tag_open"] = '<ul>';
        $config["full_tag_close"] = '</ul>';
        $config['next_link'] = 'Next &gt;';
        $config['next_tag_open'] = '<li class="prev-next">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&lt; Previous';
        $config['prev_tag_open'] = '<li class="prev-next">';
        $config['prev_tag_close'] = '</li>';
        $config['first_link'] = '<<';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = '>>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active-page">';
        $config['cur_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['base_url'] = base_url() . "Quartz-Stones";

        $this->pagination->initialize($config);
        if ($this->input->get('page')) {
            $page = $this->input->get('page');
        } else {
            $page = 1;
        }
        $d['records'] = $this->quartz->get_all_per_page($config["per_page"], $page);
        $d['categories'] = $this->category->get_all_by_order();
        $d["links"] = $this->pagination->create_links();
        $this->view('quartz', $d);
    }

    public function quartz_details($id)
    {
        $d['today'] = date('Y-m-d');
        $d['record'] = $this->quartz->get($id);
        $d['document'] = $this->quartzdoc->get_by(array('QuartzId' => $id));
        $d['recent'] = $this->quartz->get_all_by_order(3);
        $this->view('quartz-details', $d);
    }
    public function founder_message()
    {
        $this->view('founder_message');
    }
    public function who_we_are()
    {

        $d['records'] = $this->testemonials->get_testemonials_order();

        $this->view('who_we_are', $d);
    }
    public function training_center()
    {
        $this->view('training_center');
    }
    public function products_explain()
    {
        $this->view('products_explain');
    }


    public function apparel()
    {
        $this->view('apparel');
    }
    public function brass()
    {
        $this->view('brass');
    }
    public function spices_and_tea()
    {
        $this->view('spices_and_tea');
    }
    public function other()
    {
        $this->view('other');
    }




    public function products($title, $category_id)
    {
        $tot = $this->products->get_totol_count($category_id);
        $category = $this->category->get($category_id);

        // $this->view('products');
        // print_r($tot);
        $config["total_rows"] = $tot;
        $config["per_page"] = 12;
        $config["uri_segment"] = 3;
        $config['page_query_string'] = TRUE;
        $config['query_string_segment'] = 'page';
        $config["use_page_numbers"] = TRUE;
        $config["full_tag_open"] = '<ul class="pagination mb-0 pagination-shop justify-content-center justify-content-md-start">';
        $config["full_tag_close"] = '</ul>';
        $config['next_link'] = '>';
        $config['next_tag_open'] = '<li class="page-numbers prev-next">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '<';
        $config['prev_tag_open'] = '<li class="page-numbers prev-next">';
        $config['prev_tag_close'] = '</li>';
        $config['first_link'] = '<<';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = '>>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li aria-current="page" class="page-numbers active-page current"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li  class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config["base_url"] = base_url() . "Products/" . url_title($category->CategoryTitle) . '/' . $category->CategoryId;
        $this->pagination->initialize($config);
        if ($this->input->get('page')) {
            $page = $this->input->get('page');
        } else {
            $page = 1;
        }
        // i change for fix short description bug

        $d['records'] = $this->products->get_product_with_limit($category_id, $config["per_page"], $page);



        // new
        // $d['records'] = $this->products->get_all_by_order();
        $d['cate'] = $this->category->get_all_by_order();
        $d['cate_details'] = $category;
        $d["links"] = $this->pagination->create_links();




        // form area 
        $this->view('products', $d);
    }
    public function products_details($name, $id)
    {
        $d['obj'] = $this->products->get_products_details_home($id);
        $d['cate'] = $this->category->get_all_by_order();
        $d['related'] = $this->products->related_products($d['obj']->CategoryId, $id);

        // form area 

        if ($this->input->post()) {
            $this->load->library('email');
            $post = $this->input->post('form');
            $to_email = email;
            $from_email = $post['Email'];
            $this->email->from($from_email);
            $this->email->to($to_email);

            $productTitle = $post['Product-Name'];



            $this->email->subject("Inquiry for : " . $productTitle);
            $mge = "<table border='1' cellpadding='2' >";
            foreach ($post as $key => $value) {
                $mge .= "<tr>"
                    . "<td><strong>" . ucfirst(str_replace("_", " ", $key)) . "</strong></td>"
                    . "<td>" . (is_array($value) ? implode(", ", $value) : $value) . "</td>"
                    . "</tr>";
            }
            $mge .= "</table>";

            $this->email->message($mge);
            $this->email->set_mailtype("html");
            // Send mail
            if ($this->email->send()) {
                $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Thank you. We will contact you shortly </strong>']);
            } else {
                $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Something went wrong. Please try again shortly </strong>']);
            }
        }


        $this->view('product-details', $d);
        // print_r($d['related']);
    }
    public function partners()
    {
        // $data['partners'] = $this->partners->get_partners_order();
        $this->view('partners', $data);
        // echo "ela";
    }
    public function clients()
    {
        $data['partners'] = $this->partners->get_partners_order();
        // $this->view('partners', $data);
        $this->view('clients', $data);
    }
    public function testimonials()
    {
        $data['records'] = $this->testemonials->get_testemonials_order();
        $this->view('testimonials', $data);
    }
    public function gallery()
    {
        $data['records'] = $this->gallery->get_all_gallery();
        $this->view('gallery', $data);
        // print_r($data['records']);
    }

    public function chairman()
    {
        // $data['records'] = $this->gallery->get_all_gallery();
        $this->view('chairman');
        // print_r($data['records']);
    }
    
    public function mission_vision()
    {
        // $data['records'] = $this->gallery->get_all_gallery();
        $this->view('mission_vision');
        // print_r($data['records']);
    }

    
    // public function searchdata()
    // {
    //     $d['products'] = $this->products->get_prodcuts_by_search($_POST['search']);

    //     echo $d;
    //     $this->view('product-search', $d);
    // }
    public function product_search()
    {
        $this->load->model('Products_model');
        $search = $this->input->post('serach');
        $data['product'] =  $this->Products_model->search($search);
        $this->view('product-search', $data);
    }
    public function find_items()
    {

        $d['product'] = $this->products->get_prodcuts_by_search($_POST['search']);

        foreach ($d['product'] as $key => $value) {
            $value->url = url_title($value->ProductTitle);
        }
        $response = array(
            'success' => true,
            'data' => $d['product'],
        );

        echo json_encode($response);
    }
}
