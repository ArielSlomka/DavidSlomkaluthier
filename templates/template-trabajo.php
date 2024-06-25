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
?>


<main class="trabajo_main">
    <div class="ds-container">
        <div class="modulo-mi-trabajo">
            <div class="modulo-mi-trabajo__texto">
                <h4>Lorem ipsum dolor sit amet.</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quae similique, temporibus aliquam obcaecati consectetur iste ab ut necessitatibus nulla optio! Deleniti
                    consectetur repellat quod corporis necessitatibus ducimus culpa accusamus sint! Inventore, neque temporibus voluptas nisi sunt itaque aliquid repellat?</p>
            </div>
            <div class="modulo-mi-trabajo__imagen">
                <img src="<?php echo ($imageTrabajo1); ?>" alt="imagen">
            </div>
        </div>
    </div>
    <div class="ds-container">
        <div class="modulo-mi-trabajo">
            <div class="modulo-mi-trabajo__imagen">
                <img src="<?php echo ($imageTrabajo2); ?>" alt="imagen">
            </div>
            <div class="modulo-mi-trabajo__texto">
                <h4>Lorem ipsum dolor sit amet.</h4>
                <p> Comence a acercarme a la música a los 14 años, con mi primer flauta, la cual me llego de regalo.
                    Con mi primer profesor de flauta, aprendí a limpiar, desarmar y hacer pequeñas correcciones y ajustes a mi instrumento.
                    Años mas tarde, en mi adolescencia construí con amigos una guitarra eléctrica.</p>
            </div>
        </div>
    </div>
    <div class="ds-container">
        <div class="modulo-mi-trabajo">
            <div class="modulo-mi-trabajo__texto">
                <h4>Lorem ipsum dolor sit amet.</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quae similique, temporibus aliquam obcaecati consectetur iste ab ut necessitatibus nulla optio! Deleniti
                    consectetur repellat quod corporis necessitatibus ducimus culpa accusamus sint! Inventore, neque temporibus voluptas nisi sunt itaque aliquid repellat?</p>
            </div>
            <div class="modulo-mi-trabajo__imagen">
                <img src="<?php echo ($imageTrabajo3); ?>" alt="imagen">
            </div>
        </div>
    </div>
    <div class="ds-container">
        <div class="modulo-mi-trabajo">
            <div class="modulo-mi-trabajo__imagen">
                <img src="<?php echo ($imageTrabajo4); ?>" alt="imagen">
            </div>
            <div class="modulo-mi-trabajo__texto">
                <h4>Lorem ipsum dolor sit amet.</h4>
                <p> Comence a acercarme a la música a los 14 años, con mi primer flauta, la cual me llego de regalo.
                    Con mi primer profesor de flauta, aprendí a limpiar, desarmar y hacer pequeñas correcciones y ajustes a mi instrumento.
                    Años mas tarde, en mi adolescencia construí con amigos una guitarra eléctrica.</p>
            </div>
        </div>
    </div>
    <div class="ds-container">
        <div class="modulo-mi-trabajo">
            <div class="modulo-mi-trabajo__texto">
                <h4>Lorem ipsum dolor sit amet.</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quae similique, temporibus aliquam obcaecati consectetur iste ab ut necessitatibus nulla optio! Deleniti
                    consectetur repellat quod corporis necessitatibus ducimus culpa accusamus sint! Inventore, neque temporibus voluptas nisi sunt itaque aliquid repellat?</p>
            </div>
            <div class="modulo-mi-trabajo__imagen">
                <img src="<?php echo ($imageTrabajo5); ?>" alt="imagen">
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>