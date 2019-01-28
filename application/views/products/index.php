<h2><?= $title ?></h2>

<?php foreach($products as $product) : ?>
   <h3><?php echo $product['title']; ?></h3>
   <p></p>
<?php endforeach; ?>
