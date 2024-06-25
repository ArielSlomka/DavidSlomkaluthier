<?php
/* 
Template Name: Acerca
*/
get_header();
$imageAcerca1 = get_field("image_acerca_1");
$imageAcerca2 = get_field("image_acerca_2");
$imageAcerca3 = get_field("image_acerca_3");
$backgroundimageacerca = get_field("background_image_acerca");
?>


<main class="acerca_main" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url(<?php echo $backgroundimageacerca;?>);  background-size: cover;
    background-position: center;">
    <div class="container-acerca ds-container">
        <div class="modulo-acerca">
            <div class="modulo-acerca__texto">
                <h4>Mi acercamiento a la música</h4>
                <p>Comence a acercarme a la música a los 14 años, con mi primer flauta, la cual me llego de regalo.
                    Con mi primer profesor de flauta, aprendí a limpiar, desarmar y hacer pequeñas correcciones y ajustes a mi instrumento.
                    Años mas tarde, en mi adolescencia construí con amigos una guitarra eléctrica.</p>
            </div>
            <div class="modulo-acerca__imagen">
                <img src="<?php echo ($imageAcerca1); ?>" alt="imagen">
            </div>
        </div>
        <div class="modulo-acerca">
            <div class="modulo-acerca__imagen">
                <img src="<?php echo ($imageAcerca2); ?>" alt="imagen">
            </div>
            <div class="modulo-acerca__texto">
                <h4>Mis inicios en la lutheria</h4>
                <p> En el año 1990 empece al principio con mis propios instrumentos, luego con los de algunos amigos musicos, de a poco a dedicarme
                    al oficio de la luthería de manera cada vez más apasionada y sostenida.
                    Aproximadamente en 1995 Comienzo a construir cabezales de madera para flauta traversa y entre 1997-2016 construimos junto a Miguel Mandrini
                    flautas traversas de madera.
                    A finales de 1999 se crea la Asociación Argentina de Luthiers, de la cual fui uno de los miembros fundadores, y entre 2003 a 2005 fui el presidente de la misma.</p>
            </div>
        </div>
        <div class="modulo-acerca">
            <div class="modulo-acerca__texto">
                <h4>Clases y cursos</h4>
                <p>Realizo la especialización en Gestión Cultural, en la UNSAM en el año 2005.
                    Desde los inicios de la Asociación Argentina de Luthiers que comence a dar cursos y charlas con diferentes enfoques;
                    todos relacionados con la lutheria y la acústica.
                    Entre 2019 y el 2022 fui docente en la Diplomatura en Lutheria, en la Universidad Nacional de las Artes.</p>
            </div>
            <div class="modulo-acerca__imagen">
                <img src="<?php echo ($imageAcerca3); ?>" alt="imagen">
            </div>
        </div>
    
</main>
<?php get_footer(); ?>