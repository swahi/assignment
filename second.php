<html>
    <head></head>
    <body>
        <?php
        include 'studheader.php';
       
    session_start();
    if(!session_is_registered('register')){
header("retrive_questions.php");
}
//       $c=1;
//    echo "hollo";
//    echo $_SESSION["'$c'"];echo "<br>";$c++;
//    echo $_SESSION["'$c'"];echo "<br>";$c++;
//    echo $_SESSION["'$c'"];echo "<br>";$c++;
//    echo $_SESSION["'$c'"];echo "<br>";$c++;
//    echo "hi";
//    echo $_SESSION['user'];
//    echo $_POST['1'];
$count=0;
echo "<u>Correct Answers For Questions</u><br><br><br>";
for($index=1;$index<=10;$index++)
{
    echo $index."\t".$_SESSION["'$index'"];echo "<br>";
    //echo $_POST[''.$index];echo "i am <br>";
    if($_SESSION["'$index'"]==$_POST[''.$index])
        $count++;
}
echo"<br>";
echo"<br>";
echo "Total right answers:$count";
?>
    </body>
</html>
