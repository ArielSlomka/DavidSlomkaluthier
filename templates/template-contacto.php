<?php
/* 
Template Name: Contacto
*/
get_header();
$imageContacto = get_field("image_contacto");
$contactoTitle = get_field("contacto_title");
?>

<header class="header" id="contacto-header">
    <div class="header__container">
        <div class="header__titulos">
            <h1 class="contacto_title" id="titulo-contacto"><?php echo $contactoTitle?></h1>
        </div>
    </div>
</header>
<main class="contacto-main">
    <div class="ds-container container-contacto">
        <?php echo do_shortcode('[contact-form-7 id="a5e6f20" title="Contact form 1"]'); ?>
    </div>
</main>
<?php get_footer(); ?>