<?php
session_start();
?>
<html>
    <body>
        <?php
$_SESSION["college"]="pranali";
$_SESSION["course"]="BCS";
echo"session variable also set";
print_r($_SESSION);
// session_unset();
session_destroy();
// print_r($_SESSION);
?>
</body>
</html>