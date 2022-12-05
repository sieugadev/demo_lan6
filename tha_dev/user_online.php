                         <?php
$tg=time();
$tgout=900;
$tgnew=$tg - $tgout;
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
die('Could not connect: ' . mysql_error());
}
$db_selected = mysql_select_db('sanpham', $link);
if (!$db_selected) 
{
die ('Cant use online :'. mysql_error());
}
$sql="insert into members(tgtmp,ip,local) values('$tg','$_SERVER[REMOTE_ADDR]','local')";
$query=mysql_query($sql);
$sql="delete from members where tgtmp < $tgnew";
$query=mysql_query($sql);
$sql2="SELECT COUNT(DISTINCT ip) FROM members WHERE local";
$query2=mysql_query($sql2);
$user=mysql_num_rows($query2);
echo  "<img src='../hinhanh/image/theanh/ol.png'>Số người online:".$user;
?></div>