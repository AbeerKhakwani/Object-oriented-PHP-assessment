<?php

    class Contact
    {
        private $name;
        private $image;
        private $phone;
        private $email;
        function __construct($album_name, $band_name, $image_path, $album_email = 10.99)
        {
            $this->name = $album_name;
            $this->image = $band_name;
            $this->phone = $image_path;
            $this->email = $album_email;
        }
        function setemail($new_email)
        {         
            
                $this->email = $new_email;
               
        }
        function getemail()
        {
            return $this->email;
        }
        function setname($new_name)
        {
            $this->name = $new_name;
        }
        function getname()
        {
            return $this->name;
        }
        function setimage($new_image)
        {
            $this->image = $new_image;
        }
        function getimage()
        {
            return $this->image;
        }
        function setphone($new_phone)
        {
            $this->phone = $new_phone;
        }
        function getphone()
        {
            return $this->phone;
        }

        function save()  {
          array_push($_SESSION['list_of_contacts'], $this);

        }
        static function getAll(){

          return $_SESSION['list_of_contacts'];

        }
          static function deleteAll() {
          $_SESSION['list_of_contacts'] = array();
    }
    }
?>