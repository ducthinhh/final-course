<?php
  function is_empty($field, $message){
    if(strlen(trim($field)) == 0){
      $_SESSION["flash"] = $message;
      return true;
    }
    return false;
  }

  function is_exist_catalogs($name){
    $sql = "select * from users where name='$name'";
    GLOBAL $conn;
    $result = $conn->query($sql);
    if($result->num_rows > 0){
      $_SESSION["flash"] = "catalogs was existed.";
      return true;
    }
    return flase;
  }
  function redirect($url){
    header("location: $url");
    die();
  }
?>
