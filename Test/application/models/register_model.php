 <?php  
 class register_model extends CI_Model {  
      function insertdata($options = array()){  
           if(isset($options['name']))  
                $this->db->set('name',strip_tags($options['name']));  
                if(isset($options['email']))  
                $this->db->set('email',strip_tags($options['email'])); 
            if(isset($options['phone']))  
                $this->db->set('phone',strip_tags($options['phone']));  
           if(isset($options['password']))  
                $this->db->set('password',strip_tags($options['password']));
           if(isset($options['city']))  
                $this->db->set('city',($options['city'])); 
            if(isset($options['state']))  
                $this->db->set('state',strip_tags($options['state'])); 
             if(isset($options['address']))  
                $this->db->set('address',strip_tags($options['address'])); 
              if(isset($options['pincode']))  
                $this->db->set('pincode',strip_tags($options['pincode']));  
          
          
          
                $this->db->insert("clist");  
           return $this->db->insert_id();  
      }  
 }  
 ?>  