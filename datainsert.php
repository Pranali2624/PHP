<?php 
$con= new mysqli("localhost","root","");
if ($con)
// if(mysqli_select.db($con."ditms"))
{
    $sql = "INSERT INTO 'student' VALUES('1','pranali','aurnaagbad','8983448328')";
    $sql = "INSERT INTO 'student' VALUES('2','apurva','aurnaagbad','9373185305')";
    $sql = "INSERT INTO 'student' VALUES('3','aniket','manwat','9175501971')";

    if($con->query($sql))
    {
        echo "data inserted";
    }
    else{
        echo"data not insreted";
    }
}
else{
    echo"database not connected";
}
// else{
//     echo"server not connected";
// }
?>