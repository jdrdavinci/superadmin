<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Dashboard controller.
 * 
 * @extends CI_Controller
 */
class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model("SuperheroModel", "superhero");

        $superheroes = $this->superhero->getSuperheroes();

        $this->slice->with('superheroes', $superheroes);

        view('dashboard.index');
    }

}