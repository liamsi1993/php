<?php define('NAMEWEBSITE','Application de gestion de donées');
$menu=[
  ["name"=>"HOOOME","link"=>"https://www.myhome.com"],
  ["name"=>"Contacct us","link"=>"https://www.myhome.com/contactUS"],
  ["name"=>"Services","link"=>"https://www.myhome.com/Services"],
  ["name"=>"Abouuuur","link"=>"https://www.myhome.com/Abouuuur"],
];

$menu[]= ["name"=>"NEWW","link"=>"https://www.myhome.com/NEWW"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=NAMEWEBSITE; ?></title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
   
<!-- start nav  -->

<nav class="navbar navbar-expand-lg " style="background-color:#d7efc5;">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="logo.png" alt="<?=NAMEWEBSITE; ?>" width="45px" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- <li class="nav-item mx-auto">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item mx-auto">
          <a class="nav-link" href="#">about</a>
        </li>
        <li class="nav-item mx-auto">
          <a class="nav-link" href="#">services</a>
        </li>
        <li class="nav-item mx-auto">
          <a class="nav-link" href="#">contact us</a>
        </li> -->
        <?php
foreach($menu as $m){
  echo ' <li class="nav-item mx-auto">
  <a class="nav-link" href="'.$m['link'].'">'.$m['name'].'</a>
</li>';
}

?>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- end nav  -->

<!-- start title  -->
<div class="display-3 text-center mt-4">
    <span class="bg-warning px-3 pb-3 rounded-4 text-dark fw-semibold d-inline-block"> 
    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
  <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864z"/>
  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1z"/>
</svg>
        <?php echo NAMEWEBSITE; ?></span></div>
<!-- end title  -->

<!-- start form  -->
<div class="container" style="margin-top: 6em;>
    <div class="row mt-4">
        <div class="col-lg-6 mx-auto">

 
<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="staticEmail" value="@gmail.com">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>
  </div>
  <!-- start button  -->
<div class="d-grid">
    <button class="btn btn-primary btn-lg"><i class="bi bi-plus-square-fill "></i> Submit</button>
</div>
<!-- end button  -->
</div>

</div>
    </div>
<!-- end form  -->
<!-- start footer  -->
<div class="container" style="margin-top: 6.2em;">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-body-secondary">© 2023 Company, Inc</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
    <img src="logo.png" alt="<?=NAMEWEBSITE; ?>" width="45px" />
</a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
    </ul>
  </footer>
</div>
<!-- end footer  -->
    <script src="assets/bootstrapJs.js"></script>
</body>
</html>