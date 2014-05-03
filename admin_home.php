<?php
session_start();
 ?>

 <html>
     <head><title>Admin Home</title></head>
         <style>
             .leftbox
             {
                 margin-top: 20px;
                 background-color: #0099CC;
                 margin-left: 2px;
                 margin-right: 80px;
                 width: 250px;
                 height: 600px;
             }
             .rightbox
             {
                 background-color: white;
                  margin-top: 20px;
                 margin-left: 250px;
                 margin-right: 2px;
                 width:  1150px;
                 height: 600px;
             }
             iframe
              {
                width:1050px;
                height:600px;
              }
              .hh
              {
               text-decoration: blink;
               }
               a:hover
               {
                   background-color: red;
                }
         </style>
     </head>
     <h1 align="center" class="hh">WELCOME TO PLACEMENT INFORMATION SYSTEM</h1>
     <div class="leftbox">
     <table align="left">
         <tr>
             <th align="left">&nbsp;</th>
         </tr>
         <tr>
             <th align="left"><a href="add_company.php" target="myIframe"><button>Add Company Details</button></a></th>
         </tr>
         <tr><td><br></td></tr>
         <tr>
             <th align="left"><a href="update_company.php" target="myIframe"><button>Update Company Details</button></a></th>
         </tr>
         <tr><td><br></td></tr>
          <tr>
              <th align="left"><a href="remove_company.php" target="myIframe"><button>Remove Company Details</button></a></th>
         </tr>
         <tr><td><br></td></tr>
         <tr>
             <th align="left"><a href="reg_studs.php" target="myIframe"><button>Add a New Student</button></a></th>
         </tr><tr><td><br></td></tr>
         <tr>
             <th align="left"><a href="update_stud_info.php" target="myIframe"><button>Update Student details</button></a></th>
         </tr><tr><td><br></td></tr>
         <tr>
         <tr>
             <th align="left"><a href="add_questions.php" target="myIframe"><button>Add Questions</button></a></th>
         </tr><tr><td><br></td></tr>
         <tr>
             <th align="left"><a href="remove_stud.php" target="myIframe"><button>Remove a Student</button></a></th>
         </tr><tr><td><br></td></tr>
         <tr>
             <th align="left"><a href="reset_stud_pass.php" target="myIframe"><button>Reset Student's Password</button></a></th>
         </tr><tr><td><br></td></tr>
         <tr>
             <th align="left"><a href="admin_logout.php"><font color="white" size="10">LOGOUT</font></a></th>
         </tr><tr><td><br></td></tr>
     </table>
      <div class="rightbox">
          <iframe src="wel_come_staff.php" name="myIframe" frameborder="0"></iframe>
       </div>
    </div>
     <body bgcolor="#0099CC">
 </body
 </html>