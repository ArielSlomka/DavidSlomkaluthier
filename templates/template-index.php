<?php
/* 
Template Name: Index
*/
$imageIndex1 = get_field("image_index_1");
$imageIndex2 = get_field("image_index_2");
$imageIndex3 = get_field("image_index_3");
get_header();
?>


<main class="index_main">
    <div class="container-index">
        <h3 class="titulo-modulo-card">Mi trabajo</h3>
        <div class="cards-container">
            <div class="card">
                <div class="card__image">
                    <img src="<?php echo $imageIndex1; ?>" alt="Imagen 1">
                </div>
                <div class="card__descripcion">
                    <h4>Reparaciones</h4>
                    <p>Hace aproximadamente 34 años comencé a hacer mis primeras reparaciones, al inicio con instrumentos propios, luego de amigos, y hace casi 30 años lo realizo profesionalmente.
                        Reparé todo tipo de instrumentos de viento a lo largo de mi carrera, aunque principalmente trabaje con flautas, saxos y clarinetes.
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card__image">
                    <img src="<?php echo $imageIndex2; ?>" alt="Imagen 2">
                </div>
                <div class="card__descripcion">
                    <h4>Construccion propia</h4>
                    <p>En 1995 comencé a construir mis primeros cabezales de madera para flauta traversa los cuales sigo construyendo hoy en día. Durante casi 20 años, Junto con Miguel Mandrini,
                        construimos flautas traveras enteramente hechas por nosotros. Actualmente construyo cabezales y tudeles de madera.</p>
                </div>
            </div>
            <div class="card">
                <div class="card__image">
                    <img src="<?php echo $imageIndex3; ?>" alt="Imagen 3">
                </div>
                <div class="card__descripcion">
                    <h4>Cursos</h4>
                    <p>Desde los inicios de la Asociación Argentina de Luthiers que comence a dar cursos y charlas con diferentes enfoques;
                        todos relacionados con la lutheria y la acústica.
                        Desde el 2019 hasta la actualidad soy docente en la Diplomatura en Lutheria, en la Universidad Nacional de las Artes.</p>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>