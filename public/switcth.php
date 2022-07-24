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
                   </tr> 
              ";  
              
         }  
    }  
    
?>  
