<?php
/*
Template Name: Contact
*/
?>

<main class="contact_wrapper page_wrapper">

    <section class="main_section">
        <div class="container">
            <div class="section_inner">

                <h1><?php the_title(); ?></h1>

                <div class="left_side">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                    endwhile; else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                </div>

                <div class="right_side">
                    <?php the_field('form'); ?>
                </div>

            </div>
        </div>
    </section>

</main>