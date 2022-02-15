
<?php
  session_start();
  include "../db_conn.php";
  if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
        
    if (isset($_POST['update'])) {

      $id = $_GET['id'];
      // $id=$_POST['id'];
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

        $sql="UPDATE assignment SET char_1='$char_1', char_2='$char_2', char_3='$char_3', char_4='$char_4', char_5='$char_5', char_6='$char_6', char_7='$char_7', char_8='$char_8', start_time='$start_time',end_time='$end_time' , start_date='$start_date',end_date='$end_date' WHERE assignmentID='$id'";

        if (mysqli_query($conn, $sql))
        {
            $_SESSION['msg']="Assignment added Successfully !!";
        }
        else
        {
            $_SESSION['msg']="Error : Asignment not added try again";


        }

        header("Location: ../staff/teacher/assignment_list.php");
    }
    }else{
        header("Location: index.php");
    } ?>
