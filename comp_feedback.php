<html>
    <head></head>
    <body>
        <?php include'comp_header.php'?>
        <form name="f1" action="" method="POST">
        <table border="2" align="center">
            <tr>
                <th colspan="2">Company Feedback</th>

            </tr>
            <tr>
                
                <th align="left">1)Degree of technical knowlegde in students</th></tr>
                 <tr><th align="left"><input type="radio" name="1" value="Excellent">Excellent</th></tr>
                 <tr><th align="left"><input type="radio" name="1" value="Good">Good</th></tr>
                <tr><th align="left"><input type="radio" name="1" value="Average">Average</th></tr>
                <tr><th align="left"><input type="radio" name="1" value="Poor">Poor</th></tr>
               <tr>
                   <th align="left">2)Degree of communication skills in students</th></tr>
                <tr><th align="left"><input type="radio" name="2" value="Excellent">Excellent</th></tr>
                <tr><th align="left"><input type="radio" name="2" value="Good">Good</th></tr>
                <tr><th align="left"><input type="radio" name="2" value="Average">Average</th></tr>
                <tr><th align="left"><input type="radio" name="2" value="Poor">Poor</th></tr>
               <tr><th align="left">3)Confidence level in students</th></tr>
                <tr><th align="left"><input type="radio" name="3" value="Excellent">Excellent</th></tr>
                <tr><th align="left"><input type="radio" name="3" value="Good">Good</th></tr>
                <tr><th align="left"><input type="radio" name="3" value="Average">Average</th></tr>
                <tr><th align="left"><input type="radio" name="3" value="Poor">Poor</th></tr>
               <tr><th align="left">4)How did you feel about the system in the college</th></tr>
                <tr><th align="left"><input type="radio" name="4" value="Excellent">Excellent</th></tr>
                <tr><th align="left"><input type="radio" name="4" value="Good">Good</th></tr>
                <tr><th align="left"><input type="radio" name="4" value="Average">Average</th></tr>
                <tr><th align="left"><input type="radio" name="4" value="Poor">Poor</th></tr>
                <tr><th><input type="submit" value="give feedback" name="submit"></th></tr>
        </table>
        </form>
        <?php
        session_start();
            if(isset($_POST['submit']))
                {
                include 'connect.php';
                $a=$_POST['1'];
                $b=$_POST['2'];
                $c=$_POST['3'];
                $d=$_POST['4'];
                echo "$a $b $c $d";
                $user=$_SESSION['user_id'];
                echo "$user";
                $q="insert into comp_feedback(cid,question1,1option,question2,2option,question3,3option,question4,4option) values('$user','Degree of technical knowlegde in students','$a','Degree of communication skills in students','$b','Confidence level in students','$c','How did you feel about the system in the college','$d');";
                $r=mysql_query($q);
                if($r)
                    {
                    echo("<script>alert(\"Success\");</script>");
                    header("location:comp_home.php");
                    
                }
                else
                    {
                     header("location:comp_feedback.php");
                }

            
                }
        ?>
    </body>
</html>