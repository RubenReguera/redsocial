<?php 
/**
 * 
 */
class elfeisbuc_modelo extends CI_Model
{
	public function crearUser()
	{
		if (!is_null( $this->input->post('user_register') )&& (!is_null($this->input->post('email_register'))) && (!is_null($this->input->post('email_register'))) ) {
        $nick  = $this->input->post('user_register');
        $email  = $this->input->post('email_register');
       $pass=$this->input->post('pass_register');
       $arrayDatosUser  = array('nick' => $nick,'email' => $email, 'pass'=> $pass);
       
       // $arrayID = array('id_usuarios' => $userLoginID);
      
                 $this->db->insert('user', $arrayDatosUser);
         
    }else {
  return FALSE; 
    }
	}

}
?>