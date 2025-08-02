<?php
/**
 * Main product listing page
 * IMPLEMENT YOUR SOLUTION HERE
 */

// Load the product data
require_once 'data/products.php';

// Load the FAQ data
require_once 'data/faqs.php';

// Load helper functions
require_once 'includes/functions.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details Challenge</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <h1>Product Details</h1>
        </div>
    </header>

    <main class="main">
        <?php
            include 'componants/faqs-accordion.php';
        ?>
    </main>

    <script src="assets/js/main.js"></script>
</body>
</html>
