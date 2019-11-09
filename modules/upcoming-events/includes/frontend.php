<?php

/**
 * This file should be used to render each module instance.
 * You have access to two variables in this file: 
 * 
 * $module An instance of your module class.
 * $settings The module's settings.
 *
 */

$number = $settings->select_field;

$events = tribe_get_events( [
    'start_date'     => 'now',
    'eventDisplay'   => 'list',
    'posts_per_page' => $number,
 ] );

 //var_dump($number);

 echo '<section class="upcoming-events-container">';

 foreach ( $events as $post ) {
    setup_postdata( $post );
    $meta = get_post_meta( $post->ID );
    $thumb = get_the_post_thumbnail( $post->ID, 'large', array( 'class' => 'alignleft' ) );
    $url = get_permalink($post->ID);

    $date = new DateTime($meta['_EventStartDate'][0]);

    ?>
    <article class="event">
        <figure class="event__thumbnail">
            <?php echo $thumb; ?>
            <p class="event__date"><?php echo $date->format('F d'); ?></p>
        </figure>

        <header class="event__title">
            <h4><?php echo $post->post_title; ?></h4>
        </header>
        
        <a href="<?php echo $url; ?>" class="rsvp">RSVP Now</a>
    </article>
    
    <?php 
    
    wp_reset_postdata();
    
 }

 echo '</section>';
