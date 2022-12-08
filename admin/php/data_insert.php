<?php
require('../include/c_config.php');
require('dynamic_sql_command.php');
 


if (isset($_GET["action"]))       {$action=$_GET["action"];}
elseif (isset($_POST["action"]))  {$action=$_POST["action"];}


if($action=='main_category_post'){
  $Name                   = $_POST['Name'];
  $Slug                   = $_POST['Slug'];
  $_POST['unique_id']     =  uniqid();
  $Sort_Description       = $_POST['Sort_Description'];
  $Full_Description       = $_POST['Full_Description'];
  $Product_Tags           = $_POST['Product_Tags']; 

   insert_data('main_category',$_POST,$conn);

   $result = array(
    "message" => 'Successfully',
    "response_code" => '200',
    "heading" => 'Case status Add to successfully',
    "text" => 'Assigned the ticket',
    "icon" => 'success'
  );
}


if($action=='sub_category_post'){
  $Name                       =  $_POST['Name'];
  $Slug                       =  $_POST['Slug']; 
  $unique_id                  =  $_POST['unique_id']; 
  $_POST['Parent_uniqueid']   =  $_POST['Parent_uniqueid']; 
  $Sort_Description           =  $_POST['Sort_Description'];
  $Full_Description           =  $_POST['Full_Description'];
  $Product_Tags               =  $_POST['Product_Tags']; 

   insert_data('Sub_Category',$_POST,$conn);

   $result = array(
    "message" => 'Successfully',
    "response_code" => '200',
    "heading" => 'Case status Add to successfully',
    "text" => 'Assigned the ticket',
    "icon" => 'success'
  );
}


if($action=='product_add_post'){ 

  $img_big            =  $_FILES['img_big']['name'];
  $categories         =  $_POST['categories']; 
  $_POST['unique_id'] =  uniqid(); 
  $Product_name       =  $_POST['Product_name'];
  $slug               =  $_POST['slug'];
  $Description        =  $_POST['Description'];
  $ColorInput1        =  $_POST['ColorInput1'];
  $ColorInput2        =  $_POST['ColorInput2'];
  $ColorInput3        =  $_POST['ColorInput3'];
  $ColorInput4        =  $_POST['ColorInput4'];
  $size_s             =  $_POST['size_s'];
  $size_m             =  $_POST['size_m'];
  $size_l             =  $_POST['size_l'];
  $size_xl            =  $_POST['size_xl'];
  $size_xxl           =  $_POST['size_xxl'];
  $Price              =  $_POST['Price'];
  $Quantity           =  $_POST['Quantity'];
  $Full_Detail        =  $_POST['Full_Detail'];
  $group_tag          =  $_POST['group_tag']; 
   insert_data('add_product',$_POST,$conn);

   $result = array(
    "message" => 'Successfully',
    "response_code" => '200',
    "heading" => 'Case status Add to successfully',
    "text" => 'Assigned the ticket',
    "icon" => 'success'
  );
}
echo json_encode($result);

?>