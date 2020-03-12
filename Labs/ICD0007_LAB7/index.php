<?php
setcookie("ctransient","Saba Baba");
if(isset($_POST['short'])) {
    setcookie("ShortTimeCount",$_POST['short'],time()+120);
    setcookie("LongTimeCount",$_POST['long'],time()+3600);
}

?>


<html>
<form action="index.php" method="post">
    <input type="text" name="short" placeholder="short cookie name">
    <input type="text" name="long" placeholder="long cookie name">
    <input type="submit">

</html>