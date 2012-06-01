<?php include "header.php"; ?>
<div id="container">
<div class="tampilhasil">
<form>
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
  $name = $_POST['name'];
  
  // membaca jawaban
  if($q1==''||$q2==''||$q3==''||$q4==''||$q5==''||$q6==''||$q7==''||$q8==''||$name=='')
  {
    echo '<h1><p>Maaf:</p></h1>';
    echo '<p>Anda harus belajar lebih giat</p>';
  }
  else
  {

    $score = 0; 
    if($q1 == 3) 
      $score++;
    if($q2 == 1) 
      $score++;
    if($q3 == 4) 
      $score++;
    if($q4 == 3) 
      $score++;
    if($q5 == 5)
      $score++;
	if($q6 == 2)
      $score++;
	if($q7 == 3)
      $score++;
	if($q8 == 2)
      $score++;

 
    $tot = $score / 8 * 100;
          
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
<a text-align="center" href="/ujisnmptn/ipa.php">kembali</a>
</div>
</div>