<?php 
   session_start();
   include "../db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
       
    
    if(isset($_POST['assignment_submit']))
    {

        $teacher_id = $_SESSION['id'];

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

        $start_date=$_POST['start_date'];

        $end_date=$_POST['end_date'];



        $sql= "insert into assignment(teacher_id,char_1,char_2,char_3,char_4,char_5,char_6,char_7,char_8,start_time,end_time,start_date,end_date) 
        values('$teacher_id','$char_1','$char_2','$char_3','$char_4','$char_5','$char_6','$char_7','$char_8','$start_time','$end_time','$start_date','$end_date')";
        if (mysqli_query($conn, $sql))
        {
            $_SESSION['msg']="Assignment added Successfully !!";
        }
        else
        {
            $_SESSION['msg']="Error : Asignment not added try again";


        }
        // var_dump($sql);

        header("Location: ../staff/teacher/add_assignment.php");
    }
    

    }else{
	header("Location: index.php");
} ?>