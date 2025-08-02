<?php
    usort($products, function($a, $b) {
        // Move unavailable products to end
        $isAvailable = $b['in_stock'] <=> $a['in_stock']; // Spaceship operator for comparison

        if ($isAvailable !== 0) {
            return $isAvailable;
        }

        // Move featured products to front
        return strcmp($b['is_featured'], $a['is_featured']);
    });

    $headline = 'Related Products';
    $subtitle = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.';
    $cta      = null;
?>
<section id="products" class="products centered">
    <div class="container">
        <div class="products-header">
            <?php include 'components/section-header.php' ?>
        </div>
        <?php if ($products) : ?>
            <div id="product-grid" class="product-grid">
                <?php foreach($products as $index => $product) : ?>
                    <?php
                        $id = $product['id'];
                        $name = $product['name'];
                        $category = $product['category'];
                        $image = file_exists($product['image']) ? $product['image'] : 'assets/images/placeholder/placeholder.png';
                        $description = $product['description'];
                        $tags = $product['tags'];
                    ?>
                    <a href="/products/<?php echo $id ?>" 
                       class="product-card<?php echo $index >= 3 ? ' hidden' : '' ?>"
                       data-category="<?php echo $category ?>" 
                       data-tags="<?php echo join(',', $tags) ?>"
                       style="animation-delay: <?php echo ($index) % 3 * .2 ?>s"
                    >
                        <?php if ($image) : ?>
                            <img class="product-image" src="<?php echo $image ?>" />
                        <?php endif; ?>
                        <div class="copy-area">
                            <?php if ($name): ?>
                                <h3 class="h3 product-name"><?php echo $name ?></h3>
                            <?php endif; ?>
                            <?php if ($description): ?>
                                <p class="product-detail"><?php echo $description ?></p>
                            <?php endif; ?>
                            <p class="product-link arrow-right dummy-link">View Product</p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
            <?php if (count($products) > 3) : ?>
                <a class="btn load-more" 
                   data-load-more-container="product-grid"
                >
                View More...</a>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</section>