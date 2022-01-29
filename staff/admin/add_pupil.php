

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
               <li class="breadcrumb-item"><p class="text-success"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></p></li>
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
                           <label>First Name</label>
                           <input type="text" name="fname" class="form-control">
                        </div>
                     </div>
                     <div class="col-12 col-sm-6">
                        <div class="form-group">
                           <label>Last Name</label>
                           <input type="text" name="lname" class="form-control">
                        </div>
                     </div>
                     <div class="col-12 col-sm-6">
                        <div class="form-group">
                           <label>Gender</label>
                           <select class="form-control select">
                           <option name="gender">Select Gender</option>
                           <option value="female">Female</option>
                           <option value="male">Male</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-12 col-sm-6">
                        <div class="form-group">
                           <label>Date of Birth</label>
                           <input type="date" name="dob" class="form-control">
                        <div>
                     </div>
                     </div>
                     </div>
                     
                     <div class="col-12 col-sm-6">
                     <div class="form-group">
                        <label>Class</label>
                        <input type="text" name="class" class="form-control">
                     </div>
                     </div>
                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>Religion</label>
                              <input type="text" name="religion" class="form-control">
                           </div>
                           </div>
                        </div>
                        
                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>Pupil's password</label>
                              <input type="text" name="password" value="pupil" class="form-control">
                           </div>
                        </div>
                        <div class="col-12">
                           <h5 class="form-title"><span>Parent Information</span></h5>
                        </div>
                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>Gurdian's Name</label>
                              <input type="text" name="gurdian_name"  class="form-control">
                           </div>
                        </div>
                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>Gurdian's Occupation</label>
                              <input type="text" name="gurdian_occupation" class="form-control">
                           </div>
                        </div>
                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>Gurdian's Mobile</label>
                              <input type="text" name="gurdian_mobile" class="form-control">
                           </div>
                        </div>
                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <label>Address</label>
                              <input type="text" name="adress" class="form-control" placeholder="district - country">
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