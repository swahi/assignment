<html>
    <head>
        <title>Add questions</title>
         <style type="text/css">

            body
            {
                font-family: georgia;
                font-size: 16px;
                color: blue;
            }
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
                      border: solid;
                      height:400;
                      width: 500;
                      background-color:lightpink

            }
         </style>
    </head>
    <body>
        <div class="box">
        <form name="f1" action="add_company.php" method="POST">



            <h3>Adding New company</h3>
             <hr width="90%">
            <table align="center">

                 <tr>
                    <th><label>Company Name</label></th>
                     <th><input type="text" name="cname" value=""></th>
                </tr>
                <tr>
                    <th><label>Email Id</label></th>
                     <th><input type="text" name="eid" value=""></th>
                </tr>
                <tr>
                    <th><label>Company Description</label></th>
                     <th> <textarea name="descp" rows="5" cols="30"></textarea></th>
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
       // mysql_connect("localhost", "root", "root") or die(mysql_error());
         //$db=  mysql_select_db("wt") or die(mysql_error());
    include 'connect.php';
    $name1=$_POST["cname"];
         $email1=$_POST["eid"];
          $desc=$_POST["descp"];
         
          $query="insert into company(cname,email_id,comp_description) values('$name1','$email1','$desc')";
         $res=mysql_query($query);
          if($res)
             {
              echo("<script> alert(\"successfully added\");</script>");
          }
     
             
         else
             {
             echo("<script>alert(\"Enter valid information\");</script>");
             echo("<script>
location.replace(\"add_company.html\");
</script>");
         }
        
        }

?>
