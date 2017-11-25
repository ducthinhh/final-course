<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/products-helper.php"; ?>
<?php
  if(isset($_GET["id"])){
    $id = $_GET["id"];
    echo $id;
    $sql = "delete from products where id =$id";
    $result = $conn->query($sql);
    if ($result) {
      $_SESSION["flash"] = "Xoa Thanh Cong";
    }else{
      $_SESSION["flash"] = "Xoa Khong Thanh Cong";
    }
  }else{
    $_SESSION["flash"] = "Sai Tham So";
  }
  redirect("index.php");
?>
