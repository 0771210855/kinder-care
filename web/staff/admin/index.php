
<?php 
   session_start();
   include "../../db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   

include('master.php');
?>

<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Welcome Admin!</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Dashboard</li>
</ul>
</div>
</div>
</div>


<div class="row">
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-one w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-user-graduate"></i>
</div>
<div class="db-info">
<h3>50</h3>
<h6>Pupils</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-two w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-crown"></i>
</div>
<div class="db-info">
<h3>50+</h3>
<h6>Awards</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-three w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-building"></i>
</div>
<div class="db-info">
<h3>30+</h3>
<h6>Department</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-four w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-file-invoice-dollar"></i>
</div>
<div class="db-info">
<h3>$505</h3>
<h6>Revenue</h6>
</div>
</div>
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