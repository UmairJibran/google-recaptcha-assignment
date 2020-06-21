<?php
include 'conn.php';
if (isset($_POST['submit'])) {
$username = $_POST['username'];
$email = $_POST['email'];
$secretKey = "6Ld5lKcZAAAAALZ-KGXbVKQFwcveH8rdhqdARhMP";
$responseKey =  $_POST['g-recaptcha-response'];
$userIp = $_SERVER['REMOTE_ADDR'];
$url = "https://google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='$userIp";
$response = file_get_contents($url);
$response = json_decode($response);
if ($response->success) {
  echo "hurray:u ";
}

}
?>

</div>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="https://google.com/recaptcha/api.js" async defer></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>8440</title>
  </head>
  <body>
    <div class="container pt-5">
      <form class="form" action="index.php" method="post">
      <div class="form-group">
        <label for="username">Name</label>
        <input type="text" class="form-control" name="username" id='name' placeholder="Name">
      </div>
      <div class="form-group">
        <label for="username">Email</label>
        <input type="email" class="form-control" name="email" value="" placeholder="email">
      </div>
      <div class="form-group">
        <label for="username">Phone Number</label>
        <input type="number" class="form-control" name="number" value="" placeholder="Phone Number">
      </div>
      <br>
      <textarea name="comment" class="form-control" rows="8" cols="80" placeholder="comment"></textarea>
      <br>
        <div class="g-recaptcha" data-sitekey="6Ld5lKcZAAAAAHevcECwb_OlymcnZhm6IFtLSCSx">
        </div>
        <input type="submit" name="submit" value="signup" class="btn btn-outline-primary" style="float:right;">
      </form>
    </div>
  </body>
</html>
