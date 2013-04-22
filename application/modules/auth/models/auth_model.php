<?php
    class Auth_model extends CI_Model {
    
        public function verify_user($username, $password) {
            
            if ($username == 'hr' AND sha1($password) === 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4') {
                return true;
            }
            return false;
            
        }
        
    }
    
    
    
     
?>