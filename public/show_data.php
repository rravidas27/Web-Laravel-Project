<?php   
 if (isset($_GET['UserID'])) {  
      $UserID =$_GET['UserID'];  
     //$delete=mysqli_query($conn,"Delete FROM details WHERE UserID = '".$_GET['id']. "") or die(mysqli_error());
      $delete = mysqli_query ($conn, "Update details SET status= 'DELETED' WHERE UserID = '".$_GET['id']."'") or die (mysqli_erorr());  
      //if ($delete) {  
      //     header("location:data_show.php");  
      //     die();  
        if(!$query){
            echo "Record not deleted!";
        }
        else{
            echo"Record successfully deleted";
        }
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Show Data from database in Table</title>  
      <style type="text/css">  
           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
                font-family: 'verdana', sans-serif;  
           }  
           body{  
                display: flex;  
                justify-content: center;  
                align-items: center;  
                width: 100%;  
                height: 100vh;  
                background-color: #C0C0C0;  
           }  
           table{  
                border-collapse: collapse;  
           }  
           table th{  
                background-color: #37BBC4;  
                padding: 8px 10px;  
                color: #fff;  
           }  
           table td{  
                background-color: #f3f3f3;  
                padding: 8px 10px;  
                color: #111;  
           }  
           .opt{  
                background-color: orange;  
                color: #fff;  
                font-size: 1em;  
                padding: 5px;  
                text-decoration: none;  
           }  
      </style>  
 </head>  
 <body>  
 <div class="container">  
      <table border="1" cellpadding="0">  
           <tr>  
                <th>UserID</th>  
                <th>Username</th>  
                <th>LastName</th>  
                <th>FirstName</th>  
                <th>MI</th>  
                <th>Course</th>  
                <th>YearLevel</th>  
                <th>Password </th>   
           </tr>  
           <br><a href="logout.php">Logout</a>
           <br><a href="switch.php">Switch to user</a>
           <?php    
            include "connection.php";
            echo "<br>";
            echo "<br>"; 
            echo "<strong> Records </strong>";
                $select=mysqli_query($conn,"select * from details");  
                $num=mysqli_num_rows($select);  
                if ($num>0) {  
                     while($result=mysqli_fetch_assoc($select)){  
                         
                            echo "  
                               <tr>  
                                    <td>".$result['UserID']."</td>  
                                    <td>".$result['UserName']."</td>  
                                    <td>".$result['LastName']."</td>  
                                    <td>".$result['FirstName']."</td>  
                                    <td>".$result['MI']."</td>  
                                    <td>".$result['Course']."</td>  
                                    <td>".$result['YearLevel']."</td> 
                                    <td>".$result['Password']."</td>  
                               </tr> 
                          ";  
                          
                     }  
                }  
                
           ?>  
      </table> 

 <div class="container">  
      <table border="1" cellpadding="0">  
           <tr>  
                <th>UserID</th>  
                <th>Username</th>  
                <th>LastName</th>  
                <th>FirstName</th>  
                <th>MI</th>  
                <th>Course</th>  
                <th>YearLevel</th>  
                <th>Password</th>
                <th>Operations</th>  
           </tr>  
           <br>
           <hr>
           <br>
           <hr>
           <?php    
            echo "<br>";
            echo "<br>"; 
            echo "<strong> Records </strong>";
                $select=mysqli_query($conn,"select * from details");  
                $num=mysqli_num_rows($select);  
                if ($num>0) {  
                     while($result=mysqli_fetch_assoc($select)){  
                         
                            echo "  
                               <tr>  
                                    <td>".$result['UserID']."</td>  
                                    <td>".$result['UserName']."</td>  
                                    <td>".$result['LastName']."</td>  
                                    <td>".$result['FirstName']."</td>  
                                    <td>".$result['MI']."</td>  
                                    <td>".$result['Course']."</td>  
                                    <td>".$result['YearLevel']."</td>  
                                    <td>".$result['Password']."</td> 
                                    <td>".$result['Operations']." 
                                         <a href='show_data.php?id=".$result['UserID']."' class='opt'>Delete</a>  
                                         <a href='register.php?id=".$result['UserID']."' class='opt'>Edit/Update</a>  
                                    </td>  
                               </tr> 
                          ";  
                          
                     }  
                }  
           ?> 
      </table> 
 </div>  
 </body>  
 </html>  
