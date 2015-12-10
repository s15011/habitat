<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 	
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="Keywords" content="CIW,ファウンデーション,例"/>
<meta name="Description" content="CIWファウンデーション・コース向け"/>
<link rel="stylesheet" type="text/css" href="syb/syb.css" title="stylesheet"/>
<title>Habitat for Humanity International Campus Chapterによる、Summer Youth Blitz Program </title>
</head>
<body>
<div id="container">

<!-- ヘッダー -->
<div id="banner">
<div id="head"></div>
<div id="navbar"><a href=""><img src="syb/sybheaders_02.jpg" height="22" width="153" border="0" alt="" /></a><a href=""><img src="syb/sybheaders_03.jpg" height="22" width="72" border="0" alt="Habitatについてのお問い合わせ" /></a><a href=""><img src="syb/sybheaders_04.jpg" height="22" width="72" border="0" alt="Why apply" /></a><a href=""><img src="syb/sybheaders_05.jpg" height="22" width="72" border="0" alt="ある日のHabitat" /></a><a href=""><img src="syb/sybheaders_06.jpg" height="22" width="72" border="0" alt="Habitatについての若者たちの声" /></a><a href=""><img height="22" src="syb/sybheaders_07.jpg" width="72" border="0" alt="ある日のHabitat写真集" /></a><a href=""><img src="syb/sybheaders_08.jpg" height="22" width="72" border="0" alt="申込書のダウンロードはこちら" /></a><a href=""><img src="syb/sybheaders_09.jpg" height="22" width="15" border="0" alt="参加しよう！" /></a></div>
<div id="subnav"><img src="syb/navbg_02.gif" height="16" width="600" border="0" alt="" /></div>
</div>

<!-- サイドバー -->
<div id="sidebar">
<br /><br />
<a href="ccypintl.html"><img src="syb/Intlbutton1.gif" height="30" width="130" border="0" alt="参加しよう" /></a><br />
<img src="syb/ccbutton1.gif" height="30" width="130" border="0" alt="Campus Chapters" /><br/>
<img src="syb/colchalbutton1.gif" height="30" width="130" border="0" alt="大学生チャレンジ" /><br />
<a href="syb.html"><img src="syb/sybbutton1.gif" height="30" width="130" border="0" alt="Summer Youth Blitz" /></a><br />
<img src="syb/childbutton1.gif" height="20" width="130" border="0" alt="子どもたちを参加させよう" /><br />
<img src="syb/FWbutton1.gif" height="20" width="130" border="0" alt="世界を変える" /><br />
<br /><br /><br />
</div>


<!-- コンテンツ本体 -->
<div id="content">
<img src="syb/SYBcollague2.jpg" width="432" height="154" border="0" alt="この夏は、必要とする人のために家を作ろう！" />
<br/>
<h2>Youth Blitz登録</h2>

<?php
$link = mysql_connect ("localhost", "root", "triadpass"); 
mysql_select_db ("root", $link);
$result = mysql_query("SELECT * FROM volunteers", $link);
if (mysql_db_query("volunteers", "select * from vlist", $link))
{
print ("");
}
else
{
print ("クエリの実行に失敗しました！<br/>");
}

$link = mysql_connect ("localhost", "root", "triadpass");

mysql_select_db("root",$link);

$Result = mysql_query("SELECT * FROM vlist ORDER BY 'id'",$link);

echo "<table cellpadding='3'>";
echo "<tr bgcolor='#eeeeee'>";
echo "<td></td><td>氏</td><td>名</td><td>メールアドレス</td><td>国</td><td>スキル</td>";
echo "</tr>";

while ($Row = mysql_fetch_row($Result))
{
printf ("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",
$Row[1], $Row[0], $Row[2], $Row[3], $Row[4], $Row[5] );
}

echo "</table>";
?>
</div>


<!-- フッター -->
<div id="footer">
<a href="">質問</a> | 
<a href="">なぜ参加を？</a> | 
<a href="">典型的な一日</a> | 
<a href="">若者たちの言葉</a> | 
<a href="">写真</a> | 
<a href="">参加します！</a><br/>
<a href="/habitat/ccyp/default.html">CCYPホーム</a> | 
<a href="/habitat/ccyp/ccypintl.html">国際プログラム</a> | 
<a href="">高校／大学クラブを結成する（米国）</a> |
<a href="">学期休暇中の建築活動</a> <br /> 
<a href="/habitat/ccyp/syb.html">Teen Summer Buildに参加する</a> | 
<a href="">住宅を建設している所</a> | 
<a href="">子どもたち向け</a> |
<a href="">話題の若者</a><br/><br/>
<a href="/habitat/index.html">ホーム</a> | 
<a href="">参加しよう</a> | 
<a href="">住宅を建設している所</a> | 
<a href="">Habitatのしくみ</a> | 
<a href="">本当の話<br/></a><br/>&copy; 2007 Habitat for Humanity International
</div>

<p><a href="http://validator.w3.org/check/referer"><img src="syb/valid-xhtml10.png" alt="妥当なXHTML 1.0です！" height="31" width="88" border="0" /></a></p>
</div>
</body>
</html>
