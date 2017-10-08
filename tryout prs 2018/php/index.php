<?php
  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $saintek=$_POST['saintek'];
    $harga=$_POST['Rp.15.000'];
    $city=$_POST['city'];
    $file=$_POST['file'];

    $to='Padjadjaranroadshowtoschool2018@gmail.com';
    $subject='Form Submission';
    $message="Name: ".$name."\n". "Email: ".$email."\n". "saintek: ".$saintek."\n". "harga: ".$Rp15000."\n". "city: ".$city."\n". "file: ".$file."\n".

    if(mail($to, $subject, $message)){
      echo "<h1> Sent Successfully! Thank You". " ".$name.", We will contact you shortly! </h1>";

    }
    else{
      echo "Something went wrong!";
    }
  }



 ?>
