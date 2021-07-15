<?php include 'header.php' ?>
<?php if (isset($error)): ?>
    <?=error($error)?>
<?php endif; ?> 
<?php if (isset($success)): ?>
    <?=success($success)?>
<?php endif; ?> 
<div class="card-body">

                <form class="user" action="" method="post">
	                <div class="form-group">
	                    <input type="number" name="parent_id" class="form-control form-control-user" id="exampleInputEmail"
	                        placeholder="parent id">
	                </div>
	                <div class="form-group">
	                    <input type="text" name="title" class="form-control form-control-user" id="exampleInputEmail"
	                        placeholder="Title">
	                </div>
	                <div class="form-group">
	                    <input type="text" name="description" class="form-control form-control-user" id="exampleInputEmail"
	                        placeholder="Description">
	                </div>
	                <div class="form-group">
	                    <input type="text" name="image"  class="form-control form-control-user" id="exampleInputEmail"
	                        placeholder="image">
	                </div>
	                <button class="btn btn-primary " style="width: 150px;" type="submit" name="submit" value="1">
                        Save
                    </button>
	                
	            </form>
</div>
<?php include 'footer.php' ?>      