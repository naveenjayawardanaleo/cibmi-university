<?php

class Front_Controller extends CI_Controller

{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('text');
        if (!defined('IMG')) define('IMG', base_url('images') . "/");
        if (!defined('UP')) define('UP', base_url('uploads') . "/");
        if (!defined('UPT')) define('UPT', base_url('uploads/thumbs') . "/");
    }



    function view($page, $data = [])
    {
        // $this->load->model('Category_model', 'category');
        // $this->load->model('Maincategory_model', 'maincategory');


        $data['maincat'] = $this->maincategory->get_all();

        $data['cat'] = $this->category->get_all();

       
        $this->load->view($page, $data);
    }



    static function convertCurrency($amount, $from, $to)
    {
        $url  = "https://www.google.com/finance/converter?a=$amount&from=$from&to=$to";
        $data = file_get_contents($url);
        preg_match("/<span class=bld>(.*)<\/span>/", $data, $converted);
        $converted = preg_replace("/[^0-9.]/", "", $converted[1]);
        return round($converted, 3);
    }
}
