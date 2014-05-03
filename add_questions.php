<html>
    <head>
        <title>Add questions</title>
         <style type="text/css">
            h3
            {
                text-align: center
            }
            table
            {
                text-align: left;
            }
            .box1
            {
                margin-top: 100;
                    margin-left: 450;
                     height:400;
                      width: 500;
            
            }
            body{
            font-family: georgia;
                font-size: 16px;
                color: blue;}
         </style>
    </head>
    <body>
        <div class="box">
        <form name="f1" action="add_questions.php" method="POST">
            
            <h3>Adding questions</h3>
             <hr width="90%">
            <table align="center">
              
                    <tr>
                        <th><label>Subject</label></th>
                        <th><select name="subject">
                                <option>Select</option>
                                <option>Web Technology</option>
                                <option>Computer Networks</option>
                                <option>ASE</option>
                                <option>Compiler Design</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                    <th><label>Question</label></th>
                     <th> <textarea name="quest" rows="5" cols="30"></textarea></th>
                </tr>
                <tr>
                    <th><label>Option 1</label></th>
                     <th><input type="text" name="op1" value=""></th>
                </tr>
                <tr>
                    <th><label>Option 2</label></th>
                    <th><input type="text" name="op2" value=""></th>
                </tr>
                <tr>
                    <th><label>Option 3</label></th>
                    <th><input type="text" name="op3" value=""></th>
                </tr>
                <tr>
                    <th><label>Option 4</label></th>
                    <th><input type="text" name="op4" value=""></th>
                </tr>
                <tr>
                    <th><label>Key Answer</label></th>
                    <th><input type="text" name="key" value=""></th>
                </tr>
                <tr>
                    <th></th>
                    <th><input type="submit" name="submit" value="submit"></th>
              </tr>
            </table>
        </form>
        </div>
    </body>
</html>
<?php
if(isset($_POST['submit']))
        {
    include 'connect.php';
    $sub=$_POST["subject"];
         $que=$_POST["quest"];
          $opt1=$_POST["op1"];
           $opt2=$_POST["op2"];
            $opt3=$_POST["op3"];
             $opt4=$_POST["op4"];
              $kans=$_POST["key"];
              //echo "$sub $que $opt1 $opt2 $opt3 $opt4 $kans";
         $query="insert into questions(chapter,question,option1,option2,option3,option4,key_ans) values('$sub','$que','$opt1','$opt2','$opt3','$opt4','$kans');";
         $res=mysql_query($query);
         //echo "$res";
              if($res)
             {
                 echo("<script>
                 alert(\"successfully added\");
                 </script>");
             }
         else
             {
                 echo("<script>alert(\"Sorry not added\");</script>");
               // echo("<script>location.replace(\"student_login.html\");</script>");
         }
        }

?>
