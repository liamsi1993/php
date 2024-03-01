<?php


// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";
$email = "";
$password = "";
$check="";
$color="";
$date="";
$number="";
$range="";
$datetimelocal="";
$menu="";

if(in_array($_SERVER['REQUEST_METHOD'],['GET','POST'])){
    $email =$_REQUEST['email'] ??  "";
    $password =$_REQUEST['password'] ??  "";
    $check=$_REQUEST['checked'] ?? "";
    $color=$_REQUEST['color'] ?? "";
    $date=$_REQUEST['date'] ?? "";
    $number=$_REQUEST['nimber'] ?? "";
    $range=$_REQUEST['range'] ?? "";
    $datetimelocal=$_REQUEST['datetimelocal'] ?? "";
    $menu=$_REQUEST['menu'] ?? "";
    
}



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
                    <div id="emailHelp" class="form-text text-info"><?= $email; ?></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                    <div id="emailHelp" class="form-text text-danger"><?=$password ; ?></div>
                </div>
                <div class="mb-3 form-check">
                    <input name="checked" type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    <div id="emailHelp" class="form-text text-danger"><?=$check ; ?></div>
                </div>
                <div class="mb-3 col-sm-2">
                    <label for="color" class="form-label">color</label>
                    <input name="color" type="color" class="form-control">
                    <div id="emailHelp" class="form-text text-info"><?php echo $color; ?></div>
                </div>
                <div class="mb-3">
                    <label for="color" class="form-label">date</label>
                    <input name="date" type="date" class="form-control">
                    <div id="emailHelp" class="form-text text-info"><?=$date ; ?></div>
                </div>
                <div class="mb-3">
                    <label for="number" class="form-label">Number</label>
                    <input name="number" type="number" class="form-control">
                    <div id="emailHelp" class="form-text text-info"><?=$number; ?></div>
                </div>
                <div class="mb-3">
                    <label for="color" class="form-label">Range</label>
                    <input name="range" type="range" class="form-control" min=0 max=100>
                    <div id="emailHelp" class="form-text text-info"><?=$range ; ?></div>
                </div>
                <div class="mb-3">
                    <label for="color" class="form-label">DateTIME</label>
                    <input name="datetimelocal" type="datetime-local" class="form-control">
                    <div id="emailHelp" class="form-text text-info"><?=$datetimelocal ; ?></div>
                </div>
                <div class="mb-3">
                    <select name="menu" class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1" <?php echo ($menu=='1' ? 'selected' : '') ?> >One</option>
                        <option value="2" <?php echo ($menu=='2' ? 'selected' : '') ?> >Two</option>
                        <option value="3" <?php echo ($menu=='3' ? 'selected' : '') ?> >Three</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">RESET</button>
            </form>


            <!-- End Example Code -->
        </div>
    </div>
</body>

</html>