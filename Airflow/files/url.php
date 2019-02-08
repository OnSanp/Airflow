<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
</head>
<body>
<?php


if (! empty($_GET["url"])) {
   function write() {

    $url = urldecode($_GET["url"]);

    $result = "URL:" . $url;

    $myfile = fopen("/files/upload.txt","w") or die("Unable to open file");
    fwrite($myfile, $result);
    fclose($myfile);
    echo '<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Now start you`re ios shortcut Airflow beta!</p>
  <hr>
  <p class="mb-0">Hope you have a great Day.</p>
</div>';

   }

    write();


}
else {
  echo'<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Input is empty</h4>
  <p></p>
  <hr>
  <p class="mb-0"></p>
</div>';
}



?>
</body>

</html>
