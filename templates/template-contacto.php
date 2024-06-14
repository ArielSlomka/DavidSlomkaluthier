<?php
/* 
Template Name: Contacto
*/
get_header();
?>

<main>
    <div class="ds-container">
        <h1>Contáctame</h1>
        <form action="#" method="POST" class="formulario-contacto">
            <div class="campo">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="campo">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="campo">
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
</main>
<?php get_footer(); ?>