<?php

echo "<prev>";
print_r($_POST);
echo "</prev>";


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Skill Test</title>
    </head>
    <body>
        <form method="post" address"">
            Post Title: <input type="text" name="post"><br>
            Description: <input type="text" name="descri"><br>
            <input type="submit" name="find" value="Find">
            <input type="submit" name="get" value="Get picture browse"><!-- comment -->
            <input type="submit" name="update" value="Update">
        </form>
    </body>
</html>
