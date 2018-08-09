<?php
  $connection = new mysqli("localhost","root","","smanta");
  if(!$connection){
    echo "Connection Error!";
    exit();
  }
