<?php
/* 
Template Name: Contacto
*/
get_header();
$imageContacto = get_field("image_contacto");
?>

<main class="contacto_main" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url(<?php echo $imageContacto;?>);
    background-size: cover;
    background-position: center;">
    <div class="ds-container">
        <h1 id="titulo-contacto">Contáctame</h1>
        <?php echo do_shortcode('[contact-form-7 id="a5e6f20" title="Contact form 1"]'); ?>
    </div>
</main>
<?php get_footer(); ?>