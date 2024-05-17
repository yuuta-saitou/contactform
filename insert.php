<?php 
mb_internal_encoding("utf8");
$pdo=new PDO("mysql:abname=lesson01";host=localhost","root","")

$pdo->exec("insert into contactform(name,mail,age,comments)
values('".$POST[`name`]."','".$_POST[`mail`]."','".$_POST[`comments`]."');");

?>
<!doctype HTML>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>お問い合わせフォームを作る</title>
  <link rel="stylesheet"type="text/css" href="style2.css">
</head>
<body>
<h1>お問い合わせフォーム</h1>

<div class="confirm">
<P>
お問い合わせ有難うございました。<br>3営業日以内に担当者よりご連絡差し上げます。
</p>
</div>

</body>
</html>
