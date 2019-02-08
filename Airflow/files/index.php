<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
<?php
  if(isset($_FILES['file'])) {
    $file = $_FILES['file'];

     $file_name = $file['name'];
     $file_tmp = $file['tmp_name'];

     $file_ext = explode('.',$file_name);
     $file_ext = strtolower(end($file_ext));
     $file_destination = './' . $file_name;

     if(move_uploaded_file($file_tmp, $file_destination)) {
       $myfile = fopen('upload.txt','w') or die ("Unable to open file");
       fwrite($myfile,'Airflow/files/'. $file_name);
       fclose($myfile);
       echo '<div class="alert alert-success" role="alert">
     <h4 class="alert-heading">Well done!</h4>
     <p>Now start you`re ios shortcut Airflow beta!</p>
     <hr>
     <p class="mb-0">Hope you have a great Day.</p>
   </div>';
     }
     else {
       echo'<div class="alert alert-danger" role="alert">
       <h4 class="alert-heading">Upload Faild!</h4>

     </div>';
     }
  }
 else {
   echo'<div class="alert alert-danger" role="alert">
   <h4 class="alert-heading">Input is empty</h4>

   <p class="mb-0"></p>
 </div>';

 }






?>
</body>
</html>
