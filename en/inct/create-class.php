<?php

	include("index.php");
    title('<b>Create Class</b>','fa fa-plus');

?>
	<div class="tab-content">
              <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
         <div class="main-card mb-3 card">
             <div class="card-body"><h5 class="card-title">Create Class</h5>

<div id="errors" class="wd100"></div>
<div id="success" class="wd100"></div>
         
        <div class="position-relative form-group"><label for="cname" class="">Class Name</label>
        	<input name="cname" id="cname" placeholder="Class Name" type="text" required="" class="form-control"></div>
              <button class="btn btn-primary" id="create" onclick="create_class()" name="create">Create</button>
                                        </form>
                                    </div>
                                </div>

