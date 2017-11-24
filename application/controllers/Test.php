<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Dashboard controller.
 * 
 * @extends CI_Controller
 */
class Test extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));        
    }

    public function index()
    {
        view('test.index');
    }

    public static function controllerName() {
        return "Test controller";
    }

}