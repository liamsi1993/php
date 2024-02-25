<!--
  /* constant 
 value cannot be changed after it is set
Constant names do not need a sign ($)
Constants can be accessed regardless of scope

  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
   function show(){
        define("NAME","MOUAD NACIRI");
        // echo NAME;
    }
    show();
echo NAME;
?>
</body>
</html>