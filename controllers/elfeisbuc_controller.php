<?php
class elfeisbuc_controller extends CI_Controller {

		public function index(){
        	$this->load->helper(array('form', 'url'));
        	$this->load->view('login_view');
        	$this->load->view('footer_view');
		}

		public function registro(){
			$this->load->helper(array('form', 'url'));
        	$this->load->view('register_view');
        	$this->load->view('footer_view');			
		}

        public function paginaprincipal() {
        	$this->load->helper('url');
        	$this->load->view('paginaprincipal_view');
        	$this->load->view('footer_view');
        }

        public function mipagina(){
        	$this->load->helper('url');
        	$this->load->view('mipagina_view');
        	$this->load->view('footer_view');
        }

        public function formularioregistro() {
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->load->model('elfeisbuc_modelo', '', TRUE);

                $this->form_validation->set_rules('user_register', 'Nombre de usuario', 'required|is_unique[user.nick]', 
            			array('required' => 'El nombre de usuario es necesario.', 'is_unique' => 'Ya existe una cuenta con ese nick')
            	);
                $this->form_validation->set_rules('email_register', 'Dirección de correo electrónico', 'required|valid_email|is_unique[user.email]',
                        array('required' => 'Es necesario introducir una dirección de correo electrónico.', 'valid_email' => 'La dirección introducida no es válida', 'is_unique' => 'Ya existe una cuenta con esa dirección de correo electrónico')
                );
                $this->form_validation->set_rules('pass_register', 'Contraseña', 'required',
                        array('required' => 'Es necesario introducir una contraseña')
                );
                $this->form_validation->set_rules('pass2_register', 'Confirmar contraseña', 'required|matches[pass_register]',
                        array('required' => 'Es necesario introducir una contraseña', 'matches' => 'Las contraseñas no coinciden')
                );

                if ($this->form_validation->run() == FALSE) {
            			$this->load->helper(array('form', 'url'));
        				$this->load->view('register_view');
        				$this->load->view('footer_view');
                }
                else {
                		$this->elfeisbuc_modelo->crearUser();
                		echo "<script>alert('El usuario ha sido creado con éxito.')</script>";
                    	$this->load->helper('url');
        				$this->load->view('login_view');
        				$this->load->view('footer_view');
                }
        }

        public function formulariologin() {
    		$this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->load->model('elfeisbuc_modelo', '', TRUE);

            $this->form_validation->set_rules('user_login', 'Nombre de usuario', 'required', 
            			array('required' => 'El nombre de usuario es necesario.')
            	);
            $this->form_validation->set_rules('pass_login', 'Contraseña', 'required',
                    array('required' => 'Es necesario introducir una contraseña')
                ); 

            if ($this->form_validation->run() == FALSE) {
            			$this->load->helper(array('form', 'url'));
        				$this->load->view('login_view');
        				$this->load->view('footer_view');
                }
                else {

                	if ($this->elfeisbuc_modelo->validarUser() == 1){
			        	$this->load->view('paginaprincipal_view');
			        	$this->load->view('footer_view');
                	}

                	if ($this->elfeisbuc_modelo->validarUser() == 2){
                		echo "<script>alert('La contraseña introducida no es correcta.')</script>";
        				$this->load->view('login_view');
        				$this->load->view('footer_view');
                	}

                	else if ($this->elfeisbuc_modelo->validarUser() == 3){
                		echo "<script>alert('El usuario introducido no existe.')</script>";
        				$this->load->view('login_view');
        				$this->load->view('footer_view');
			        }	
                }                       
        }

}