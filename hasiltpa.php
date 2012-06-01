<?php include "header.php" ?>
<div id="container">
<div class="tampilhasil">
<?php
  //Membaca query variable dari form pertanyaan
  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];
  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $name = $_POST['name'];
  
  // membaca jawaban
  if($q1==''||$q2==''||$q3==''||$q4==''||$q5==''||$name=='')
  {
    echo '<h1><p>Maaf:</p></h1>';
    echo '<p>Anda harus belajar lebih giat</p>';
  }
  else
  {

    $score = 0; 
    if($q1 == 2) 
      $score++;
    if($q2 == 3) 
      $score++;
    if($q3 == 4) 
      $score++;
    if($q4 == 4) 
      $score++;
    if($q5 == 5)
      $score++;

 
    $tot = $score / 5 * 100;
          
    if($tot < 50)
    {
  
      echo '<h1>Maaf</h1>';
      echo '<p>Anda harus belajar lebih giat</p>';
    } 
    else
    {
  
      $score = number_format($score, 1);

      echo '<h1>SELAMAT</h1>';
      echo "<p>Anda telah siap untuk mengikuti ujian SNMPTN</p>";


     }
  }
?>
<a href="/ujisnmptn/tpa.php">kembali</a>
</div>
</div>