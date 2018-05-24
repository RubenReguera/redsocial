<?php
class elfeisbuc extends CI_Controller {

        public function paginaprincipal() {
        	$this->load->helper('url');
        	$this->load->view('paginaprincipal_view');
        	$this->load->view('footer_view');
        }

}