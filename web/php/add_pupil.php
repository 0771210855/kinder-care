
<?php 
   session_start();
   include "../db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
       
    
    if(isset($_POST['add_pupil']))
    {

        $fname=$_POST['fname'];

        $lname=$_POST['lname'];

        $user_code=$_POST['user_code'];  

        $contact=$_POST['phone'];
        

        $sql= "insert into pupils(firstname,lastname,phonenumber,user_code) 
        values('$fname','$lname','$contact','$user_code')";
        if (mysqli_query($conn, $sql))
        {
            $_SESSION['msg']="Pupil Registered Successfully !!";
        }
        else
        {
            $_SESSION['msg']="Error : Pupil  not Registered retry";

        }

        header("Location: ../staff/teacher/add_pupil.php");
    }
    

    }else{
	header("Location: index.php");
} ?>