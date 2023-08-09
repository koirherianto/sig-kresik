<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies

        $this->load->model('m_lahan');
        
    }

    public function index()
    {
        // if(!$this->is_logged_in()) {}
        $data = array(
            'title' => 'Pemetaan',
            'lahan' => $this->m_lahan->get_all_data(),
            'isi' => 'v_home'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
        
    }

    public function detail_lahan($id_lahan)
    {
        $data = array(
            'title' => 'Lahan SKPT',
            'lahan' => $this->m_lahan->detail($id_lahan),
            'isi' => 'v_detail_lahan'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

}

/* End of file Home.php */
