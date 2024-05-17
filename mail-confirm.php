<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>お問い合わせフォームを作る</title>
  <link rel="stylesheet"type="text/css" href="style2.css">
</head>
<body>
<h1>お問い合わせ内容確認</h1>       

<div class="confirm">
    <P>お問い合わせ内容はこちらでよろしいでしょうか?
        <br>よろしければ「送信する」ボタンを押してください。
</P>
<P>
  <br>
  <?php echo $_POST['name'];?>
</p>
<P>メールアドレス
    <br>
    <?php echo $_POST['mail'];?>
    <P>
        <p>年齢
        <br>
        <?php echo $_POST['age'];?>    
</P>  
<p>コメント
        <br>
        <?php echo $_POST['comments'];?>    
</P>  

<div class="buttons">
    <form acttion="index.html">
        <input type="submit"class="button1" value="戻って修正する"/>
</form>
<form action="insert.php" method="post">
    <input type ="submit"class="button2" value="登録する"/>
    <input type ="hidden" value="<?php echo $_POST[`name`];?>"name="name">
    <input type ="hidden" value="<?php echo $_POST[`maile`];?>"name="maile">
    <input type ="hidden" value="<?php echo $_POST[`age`];?>"name="age">
    <input type ="hidden" value="<?php echo $_POST[`comments`];?>"name="coments">
</form>
<div>
</div>
</body>
<html>    