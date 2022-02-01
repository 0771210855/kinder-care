<?php 
   session_start();
   include "../../db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   


    $sql = "SELECT * FROM pupils  ORDER BY id ASC";
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
<h3 class="page-title">Pupil list</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">A list of all registerd students both active and deactivated</a></li>
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
<th>User Code</th>
<th>First name</th>
<th>Last name</th>
<th>Phone Contact</th>
<th class="text-end">status</th>
</tr>
</thead>
<tbody>


<?php 
$i =1;
while (/*$rows = mysqli_fetch_assoc($res))*/ $rows= mysqli_fetch_assoc($res)) {

?>
<tr>
<th scope="row"><?=$i?></th>
<td><?=$rows['user_code']?></td>
<td><?=$rows['fname']?></td>
<td><?=$rows['lname']?></td>
<td><?=$rows['contact']?></td>

<td class="text-end">
 <div class="actions">
    <?php
if($rows['status'] == 'inactive'){
    
?>
<a href="change_status.php" class="btn btn-sm bg-success-light me-2">
<p>active</p>
</a>
<?php
 }else{
    ?>

    <a href="change_status.php" class="btn btn-sm bg-success-light me-2">
    <p>In active</p>
    </a>
    
<?php

 }
?>

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