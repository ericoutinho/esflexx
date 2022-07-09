<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage esflexx
 * @since esflexx 1.0
 */

?>
        <footer>
            <div class="container">
                <div class="wraper">
                    <div class="column">ESFlexx &copy; 2018 - <?=date("Y")?> &bullet; Todos os diretos reservados.</div>
                    <div class="column">
                        <img loading="lazy" src="<?=get_template_directory_uri()?>/assets/ESFlexx-logomarca-branca.svg" alt="ESFlexx logomarca">
                    </div>
                </div>
            </div>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>