<html>
   
   <head>
      <title>Add New Record in MySQL Database</title>
   </head>
   
   <body>
      <?php
      if(isset($_POST['add1'])) {
       header('location: Anubha_view.php');
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
               $name = addslashes ($_POST['name']);
               $city = addslashes ($_POST['city']);
                $address = addslashes ($_POST['address']);
               $phone = addslashes ($_POST['phone']);
                $email = addslashes ($_POST['email']);
               $bg = addslashes ($_POST['bg']);
            }else {
               $name = $_POST['name'];
               $city = $_POST['city'];
               $address = $_POST['address'];
                $phone = $_POST['phone'];
               $email = $_POST['email'];
               $bg = $_POST['bg'];
            }
            
            
            
            $sql = "INSERT INTO Record ". "(name, city, address, phone, email, bg) ". "VALUES('$name', '$city', '$address','$phone', '$email', '$bg')";
               
            mysql_select_db('Anubha');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Entered data successfully\n";
            header('location: Anubha_view.php');
            mysql_close($conn);
         }else {
            ?>
            
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">Name</td>
                        <td><input name = "name" type = "text" 
                           id = "name"></td>
                     </tr>

                     <tr>
                        <td width = "100">City</td>
                        <td><input name = "city" type = "text" 
                           id = "city"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Address</td>
                        <td><input name = "address" type = "text" 
                           id = "address"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Phone Number</td>
                        <td><input name = "phone" type = "text" 
                           id = "phone"></td>
                     </tr>
                  <tr>
                        <td width = "100">Email</td>
                        <td><input name = "email" type = "text" 
                           id = "email"></td>
                     </tr>
                  
                  <tr>
                        <td width = "100">Blood Group</td>
                        <td><input name = "bg" type = "text" 
                           id = "bg"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "add" type = "submit" id = "add" 
                              value = "Add USER">
                        </td>
                     </tr>
                   <td width = "100"> </td>
                        <td>
                           <input name = "add1" type = "submit"  id = "add1"
                              value = "List View">
                        </td>
                        
                  </table>
               </form>
            
            <?php
         }
      ?>
   
   </body>
</html>
