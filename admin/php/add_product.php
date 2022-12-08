<?php
require('../include/c_config.php');
require('dynamic_sql_command.php');
 

   $img_big               =  $_FILES['img_big']['name'];  
   $img_big_tmp_name      =  $_FILES['img_big']['tmp_name'];  

   $img_small_1           =  $_FILES['img_small_1']['name']; 
   $img_small_1_tmp_name  =  $_FILES['img_small_1']['tmp_name']; 

   $img_small_2           =  $_FILES['img_small_2']['name']; 
   $img_small_2_tmp_name  =  $_FILES['img_small_2']['tmp_name']; 

   $img_small_3           =  $_FILES['img_small_3']['name']; 
   $img_small_3_tmp_name  =  $_FILES['img_small_3']['tmp_name']; 

   $img_small_4           =  $_FILES['img_small_4']['name']; 
   $img_small_4_tmp_name  =  $_FILES['img_small_4']['tmp_name']; 

   $img_small_5           =  $_FILES['img_small_5']['name']; 
   $img_small_5_tmp_name  =  $_FILES['img_small_5']['tmp_name']; 

   $img_small_6           =  $_FILES['img_small_6']['name']; 
   $img_small_6_tmp_name  =  $_FILES['img_small_6']['tmp_name']; 

  $categories         	  =  $_POST['categories']; 
  $unique_id          	  =  uniqid(); 
  $Product_name       	  =  $_POST['Product_name'];
  $slug               	  =  $_POST['slug'];
  $Description        	  =  $_POST['Description'];
  $ColorInput1        	  =  $_POST['ColorInput1'];
  $ColorInput2        	  =  $_POST['ColorInput2'];
  $ColorInput3        	  =  $_POST['ColorInput3'];
  $ColorInput4        	  =  $_POST['ColorInput4'];
  $size_s             	  =  $_POST['size_s'];
  $size_m             	  =  $_POST['size_m'];
  $size_l             	  =  $_POST['size_l'];
  $size_xl            	  =  $_POST['size_xl'];
  $size_xxl           	  =  $_POST['size_xxl'];
  $Price              	  =  $_POST['Price'];
  $Quantity           	  =  $_POST['Quantity'];
  $Full_Detail        	  =  $_POST['Full_Detail'];
  $group_tag              =  $_POST['group_tag']; 

  $path='../image/';  

  echo $sql="INSERT INTO `add_product`(`unique_id`, `Product_name`, `categories`, `slug`, `Description`, `ColorInput1`, `ColorInput2`, `ColorInput3`, `ColorInput4`, `size_s`, `size_m`, `size_l`, `size_xl`, `size_xxl`, `Price`, `Quantity`, `Full_Detail`, `group_tag`, `img_big`,`img_small_1`, `img_small_2`, `img_small_3`, `img_small_4`, `img_small_5`, `img_small_6`) VALUES ('$unique_id','$Product_name','$categories','$slug','$Description','$ColorInput1','$ColorInput2','$ColorInput3','$ColorInput4','$size_s','$size_m','$size_l','$size_xl','$size_xxl','$Price','$Quantity','$Full_Detail','$group_tag','$img_big','$img_small_1','$img_small_2','$img_small_3','$img_small_4','$img_small_5','$img_small_6')";
   if(mysqli_query($conn,$sql))
   {
   	foreach($_FILES as $file){ 
          $file['tmp_name'].'</br>'; 
          move_uploaded_file($file['tmp_name'], "$path".$file["name"]);  
        }

   }
?>