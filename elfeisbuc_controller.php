<?php
class elfeisbuc extends CI_Controller {

        public function paginaprincipal() {
        	$this->load->helper('url');
        	$this->load->view('paginaprincipal_view');
        	$this->load->view('footer_view');
        }

        

       


//validamos si es único
$this->form_validation->set_rules("email","Email","trim|required|valid_email|xss_clean|is_unique[user.email]");
//si no lo es mostramos un mensaje con set_message
$this->form_validation->set_message('is_unique', 'El %s ya está ocupado.');

}