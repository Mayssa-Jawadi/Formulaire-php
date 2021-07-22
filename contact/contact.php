<?php

$name = $_GET['name'];
$surname = $_GET['surname'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$address = $_GET['address'];
?>

<html>
 <head>
  <title>Contact Form Details</title>
 </head>
 <body>
  <center>
   <h1> Details  </h1>
   <p> Thanks for contacting us. </p>
   <table border="2" style="width: 50%">
  <tr>
    <th>Name</th>
    <td><?= $name; ?></td>
  </tr>

 <tr>
    <th>Surname</th>
    <td><?= $surname; ?></td>
  </tr>

  <tr>
    <th>Email</th>
    <td><?= $email; ?></td>
  </tr>

  <tr>
    <th>Phone</th>
    <td><?= $phone; ?></td>
  </tr>
  
  <tr>
    <th>Address</th>
    <td><?= $address; ?></td>
  </tr>
</table>
  </center>
 </body>
</htm