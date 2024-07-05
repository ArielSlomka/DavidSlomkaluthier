<?php
/* 
Template Name: Trabajo
*/
get_header();
$imageTrabajo1 = get_field("image_trabajo_1");
$imageTrabajo2 = get_field("image_trabajo_2");
$imageTrabajo3 = get_field("image_trabajo_3");
$imageTrabajo4 = get_field("image_trabajo_4");
$imageTrabajo5 = get_field("image_trabajo_5");
$trabajoTitle1 = get_field("trabajo_title_1");
$trabajoTitle2 = get_field("trabajo_title_2");
$trabajoTitle3 = get_field("trabajo_title_3");
$trabajoTitle4 = get_field("trabajo_title_4");
$trabajoTitle5 = get_field("trabajo_title_5");
$trabajoText1 = get_field("trabajo_text_1");
$trabajoText2 = get_field("trabajo_text_2");
$trabajoText3 = get_field("trabajo_text_3");
$trabajoText4 = get_field("trabajo_text_4");
$trabajoText5 = get_field("trabajo_text_5");
$trabajoPrincipalTitle = get_field("trabajo_principal_title");
?>


<main class="trabajo_main">
    <h2><?php echo $trabajoPrincipalTitle ?></h2>
    <div class="ds-container container-trabajo">
        <div class="modulo-mi-trabajo reverse">
            <div class="modulo-mi-trabajo__texto">
                <h3><?php echo $trabajoTitle1 ?></h3>
                <p><?php echo $trabajoText1 ?></p>
            </div>
            <div class="modulo-mi-trabajo__imagen">
                <img src="<?php echo $imageTrabajo1; ?>" alt="imagen">
            </div>
        </div>
        <div class="modulo-mi-trabajo">
            <div class="modulo-mi-trabajo__imagen">
                <img src="<?php echo $imageTrabajo2; ?>" alt="imagen">
            </div>
            <div class="modulo-mi-trabajo__texto">
                <h3><?php echo $trabajoTitle2; ?></h3>
                <p><?php echo $trabajoText2; ?></p>
            </div>
        </div>
        <div class="modulo-mi-trabajo reverse">
            <div class="modulo-mi-trabajo__texto">
                <h3><?php echo $trabajoTitle3; ?></h3>
                <p><?php echo $trabajoText3; ?></p>
            </div>
            <div class="modulo-mi-trabajo__imagen">
                <img src="<?php echo $imageTrabajo3; ?>" alt="imagen">
            </div>
        </div>
        <div class="modulo-mi-trabajo">
            <div class="modulo-mi-trabajo__imagen">
                <img src="<?php echo $imageTrabajo4; ?>" alt="imagen">
            </div>
            <div class="modulo-mi-trabajo__texto">
                <h3><?php echo $trabajoTitle4; ?></h3>
                <p><?php echo $trabajoText4; ?></p>
            </div>
        </div>
        <div class="modulo-mi-trabajo reverse">
            <div class="modulo-mi-trabajo__texto">
                <h3><?php echo $trabajoTitle5; ?></h3>
                <p><?php echo $trabajoText5; ?></p>
            </div>
            <div class="modulo-mi-trabajo__imagen">
                <img src="<?php echo $imageTrabajo5; ?>" alt="imagen">
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>