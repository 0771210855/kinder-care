<?php 
   session_start();
   include "../../db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   


    $sql = "SELECT * FROM actvation_request  ORDER BY id ASC";
    $res = mysqli_query($conn, $sql);

include('master.php');

?>


<?php

include('master.php');
?>
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Activation request list</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Requests of deactvated pupils for activation</a></li>
</ul>
</div>
</div>
</div>


<div class="row">
<div class="col-sm-12">
<div class="card card-table">
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0 datatable">
<thead>
<tr>
<th>#</th>
<th>user_code</th>

<th>Date of request</th>
<th class="text-end">take status action</th>
</tr>
</thead>
<tbody>


<?php 
$i =1;
while ( $rows= mysqli_fetch_assoc($res)) {

    $pupil_id=$rows['user_code'];

    // $rec = mysqli_query($conn, "SELECT * FROM pupils WHERE User_code='$pupil_id'");
			
			

    // $p = mysqli_fetch_assoc($rec);

    // $lname = $p['lastname'];
    // $fname = $p['firstname'];
    // $user_code = $p['user_code'];

?>
<tr>
<th scope="row"><?=$i?></th>
<th scope="row"><?=$pupil_id?></th>

<td><?=$rows['created_at']?></td>


<td class="text-end">
<div class="actions">
<a href="pupil_list.php" class="btn btn-sm bg-primary-light me-2">
<i class="fas fa-check"></i>
</a>
</div>
</td>
</tr>
<?php $i++; }?>

</tbody>
</table>
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

<script src="../../assets/plugins/simple-calendar/jquery.simple-calendar.js"></script>
<script src="../../assets/js/calander.js"></script>

<script src="../../assets/js/circle-progress.min.js"></script>

<script src="../../assets/js/script.js"></script>
</body>

</html>

<?php }else{
	header("Location: index.php");
} ?>