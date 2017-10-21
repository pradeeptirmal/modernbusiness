<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Modern_Business
 */

get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title"><?php esc_html_e( 'This Page Does Not Exist', 'modbus' ); ?></h1>
                <h4><?php esc_html_e( 'We\'re sorry, but it appears the website address you entered was incorrect', 'modbus' ); ?></h4>
                <p><?php esc_html_e( 'Maybe try one of the links below or a search?', 'modbus' ); ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center">
                <?php get_search_form(); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
            </div>

            <div class="col-6">
                <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'modbus' ); ?></h2>
                <ul>
                    <?php
                    wp_list_categories( array(
                        'orderby'    => 'count',
                        'order'      => 'DESC',
                        'show_count' => 1,
                        'title_li'   => '',
                        'number'     => 10,
                    ) );
                    ?>
                </ul>
            </div>
        </div>
    </div>
<?php get_footer(); ?>