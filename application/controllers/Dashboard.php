<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Fagner
 * @date 24/06/2016
 */
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('login'))
            redirect('login');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';

        $this->parser->parse('dashboard', $data);
    }

    public function erro404()
    {
        $data['title'] = 'Erro 404 - Página Não Encontrada';

        $this->load->view('erro404', $data);
    }
}