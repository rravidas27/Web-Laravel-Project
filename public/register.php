<?php
include("connection.php");
if (isset($_GET['UserID'])):
?>
<?php echo $_GET['UserID'];?>
<?php endif;?>

<?php    
error_reporting();
$msg= "";
$UserID= "";
$UserName= "";
$LastName= "";
$FirstName= "";
$MI= "";
$Course= "";
$YearLevel= "";
$Pass=  "";


//register.php
//Inserts new student record to tbl_students table in newbies_db database.
if (isset($_POST['UserName'])){
$conn = mysqli_connect('localhost', 'root', '', 'register_db');
$query = mysqli_query($conn,"INSERT INTO details(UserID, UserName, LastName, FirstName, MI,Course, Yearlevel, status) 
          VALUES ('$UserID', '$UserName', '$LastName','$FirstName','$MI','$Course','$YearLevel', '$UserID')");
	//if(!$query){
		//echo "Alert! Student not added.";
       
	
	//else{
		//echo "Student successfully added!";
        //  header("Location: login.php");
	
	
	//echo "<a href='./login.php'><input type='button' value='Back'/></a>";
}
?>
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Operation in PHP MySQLi</title>
        
      <style type="text/css">  
           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
                font-family: 'verdana', sans-serif;  
           }  
           body{  
                width: 100%;  
                height: 100vh;  
                display: flex;  
                justify-content: center;  
                align-items: center;  
                background-color: #5d6d7d;  
           }  
           .container{
                max-width: 500px;  
                width: 100%;  
                background-color: #ffff;
                transition: .3s;   
           }  
           .container form{  
                width: 100%;  
                padding: 30px;  
                
           }  
           .container form .data-insert{  
                width: 100%;
                padding: 15px 20px;
                text-align: center;
                outline: none;  
                border-radius: 30px;
                font-size: 1.2rem; 
                color: #000;
                cursor: pointer;
                transition: .3s;
                margin: 7px 0px  
                
           }  
           .container form .sub_btn{  
            display: block;
            width: 100%;
            padding: 15px 20px;
            text-align: center;
            border: none;
            background: #da0a0d;
            outline: none;
            border-radius: 30px;
            font-size: 1.2rem;
            color: #FFF;
            cursor: pointer;
            transition: .3s; 
           }  
           .container h1{  
                display: block;  
                text-align: center;  
                padding: 15px 0px;
                transition: .3s;   
           }  
      </style>  
 </head>  
 <body>  
 <div class="container"> 
      <h1>Register</h1>  
      <Form method="POST" action="register.php">  
           <input type="text" name="UserID" placeholder="UserID" class="data-insert" value="<?php echo $UserID; ?>">  
           <input type="text" name="Username" placeholder="Username" class="data-insert" value="<?php echo $UserName; ?>"> 
           <input type="text" name="LastName" placeholder="Lastname" class="data-insert" value="<?php echo $LastName; ?>"> 
           <input type="text" name="FirstName" placeholder="Firstname" class="data-insert" value="<?php echo $FirstName; ?>"> 
           <input type="text" name="MI" placeholder="Middle Initial" class="data-insert" value="<?php echo $MI; ?>">  
           <input type="text" name="Course" placeholder="Course" class="data-insert" value="<?php echo $Course; ?>">  
           <input type="text" name="YearLevel" placeholder="Year Level" class="data-insert" value="<?php echo $YearLevel; ?>">   
           <input type="text" name="Password" placeholder="Password" class="data-insert" value="<?php echo $Pass; ?>">   

           <br>
           <input type="submit" name="submit" class="sub_btn" value="Register">
           <br>  

           <p class="login-register-text">Already have an account? <a href="login.php">login here</a>.</p>
           <p class="login-register-text"> <a href="index.php">Back</a></p>
           <span><?php echo $msg; ?></span>  
     </Form>
</html>
