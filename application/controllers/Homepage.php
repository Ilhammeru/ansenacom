<?php
defined('BASEPATH') OR exit('No direct script access alloweed');

class Homepage extends CI_Controller {
    public function index() {
        $cloudImg = base_url('assets/images/Ansena-cloud.png');
        $gateImg = base_url('assets/images/gate.png');
        $attr = [
          'title'   => 'Ansena Grup Asia',
          'cloud'   => $cloudImg,
          'gate'    => $gateImg
        ];
        $this->load->view('template/header', $attr);
        $this->load->view('home/ansena', $attr);
        $this->load->view('template/footer');
    }
}

?>
