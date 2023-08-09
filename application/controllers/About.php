<?php
// File: About.php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index() {
        // Load the view file "about_view.php" from the "views" folder
        // $this->load->view('about_view');

        $data = array(
            'title' => 'About',
            'isi' => 'about_view'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }
}
