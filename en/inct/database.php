<?php

	include("index.php");
    title('<b>Database</b>','fa fa-database');

    if($ses_rank == "admin"){
    	?>
<table class="table table-light table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Table</th>
        <th>Action</th>
        <th>Rows</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Teachers</td>
        <td><?php get_table_actions('1'); ?></td>
        <td><?php get_num_rows('teacher'); ?></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Students</td>
        <td><?php get_table_actions('2'); ?></td>
        <td><?php get_num_rows('student'); ?></td>
      </tr>
      
    </tbody>
  </table>

    	<?php
    }else{
    	?>
    	Error 403
    	<?php
    }

?>