<html>
<head><title>登録処理中：</title></head>
<body style="margin:20px;font-family:helvetica,arial,geneva;">
<h3>登録処理中：</h3>

<?php

if (!$first || !$last || !$email || !$country || !$skill)
{
 echo "もう一度<a href='syb.html'>入力画面に戻り</a>、必要事項を全て入力してください。" ;
 exit;
}

$first = addslashes ($first);
$last = addslashes ($last);
$email = addslashes ($email);
$country = addslashes ($country);
$skill = addslashes ($skill);

@ $link = mysql_pconnect ("localhost", "root", "triadpass");

if (!$link)
{ 
  echo "エラー: サーバに接続できません。しばらく待ってからもう一度実行してください。";
  exit;
}

mysql_select_db("volunteers");
$query = "insert into vlist values
		('".$id."', '".$first."', '".$last."', '".$email."', '".$country."', '".$skill."')";
		
$result = mysql_query($query);
if ($result)
	echo mysql_affected_rows()." 登録情報がデータベースへ追加されました。<a href='syboutput.php'>登録内容の確認</a>";
?>

</body>
</html>
