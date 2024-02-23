<br>
<main class="container">

<?php

	if(isset($_GET['view_school'])){
		all::view_school($_GET['view_school']);
	}else{
		?>


	<div class="card-body">
    <h5 class="card-title">All School</h5>
 <table class="mb-0 table">
<thead>
<tr>
  <th>id</th>
 <th>School Name</th>
 <th>Status</th>
<th>Country</th>
<th>State</th>
<th>Time</th>
<th>Action</th>
</tr>
</thead>
<tbody> 
<?php

	echo admin::load_schools();

?>
</tbody>
</table>


	<?php
}
?>


</main>

