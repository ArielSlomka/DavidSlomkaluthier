<?php
/* 
Template Name: Acerca
*/
get_header();
$imageAcerca1 = get_field("image_acerca_1");
$imageAcerca2 = get_field("image_acerca_2");
$imageAcerca3 = get_field("image_acerca_3");
$backgroundimageacerca = get_field("background_image_acerca");
$acercaTitle1 = get_field("acerca_title_1");
$acercaTitle2 = get_field("acerca_title_2");
$acercaTitle3 = get_field("acerca_title_3");
$acercaText1 = get_field("acerca_text_1");
$acercaText2 = get_field("acerca_text_2");
$acercaText3 = get_field("acerca_text_3");
$acercaPrincipalTitle = get_field("acerca_principal_title");
?>


<main class="acerca_main">
    <h2 class="acerca-title"><?php echo $acercaPrincipalTitle; ?></h2>
    <div class="container-acerca ds-container">
        <div class="modulo-acerca">
            <div class="modulo-acerca__texto">
                <h3><?php echo $acercaTitle1; ?></h3>
                <p><?php echo $acercaText1; ?></p>
            </div>
            <div class="modulo-acerca__imagen">
                <img src="<?php echo $imageAcerca1; ?>" alt="imagen" class="acerca-image1">
            </div>
        </div>
        <div class="modulo-acerca reverse">
            <div class="modulo-acerca__texto">
                <h3><?php echo $acercaTitle2; ?></h3>
                <p><?php echo $acercaText2; ?></p>
            </div>
            <div class="modulo-acerca__imagen">
                <img src="<?php echo $imageAcerca2; ?>" alt="imagen"  id="image-reverse" class="acerca-image2">
            </div>
        </div>
        <div class="modulo-acerca">
            <div class="modulo-acerca__texto">
                <h3><?php echo $acercaTitle3; ?></h3>
                <p><?php echo $acercaText3; ?></p>
            </div>
            <div class="modulo-acerca__imagen">
                <img src="<?php echo $imageAcerca3; ?>" alt="imagen" class="acerca-image3">
            </div>
        </div>
    
</main>
<?php get_footer(); ?>