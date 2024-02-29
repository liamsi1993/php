<?php


// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

echo "<pre>";
// print_r($_SERVER['REQUEST_METHOD']);
print_r($_REQUEST);
echo "</pre>";

// $nom="";

// if(isset($_GET['nom'])){
// $nom=$_GET['nom'];
// }
// echo $nom;
$email="" ;
$password="";


// $email="";
// $password="";
// if(isset($_GET['email']) && isset($_GET['password'])){
//   $email=$_GET['email'];
//   $password=$_GET['password'];
// }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- Example Code -->
    
       <div class="row">
        <div class="col-lg-6 col-md-6 mx-auto">

          <form method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text text-info"><?php echo $email; ?></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input name="password" type="password" class="form-control" id="exampleInputPassword1">
              <div id="emailHelp" class="form-text text-info"><?php echo $password; ?></div>
            </div>
            <!-- <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div> -->
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-danger">RESET</button>
    </form>
    
    
    <!-- End Example Code -->
  </div>
 </div> 
  </body>
</html>