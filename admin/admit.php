<?php
session_start();
function StudentCode(){
    $rs  = mysqli_query($con,"SELECT CONCAT('CUTM',LPAD(RIGHT(ifnull(max(s_id),'CUTM00000'),5) + 1,5,'0')) FROM admission");
    return mysqli_fetch_array($rs)[0];
  }
  
  function StudentPsw()
  {
      $alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
      $pass = array();
      $alphaLength = strlen($alphabet) - 1;
      for($i=0;$i<8;$i++)
      {
          $n=rand(0,$alphaLength);
          $pass[]=$alphabet[$n];
      }
      return implode($pass);
  }