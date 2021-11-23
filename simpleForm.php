<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <input type="text" name="getVaName" value="getVarValue">
    <input type="checkbox" name="isDo">
    <input type="submit">
</form>

<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <input type="text" name="postVarName" value="postVarValue">
    <input type="submit">
</form>

<?php

echo "<h3>Get</h3>";
print_r($_GET);
echo "<hr>";
echo "<h3>Post</h3>";
print_r($_POST);