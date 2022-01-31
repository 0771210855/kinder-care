<?php 
   session_start();
   include "../../db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   


    $sql = "SELECT * FROM assignment ORDER BY id ASC";
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
<h3 class="page-title">Assignments</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index-2.html">Dashboard</a></li>
</ul>
</div>
<div class="col-auto text-end float-end ms-auto">
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
<a href="add_assignment.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
<th>ID</th>
<th>char 1</th>
<th>char 2</th>
<th>char 3</th>
<th>char 4</th>
<th>char 5</th>
<th>char 6</th>
<th>char 7</th>
<th>char 8</th>
<th>Start time</th>
<th>End time</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody>


<?php 
$i =1;
while (/*$rows = mysqli_fetch_assoc($res))*/ $rows= mysqli_fetch_assoc($res)) {?>


<tr>
<th scope="row"><?=$i?></th>
<td><?=$rows['char_1']?></td>
<td><?=$rows['char_2']?></td>
<td><?=$rows['char_3']?></td>
<td><?=$rows['char_4']?></td>
<td><?=$rows['char_5']?></td>
<td><?=$rows['char_6']?></td>
<td><?=$rows['char_7']?></td>
<td><?=$rows['char_8']?></td>
<td><?=$rows['start_time']?></td>
<td><?=$rows['end_time']?></td>

<td class="text-end">
<div class="actions">
<a href="edit_assignment.php?edit=<?php echo $rows['id']; ?>" class="btn btn-sm bg-success-light me-2">
<i class="fas fa-pen"></i>
</a>
<a href="server.php?del=<?php echo $rows['id']; ?>" class="btn btn-sm bg-danger-light">
<i class="fas fa-trash"></i>
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