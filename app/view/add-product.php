<?php include 'header.php' ?>
<?php if (isset($error)): ?>
    <?=error($error)?>
<?php endif; ?> 
<?php if (isset($success)): ?>
    <?=success($success)?>
<?php endif; ?> 


<?php 

$categories = $db->Select("Select * from categories");

?>

<div class="col-lg-12 card-body d-flex justify-content-center">

                <form class="user" action="" method="post">

                	<div class="form-group">
	                	<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="category_id">
						  <option selected value="0">Kategori Seçiniz</option>
						  <?php foreach($categories as $category) { ?>
						  	<option value="<?= $category["id"] ?>"><?= $category["title"] ?></option>
						  <?php } ?>
						</select>
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
	                    <input type="text" name="detail" class="form-control form-control-user" id="exampleInputEmail"
	                        placeholder="Detail">
	                </div>
	                <div class="form-group">
	                    <input type="number" name="price"  class="form-control form-control-user" id="exampleInputEmail"
	                        placeholder="Price">
	                </div>
	                <div class="form-group">
	                    <input type="number" name="stock"  class="form-control form-control-user" id="exampleInputEmail"
	                        placeholder="Stock">
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