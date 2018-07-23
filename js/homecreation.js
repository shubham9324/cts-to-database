<?php
include("connection.php");
error_reporting(0);
?>
<script type="text/javascript">
function creation()
{
var nm=document.getElementById("dbame").value;
  <?php
$query="CREATE DATABASE nm";
$run=mysqli_query($conn,$query);
  ?>
}
</script>
