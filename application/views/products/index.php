<h2><?= $title ?></h2>

<div class="container">

    <div class="row">
        <?php foreach($products as $product) : ?>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product['title']; ?></h5>
                    <p class="card-text"><strong>Price:</strong> Rs. <?php echo $product['price']; ?></p>
                    <a href="<?php echo site_url('/products/' . $product['slug']); ?>" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

