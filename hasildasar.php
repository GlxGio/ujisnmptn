<?php include "header.php"; ?>
<div id="container">
<div class="tampilhasil">
<?php
  //Membaca query variable dari form pertanyaan
  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];
  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $q6 = $_POST['q6'];
  $q7 = $_POST['q7'];
  $q8 = $_POST['q8'];
  $q9 = $_POST['q9'];
  $name = $_POST['name'];
  
  // membaca jawaban
  if($q1==''||$q2==''||$q3==''||$q4==''||$q5==''||$q6==''||$q7==''||$q8==''||$q9==''||$name=='')
  {
    echo '<h1><p>Maaf:</p></h1>';
    echo '<p>Anda harus belajar lebih giat</p>';
  }
  else
  {

    $score = 0; 
    if($q1 == 4) 
      $score++;
    if($q2 == 5) 
      $score++;
    if($q3 == 4) 
      $score++;
    if($q4 == 5) 
      $score++;
    if($q5 == 5)
      $score++;
	if($q6 == 1)
      $score++;
	if($q7 == 4)
      $score++;
	if($q8 == 3)
      $score++;
	if($q9 == 5)
    $score++;

 
    $tot = $score / 9 * 100;
          
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
<a href="dasar.php">kembali</a>
</div>
</div>