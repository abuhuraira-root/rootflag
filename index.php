<html>
  <head>
    <title>RootCTF[v.0.2]</title>
  <head/>
<body>
  <div class="search">
    <form method="post" accept-charset="utf-8">
    <input type="text" name="search" id="searh" placeholder="search : eg. raspberry pi" />
    </form>
  </div>
  <div class="result">
    <p id="res"><?php $_POST['search']?></p>
  </div>
</body>
</htm>
<?php
include("flag.php");
echo $flag;
?>