<?php

class Contact{

      private name;
      private image;
      private number;
      private email;
      


      function __construct__ ( $add_name , $add_image , $add_number, $add_email  ) {
      	$this->name=$add_name;
        $this->name=$add_name;
        $this->number=$add_number;
        $this->email=$add_email;
      }


     function setName($new_name)
        {
           $this->name = (string) $new_name;
            
            }
        }
        function getName()
        {
            return $this->name;
        }



       function setImage($new_image)
        {
           $this->image = (string) $new_image;
            
            }
        }
        function getImage()
        {
            return $this->image;
        }




        function setPhone($new_phone)
        {
           $this->phone =  $new_phone;
            
            }
        }
        function getPhone()
        {
            return $this->phone;
        }


       
        function setEmail($new_email)
        {
           $this->email =  $new_email;
            
            }
        }
        function getEmail()
        {
            return $this->email;
        }
        

        function save(){
        	array_push($_SESSION['list_of_contacts'], $this);



        }

        static function getAll(){
        	return ($_SESSION['list_of_contacts'];

        }


       static function clearAll(){
        	$_SESSION['list_of_contacts']= array();

        }
}


?>