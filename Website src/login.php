<?php  


$host="shareddb-j.hosting.stackcp.net"; 

$user="MarioRangers-3935ddfa"; 

$password="160411581Ab"; 

$db="MarioRangers-3935ddfa"; 

  

$conn= mysqli_connect($host,$user,$password,$db); 

if (!mysqli_connect_error()){
  echo "Connected";


}
  

if(isset($_POST['username'])){ 

     

    $uname=$_POST['username']; 

  

     

    $sql="select * from users where username='$uname' limit 1"; 

     

    $results=mysqli_query($conn,$sql); 



     

    if(mysqli_num_rows($results)==1){ 

     
        session_start();

       echo '<script>window.location="test.html";

				</script>';
       

        exit;


    } 

    else{ 

        echo " You Have Entered Incorrect Password"; 

        exit(); 

    } 

         

} 

?>