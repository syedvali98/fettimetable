
<?php
   if(isset($_FILES['fileToUpload'],$_FILES['fileToUpload1'],$_FILES['fileToUpload2'])){
      $errors= array();
      $file_name = $_FILES['fileToUpload']['name'];
      $file_size =$_FILES['fileToUpload']['size'];
      $file_tmp =$_FILES['fileToUpload']['tmp_name'];
      $file_type=$_FILES['fileToUpload']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['fileToUpload']['name'])));
      
       $file_name1 = $_FILES['fileToUpload1']['name'];
      $file_size1 =$_FILES['fileToUpload1']['size'];
      $file_tmp1 =$_FILES['fileToUpload1']['tmp_name'];
      $file_type1 =$_FILES['fileToUpload1']['type'];
      $file_ext1 =strtolower(end(explode('.',$_FILES['fileToUpload1']['name'])));
      
       $file_name2 = $_FILES['fileToUpload2']['name'];
      $file_size2 =$_FILES['fileToUpload2']['size'];
      $file_tmp2 =$_FILES['fileToUpload2']['tmp_name'];
      $file_type2 =$_FILES['fileToUpload2']['type'];
      $file_ext2 =strtolower(end(explode('.',$_FILES['fileToUpload2']['name'])));
      
      
      $extensions= array("xlsx","csv");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a csv or xlsx file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"uploads/".$file_name);
         move_uploaded_file($file_tmp1,"uploads/".$file_name1);
         move_uploaded_file($file_tmp2,"uploads/".$file_name2);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
   
   
   
   
  /* 
   
   if(isset($_FILES['fileToUpload1'])){
      $errors= array();
      $file_name = $_FILES['fileToUpload1']['name'];
      $file_size =$_FILES['fileToUpload1']['size'];
      $file_tmp =$_FILES['fileToUpload1']['tmp_name'];
      $file_type=$_FILES['fileToUpload1']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['fileToUpload1']['name'])));
      
      $extensions= array("xlsx","csv");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"uploads/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
   
   
   
   
      if(isset($_FILES['fileToUpload2'])){
      $errors= array();
      $file_name = $_FILES['fileToUpload2']['name'];
      $file_size =$_FILES['fileToUpload2']['size'];
      $file_tmp =$_FILES['fileToUpload2']['tmp_name'];
      $file_type=$_FILES['fileToUpload2']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['fileToUpload2']['name'])));
      
      $extensions= array("xlsx","csv");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"uploads/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }*/
?>