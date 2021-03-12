<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <title>Trang chủ</title>
</head>

<body>
<?php
$x = 2;
$y = 10;

// switch ($x){
//   case $y;
//   echo 'diu co';
//   break;
//   case 2;
//   echo 'gut chop';
//   break;
//   default: echo 'ok';
// }

// for ($x = 0; $x <= 10; $x++){
  
//   if($x == 5){
//     continue;
//   }
//   echo $x;
// }

 $arr = array('x','y','c');
// for ($i=0; $i <= count($arr); $i++) { 
//   echo $arr[$i];
// }

// foreach ($arr as $key => $value) {
//   # code...
//   echo $key ."=>" . $value ."<br>";
//   // echo $value;
// }

$arr_V = [
  'key1' => 'value1',
  'key2' => 'value2',
  'key3' => [0,1]
];
foreach ($arr_V['key3'] as $key => $value) {
  # code...
  echo $key ."=>" . $value ."<br>";
  // echo $value;
}


// function addNumbers(int $a, $b) {
//   return $a + $b;
// }
// echo addNumbers(5,"5 days"); 

die;

function myTest($x,$y) {
  $a=1;
  $b=NULL;

  

  $c = ($a === $b) ? "dung" : "sai";
  $a = $b ?? '3';
  echo $a;
  die;
  if ($a === $b){
    echo 'bang nhau';
    
  }

 $arr = ['a','b',1];

 var_dump($arr); die;

  echo $y;

  print $y;

  print_r($y);
  var_dump($y);
}

myTest($x,$y);
?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../index.html">N o b s i l v e r</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Trang chủ <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Về chúng tôi</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Sản phẩm
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Nhẫn</a>
            <a class="dropdown-item" href="#">Lắc tay</a>
            <a class="dropdown-item" href="#">Dây chuyền</a>
            <a class="dropdown-item" href="#">Bông tai</a>
          </div>
        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
      </form>
    </div>
  </nav>

  <div class="container">

    <div class="head-table">
        <h5>
            management
        </h5>
        <button class="btn btn-success"><i class="bi bi-plus"></i>add</button>
    </div>
    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>
              <a href="" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
              <a href="" class="btn btn-danger"><i class="bi bi-trash"></i></a>
            </td>
          </tr>
        </tbody>
      </table>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>
