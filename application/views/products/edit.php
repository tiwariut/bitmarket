<h2><?= $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('products/update'); ?>
<input type="hidden" name="id" value="<?php echo $product['id']; ?>">
<div class="form-group">
    <label>Product Name</label>
    <input type="text" class="form-control" name="title" value="<?php echo $product['title']; ?>">
</div>
<div class="form-group">
    <label>Image Url</label>
    <input type="text" class="form-control" name="image" value="<?php echo $product['image']; ?>">
</div>
<div class="form-group">
    <label>Price</label>
    <input type="text" class="form-control" name="price" value="<?php echo $product['price']; ?>">
</div>
<div class="form-group">
    <label>Product Description</label>
    <textarea id="editor" class="form-control" name="body" rows="8"><?php echo $product['body']; ?></textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>