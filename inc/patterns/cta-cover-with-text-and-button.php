<?php
return [
    'title' => __('Full width cover with text and a button' , 'molten'),
    'categories' => array( 'molten-cta' ),
    'content' => '
    <!-- wp:cover {"url":"http://molten-theme.local/wp-content/uploads/2022/07/close-up-of-warm-dinner-setting-scaled.jpg","id":133,"dimRatio":70,"focalPoint":{"x":"0.59","y":"0.42"},"minHeight":692,"minHeightUnit":"px","align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:692px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-133" alt="" src="http://molten-theme.local/wp-content/uploads/2022/07/close-up-of-warm-dinner-setting-scaled.jpg" style="object-position:59% 42%" data-object-fit="cover" data-object-position="59% 42%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="has-text-align-center has-x-large-font-size">We look forward to having you </h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"foreground","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background">Make a reservation</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->'
];
