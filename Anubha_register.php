<html>
   
   <head>
      <title>Add New Record in MySQL Database</title>
   </head>
   
   <body>
      <?php
       if(isset($_POST['add1'])) {
       header('location: Anubha_login.html');
       }
         if(isset($_POST['add'])) {
            $dbhost = 'localhost:3036';
            $dbuser = 'anubha';
            $dbpass = 'idomybest';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            if(! get_magic_quotes_gpc() ) {
               $User = addslashes ($_POST['User']);
               $Passwd = addslashes ($_POST['Passwd']);
            }else {
               $User = $_POST['User'];
               $Passwd = $_POST['Passwd'];
            }
            
            
            
            $sql = "INSERT INTO register ". "(User,Passwd) ". "VALUES('$User','$Passwd')";
               
            mysql_select_db('Anubha');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Entered data successfully\n";
            header('location: Anubha.php');
            mysql_close($conn);
         }else {
            ?>
            
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">User Name</td>
                        <td><input name = "User" type = "text" 
                           id = "User"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Password</td>
                        <td><input name = "Passwd" type = "text" 
                           id = "Passwd"></td>
                     </tr>
                  
                     
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "add" type = "submit" id = "add" 
                              value = "Register">
                        </td>
                        
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "add1" type = "submit"  id = "add1"
                              value = "Login">
                        </td>
                        
                     </tr>
                     
                  
                  </table>
               </form>
            
            <?php
         }
      ?>
   
   </body>
</html>
