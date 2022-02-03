

<?php 
   session_start();
   include "../../db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   

include('master.php');
?>

<div class="page-wrapper">
   <div class="content container-fluid">

      <div class="page-header">
         <div class="row align-items-center">
            <div class="col">
               <h3 class="page-title">Add a Pupil</h3>
               <ul class="breadcrumb">
               <li class="breadcrumb-item"><p class="text-success"><?php echo htmlentities($_SESSION['msg']);?></p></li>
               </ul>
            </div>
         </div>
      </div>

      <div class="row">
         <div class="col-sm-12">
            <div class="card">
               <div class="card-body">

                     <form method="POST" action="../../php/add_pupil.php">
                     <div class="row">
                        <div class="col-12">
                           <h5 class="form-title"><span>Pupil Information</span></h5>
                        </div>
                     <div class="col-12 col-sm-6">
                        <div class="form-group">
                           <label>First Name</label><span style="color:red">*</span>
                           <input type="text" name="fname" required class="form-control">
                        </div>
                     </div>
                     <div class="col-12 col-sm-6">
                        <div class="form-group">
                           <label>Last Name</label><span style="color:red">*</span>
                           <input type="text" name="lname" required class="form-control">
                        </div>
                     </div>

                     <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>Phone contact</label><span style="color:red">*</span>
                              <input type="text" name="phone" placeholder="07...." required class="form-control">
                           </div>
                        </div>
                     
                     <div class="col-12 col-sm-6">
                        <div class="form-group">
                           <label>User code [4 characters]</label>
                           <input type="text" name="user_code" pattern="[A-Z0-9]" minlength="4" maxlength="4" required  class="form-control" placeholder="AA11">
                        <div>
                     </div>
                     </div>
                     </div>

                        <div class="col-12">
                           <input type="submit" name="add_pupil" value="Submit" class="btn btn-primary">
                        </div>
                     </div>
                     </form>
               </div>
            </div>
         
</div>
   

</div>

   <footer>
      <p>Copyright © Kinder care by group 28</p>
   </footer>

</div>

</div>


<script src="../../assets/js/jquery-3.6.0.min.js"></script>

<script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="../../assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="../../assets/plugins/apexchart/chart-data.js"></script>

<script src="../../assets/js/script.js"></script>
</body>

</html>

<?php }else{
	header("Location: index.php");
} ?>