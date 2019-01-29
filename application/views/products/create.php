<h2><?= $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('products/create'); ?>
    <div class="form-group">
        <label>Product Name</label>
        <input type="text" class="form-control" name="title" placeholder="Add Product Name">
    </div>
    <div class="form-group">
        <label>Image Url</label>
        <input type="text" class="form-control" name="image" placeholder="Add Image Url">
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="text" class="form-control" name="price" placeholder="Add Price">
    </div>
    <div class="form-group">
        <label>Product Description</label>
        <textarea class="form-control" name="body" placeholder="Add Product Description" rows="6"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>