<?php
/* 
Template Name: Contacto
*/
get_header();
$imageContacto = get_field("image_contacto");
?>

<main class="contacto-main" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url(<?php echo $imageContacto;?>);
    background-size: cover;
    background-position: center;">
    <div class="ds-container container-contacto">
        <h2 id="titulo-contacto">Contáctame</h2>
        <?php echo do_shortcode('[contact-form-7 id="a5e6f20" title="Contact form 1"]'); ?>
    </div>
</main>
<?php get_footer(); ?>