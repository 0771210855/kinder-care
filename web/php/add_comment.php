
<?php
  session_start();
  include "../db_conn.php";
  if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
        
    if (isset($_POST['update'])) {

      $id = $_GET['id'];

        $comment=$_POST['comment'];


        $sql="UPDATE results SET teacher_comment='$comment' WHERE id='$id'";
        var_dump($sql);

    //     if (mysqli_query($conn, $sql))
    //     {
    //         $_SESSION['msg']="Assignment added Successfully !!";
    //     }
    //     else
    //     {
    //         $_SESSION['msg']="Error : Asignment not added try again";


    //     }

    //     header("Location: ../staff/teacher/view_results.php");
     }
    }else{
        header("Location: index.php");
    } ?>
