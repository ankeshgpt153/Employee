<?php
   class user {
      /* Member variables */
      var $name;
      var $email;
	  var $contactNumber;
	 
      
      /* Member functions */
      function setName($nam){
         $this->name = $nam;
      }
      
      function getName(){
         echo $this->name ."<br/>";
      }
      
      function setEmail($ema){
         $this->email = $ema;
      }
      
      function getEmail(){
         echo $this->email ." <br/>";
      }
	  
	  function setContact($cntct){
         $this->contactNumber = $cntct;
      }
      
      function getContact(){
         echo $this->contactNumber." <br/>";
      }
	  
	  
      
   }
?>