<?php
  session_start();
  include "../db_conn.php";
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
        

      $id = $_GET['id'];

            if(isset($_POST['activate'])){
                $sql="UPDATE pupils SET status='active' WHERE id='$id'";

                if (mysqli_query($conn, $sql))
                {
                    $_SESSION['msg']="Pupil activated succssfully !!";
                }
                else
                {
                    $_SESSION['msg']="Error : please try again or contact the admin";

                }
            }
            elseif(isset($_POST['deactvate'])){
                $sql="UPDATE pupils SET status='inactive' WHERE id='$id'";

                if (mysqli_query($conn, $sql))
                {
                    $_SESSION['msg']="Pupil is deactvated  !!";
                }
                else
                {
                    $_SESSION['msg']="Error : action can not be completed contact the admin";

                }

            }
            else{
                $_SESSION['msg']="You are performing tis action in an illeagal way";
            }

        header("Location: ../staff/teacher/pupil_list.php");

}else{
    header("Location: index.php");
}
