<?php
      //model 1
      /*
      $age = array("peter"=>"35", "ben"=> "37", "joe" => "43");

      header("Content-Type: application/json");
      echo json_encode($age);
      */
      //model 2
     $age['Rose'] = '25';
     $age['Jeni'] = '26';
     $age['Lalalisa'] = '24' ;
     $age['Jiso'] = '27';

     header("Content-Type: application/json");
     echo json_encode($age);