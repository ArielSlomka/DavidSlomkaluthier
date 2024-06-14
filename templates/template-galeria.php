<?php
/* 
Template Name: Galería
*/
get_header();
?>

<main>
    <div class="ds-container">
        <div id="carousel1" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carousel1" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/imgCardUno.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/instrumentos20.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/Instrumentos2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/instrumentos22.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="ds-container">
        <div id="carousel2" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel2" data-bs-slide-to="2" class="active" aria-current="true" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carousel2" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/instrumentos124.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/instrumentos121.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/tudel4.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/instrumentos22.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</main>
<?php get_footer(); ?>