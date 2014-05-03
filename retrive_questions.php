<?php
include "connect.php";
//include 'studheader.php';
session_start();
session_register('register');
if(!isset($_POST['submit']))
    {
    $i=0;
while($i<10)
{
    $n=rand(1, 10);
    $i++;
    $query="select *from questions where qid=$n";
$result=mysql_query($query);
if(!$result)
    {
    echo mysql_error();
    exit;
    }
    $num_rows = mysql_num_rows($result);
  $row[$i] = mysql_fetch_array($result);
  $num_fields = mysql_num_fields($result);
  $_SESSION["'$i'"]=$row[$i]['key_ans'];
}
$_SESSION['user']="shakeer";
?>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style type="text/css">
            body{ background-color: whitesmoke;}
            h1{
                margin-left: 420px;
                margin-top: 0px;
                position: absolute;
                font-family: serif;
                font-style: oblique;
                color: black;
            }
            button{
               
                margin-left:590px;
                margin-top: 15px;
                color: green;
                width: 120px;
                height: 40px;
                font-size: 20px;
            }

            .box
            {
                width: 1310px;
                height:1600px;
                position: absolute;
                margin-left: 10px;
                margin-top: 60px;
                background-color: whitesmoke;
                border-color: black;
                border-style: solid;
            }
            .image
            {
                position: absolute;
                    margin-top: 120px;
                    margin-left: 10px;
            }
            .box1
            {
                width: 1310px;
                height:1420px;
                position: absolute;
                margin-left: 10px;
                margin-top: 120px;
                background-color: whitesmoke;
                border-color: black;
                border-style: solid;

            } 
             .que1
            {
                width: 600px;
                position: absolute;
                 margin-left: 13px;
                margin-top: 180px;
            }
            .que2
            {
                position: absolute;
                 margin-left: 13px;
                margin-top: 300px;
            }

             .que3
            {
                position: absolute;
                 margin-left: 13px;
                margin-top: 420px;
            }

             .que4
            {
                position: absolute;
                 margin-left: 13px;
                margin-top: 520px;
            }

             .que5
            {
                position: absolute;
                 margin-left: 13px;
                margin-top: 620px;
            }

             .que6
            {
                position: absolute;
                 margin-left: 13px;
                margin-top: 720px;
            }

             .que7
            {
                position: absolute;
                 margin-left: 13px;
                margin-top: 820px;
            }

             .que8
            {
                position: absolute;
                 margin-left: 13px;
                margin-top: 920px;
            }

             .que9
            {
                position: absolute;
                 margin-left: 13px;
                margin-top: 1020px;
            }

             .que10
            {
                position: absolute;
                 margin-left: 13px;
                margin-top: 1120px;
            }
            .text
            {
                position: absolute;
                 margin-left: 50px;
                margin-top: 1290px; 
            }

            input[type="submit"]
            {
                height:25px;
                width:220px;
            }

            .result
            {
                position: absolute;
                 margin-left: 100px;
                margin-top: 1150px;
                font-size: 18px;
                 color: black;
                 width: 120px;
                height: 40px;
            }
            .ans
            {
                font-size: 34px;
                position: absolute;
                margin-left:420px;
                margin-top: 1200px;
            }

            .fig
            {
                position: absolute;
                margin-left:660px;
                margin-top: 150px;
            }
        </style>
    </head>
    <body>
        <form action="second.php" method="POST">
        <h1><b><blink>Welcome to Web Design Quiz</blink></b></h1>
        <b class="box"></b>
     

        <p class="box1"><br><div class="que1">
    <?php echo "1.".$row[1][2]; ?><br>
    <input type="radio" name="1" value="<?php echo $row[1]['option1']; ?>"><?php echo $row[1]['option1']; ?><br>
    <input type="radio" name="1" value="<?php echo $row[1]['option2']; ?>"><?php echo $row[1]['option2']; ?><br>
    <input type="radio" name="1" value="<?php echo $row[1]['option3']; ?>"><?php echo $row[1]['option3']; ?><br>
    <input type="radio" name="1" value="<?php echo $row[1]['option4']; ?>"><?php echo $row[1]['option4']; ?><br>
        </div></p><br /><br />

        <p class="que2"><br><?php echo "2.".$row[2][2]; ?><br>
    <input type="radio" name="2" value="<?php echo $row[2]['option1']; ?>"><?php echo $row[2]['option1']; ?><br>
    <input type="radio" name="2" value="<?php echo $row[2]['option2']; ?>"><?php echo $row[2]['option2']; ?><br>
    <input type="radio" name="2" value="<?php echo $row[2]['option3']; ?>"><?php echo $row[2]['option3']; ?><br>
    <input type="radio" name="2" value="<?php echo $row[2]['option4']; ?>"><?php echo $row[2]['option4']; ?><br>
    </p><br />

     <p class="que3"><br><?php echo "3.".$row[3][2]; ?><br>
    <input type="radio" name="3" value="<?php echo $row[3]['option1']; ?>"><?php echo $row[3]['option1']; ?><br>
    <input type="radio" name="3" value="<?php echo $row[3]['option2']; ?>"><?php echo $row[3]['option2']; ?><br>
    <input type="radio" name="3" value="<?php echo $row[3]['option3']; ?>"><?php echo $row[3]['option3']; ?><br>
    <input type="radio" name="3" value="<?php echo $row[3]['option4']; ?>"><?php echo $row[3]['option4']; ?><br>
    </p><br />

     <p class="que4"><br><?php echo "4.".$row[4][2]; ?><br>
    <input type="radio" name="4" value="<?php echo $row[4]['option1']; ?>"><?php echo $row[4]['option1']; ?><br>
    <input type="radio" name="4" value="<?php echo $row[4]['option2']; ?>"><?php echo $row[4]['option2']; ?><br>
    <input type="radio" name="4" value="<?php echo $row[4]['option3']; ?>"><?php echo $row[4]['option3']; ?><br>
    <input type="radio" name="4" value="<?php echo $row[4]['option4']; ?>"><?php echo $row[4]['option4']; ?><br>
    </p><br />

     <p class="que5"><br><?php echo "5.".$row[5][2]; ?><br>
    <input type="radio" name="5" value="<?php echo $row[5]['option1']; ?>"><?php echo $row[5]['option1']; ?><br>
    <input type="radio" name="5" value="<?php echo $row[5]['option2']; ?>"><?php echo $row[5]['option2']; ?><br>
    <input type="radio" name="5" value="<?php echo $row[5]['option3']; ?>"><?php echo $row[5]['option3']; ?><br>
    <input type="radio" name="5" value="<?php echo $row[5]['option4']; ?>"><?php echo $row[5]['option4']; ?><br>
    </p><br />

    <p class="que6"><br><?php echo "6.".$row[6][2]; ?><br>
    <input type="radio" name="6" value="<?php echo $row[6]['option1']; ?>"><?php echo $row[6]['option1']; ?><br>
    <input type="radio" name="6" value="<?php echo $row[6]['option2']; ?>"><?php echo $row[6]['option2']; ?><br>
    <input type="radio" name="6" value="<?php echo $row[6]['option3']; ?>"><?php echo $row[6]['option3']; ?><br>
    <input type="radio" name="6" value="<?php echo $row[6]['option4']; ?>"><?php echo $row[6]['option4']; ?><br>
    </p><br />

    <p class="que7"><br><?php echo "7.".$row[7][2]; ?><br>
    <input type="radio" name="7" value="<?php echo $row[7]['option1']; ?>"><?php echo $row[7]['option1']; ?><br>
    <input type="radio" name="7" value="<?php echo $row[7]['option2']; ?>"><?php echo $row[7]['option2']; ?><br>
    <input type="radio" name="7" value="<?php echo $row[7]['option3']; ?>"><?php echo $row[7]['option3']; ?><br>
    <input type="radio" name="7" value="<?php echo $row[7]['option4']; ?>"><?php echo $row[7]['option4']; ?><br>
    </p><br />

    <p class="que8"><br><?php echo "8.".$row[8][2]; ?><br>
    <input type="radio" name="8" value="<?php echo $row[8]['option1']; ?>"><?php echo $row[8]['option1']; ?><br>
    <input type="radio" name="8" value="<?php echo $row[8]['option2']; ?>"><?php echo $row[8]['option2']; ?><br>
    <input type="radio" name="8" value="<?php echo $row[8]['option3']; ?>"><?php echo $row[8]['option3']; ?><br>
    <input type="radio" name="8" value="<?php echo $row[8]['option4']; ?>"><?php echo $row[8]['option4']; ?><br>
    </p><br />

    <p class="que9"><br><?php echo "9.".$row[9][2]; ?><br>
    <input type="radio" name="9" value="<?php echo $row[9]['option1']; ?>"><?php echo $row[9]['option1']; ?><br>
    <input type="radio" name="9" value="<?php echo $row[9]['option2']; ?>"><?php echo $row[9]['option2']; ?><br>
    <input type="radio" name="9" value="<?php echo $row[9]['option3']; ?>"><?php echo $row[9]['option3']; ?><br>
    <input type="radio" name="9" value="<?php echo $row[9]['option4']; ?>"><?php echo $row[9]['option4']; ?><br>
    </p><br />

    <p class="que10"><br><?php echo "10.".$row[10][2]; ?><br>
    <input type="radio" name="10" value="<?php echo $row[10]['option1']; ?>"><?php echo $row[10]['option1']; ?><br>
    <input type="radio" name="10" value="<?php echo $row[10]['option2']; ?>"><?php echo $row[10]['option2']; ?><br>
    <input type="radio" name="10" value="<?php echo $row[10]['option3']; ?>"><?php echo $row[10]['option3']; ?><br>
    <input type="radio" name="10" value="<?php echo $row[10]['option4']; ?>"><?php echo $row[10]['option4']; ?><br>
    </p><br />

    <p class="text">
        <input type="submit" name="submit" value="GetScore" onclick="check();">
    </p>

        </div>
  </form>
  </body>
</html>
<?php
}
?>

