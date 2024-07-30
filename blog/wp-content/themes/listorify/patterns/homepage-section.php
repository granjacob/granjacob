<?php

/**
 * Title:Homepage Section
 * Slug: listorify/homepage-section
 * Categories: listorify-patterns
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"48px","bottom":"48px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","className":"is-style-default","layout":{"type":"constrained","contentSize":"1180px"}} -->
<main class="wp-block-group is-style-default has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:48px;padding-right:var(--wp--preset--spacing--40);padding-bottom:48px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"24px","bottom":"100px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group" style="margin-top:24px;margin-bottom:100px"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"54px","fontStyle":"normal","fontWeight":"600"}}} -->
        <h1 class="wp-block-heading has-text-align-center" style="font-size:54px;font-style:normal;font-weight:600"><?php esc_html_e('Welcome to Listorify', 'listorify') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Welcome to Listorify, Explore and Read Story. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 'listorify') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group" style="margin-top:40px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:categories {"className":"listorify-categories-list is-style-fotawp-categories-bullet-hide-style","style":{"layout":{"selfStretch":"fit","flexSize":null}}} /--></div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":29,"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"40px"}},"layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"var:preset|spacing|20","margin":{"bottom":"0px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"transparent","className":"listorify-post-box","layout":{"inherit":false}} -->
        <div class="wp-block-group listorify-post-box has-transparent-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"height":"240px","className":"listorify-featured-img"} /-->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0"},"padding":{"top":"24px","bottom":"0px","left":"0px","right":"0px"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-group" style="margin-top:0px;margin-bottom:0;padding-top:24px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-terms {"term":"category","style":{"spacing":{"margin":{"top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}},"className":"is-style-categories-background-with-mixed-color","fontSize":"xx-small"} /-->

                <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"bottom":"var:preset|spacing|40","top":"var:preset|spacing|20"}},"typography":{"fontSize":"24px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600"}},"textColor":"foreground","className":"is-style-default"} /-->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:post-author-name {"className":"is-style-author-name-with-icon"} /-->

                    <!-- wp:post-date {"className":"is-style-post-date-with-icon"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:post-excerpt {"excerptLength":17,"style":{"spacing":{"margin":{"top":"16px"}}}} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->

        <!-- wp:group {"style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group" style="margin-top:40px"><!-- wp:query-pagination {"paginationArrow":"chevron","showLabel":false,"className":"fotawp-post-pagination","layout":{"type":"flex","justifyContent":"center"}} -->
            <!-- wp:query-pagination-previous /-->

            <!-- wp:query-pagination-numbers /-->

            <!-- wp:query-pagination-next /-->
            <!-- /wp:query-pagination -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:query -->
</main>
<!-- /wp:group -->