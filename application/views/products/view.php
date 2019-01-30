
<div class="container">
    <div class="card border-secondary bg-light mb-3">
        <h1 class="heading card-title" style="margin-top: 45px;"><?php echo $product['title']; ?></h1>
        <div class="card-body">
            <hr>
            <img class="card-img-top" style="max-width: 300px;" src="<?php echo $product['image']; ?>" alt="Card image cap">
            <hr>
            <p class="card-text"><strong>Price:</strong> Rs. <?php echo $product['price']; ?></p>
            <p class="card-text"><?php echo $product['body']; ?></p>
        </div>
    </div>

    <hr>

    <a class="btn btn-warning" href="edit/<?php echo $product['slug']; ?>">Edit Product</a>

    <hr>

    <?php echo form_open('/products/delete/' . $product['id']); ?>
        <input type="submit" value="Delete Product" class="btn btn-danger">
    </form>

</div>
