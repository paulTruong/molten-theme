<?php
return [
    'title' => __('Two columns with a menu item in each' , 'molten'),
    'categories' => array( 'molten-menu' ),
    'content' => '<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"72px"}}} -->
    <div class="wp-block-columns alignwide"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group"><!-- wp:heading {"level":3} -->
    <h3>Benedict (V*, VG*, GF*)</h3>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"right"} -->
    <p class="has-text-align-right">$35.00</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->

    <!-- wp:paragraph -->
    <p>Sourdough Toast, Spinach, Poached Eggs, Hollandaise Sauce, Sliced Avocado.<br>Choose: Smoked Bacon/Smoked Salmon +1/ Leg Ham</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group"><!-- wp:heading {"level":3} -->
    <h3>Big Breakfast</h3>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"right"} -->
    <p class="has-text-align-right">$35.00</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->

    <!-- wp:paragraph -->
    <p>Sourdough Toast, Smoked Bacon, Free Range Eggs, Avocado, Grilled Halloumi, Hash Brown, Wilted Greens, Garlic Thyme Mushroom, Warmed Tomato</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->'
];
