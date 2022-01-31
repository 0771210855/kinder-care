<?php 
   session_start();
   include "../db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
       
    
    if(isset($_POST['assignment_submit']))
    {



        $char_1=$_POST['char_1'];

        $char_2=$_POST['char_2'];

        $char_3=$_POST['char_3'];

        $char_4=$_POST['char_4'];

        $char_5=$_POST['char_5'];

        $char_6=$_POST['char_6'];

        $char_7=$_POST['char_7'];

        $char_8=$_POST['char_8'];

        $start_time=$_POST['start_time'];

        $end_time=$_POST['end_time'];




        // $pincode = rand(100000,999999);
        $sql= "insert into staff(char_1,char_2,char_3,dob,mobile,join_date,qualification,experience,username,email,password,district,country) 
        values('$char_1','$char_2','$char_3','$char_4','$char_5','$char_6','$char_7','$char_8','$start_time','$end_time')";
        if (mysqli_query($conn, $sql))
        {
            $_SESSION['msg']="Assignment added Successfully !!";
        }
        else
        {
            $_SESSION['msg']="Error : Asignment not added try again";

        }

        header("Location: ../staff/admin/add_teacher.php");
    }
    

    }else{
	header("Location: index.php");
} ?>