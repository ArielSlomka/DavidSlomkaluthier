<?php
/* 
Template Name: Index
*/
$imageIndex1 = get_field("image_index_1");
$imageIndex2 = get_field("image_index_2");
$imageIndex3 = get_field("image_index_3");
$indexTitle = get_field("index_title");
$reparacionesTitle = get_field("reparaciones_title");
$reparacionesText = get_field("reparaciones_text");
$construccionTitle = get_field("construccion_title");
$construccionText = get_field("construccion_text");
$cursosTitle = get_field("cursos_title");
$cursosText = get_field("cursos_text");
get_header();
?>

<header class="header">
    <div class="header__container">
        <div class="header__titulos">
            <h1 class="header__titulo">David Slomka <span class="header__subtitulo">luthier</span></h1>
        </div>
    </div>
</header>
<main class="index_main">
    <div class="container-index">
        <h2 class="titulo-modulo-card"><?php echo $indexTitle; ?></h2>
        <div class="cards-container">
            <div class="card">
                <div class="card__image">
                    <img src="<?php echo $imageIndex1; ?>" alt="Imagen 1">
                </div>
                <div class="card__descripcion">
                    <h3><?php echo $reparacionesTitle; ?></h3>
                    <p><?php echo $reparacionesText; ?></p>
                </div>
            </div>
            <div class="card">
                <div class="card__image">
                    <img src="<?php echo $imageIndex2; ?>" alt="Imagen 2">
                </div>
                <div class="card__descripcion">
                    <h3><?php echo $construccionTitle; ?></h3>
                    <p><?php echo $construccionText; ?></p>
                </div>
            </div>
            <div class="card">
                <div class="card__image">
                    <img src="<?php echo $imageIndex3; ?>" alt="Imagen 3">
                </div>
                <div class="card__descripcion">
                    <h3><?php echo $cursosTitle; ?></h3>
                    <p><?php echo $cursosText; ?></p>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>