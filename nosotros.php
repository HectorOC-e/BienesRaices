<?php
require 'includes/funciones.php';
incluirTemplate( 'header' );
?>

<main class="contenedor seccion">
    <h1>Conoce Sobre Nosotros</h1>

    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/nosotros.jpg" alt="Imagen Sobre Nosotros">
            </picture>
        </div>

        <div class="texto-nosotros">
            <blockquote>25 años de experiencia</blockquote>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, harum natus minima ipsum labore
                nostrum repellendus accusantium cumque sed aliquam in alias aliquid ducimus earum quae unde dolores
                veniam eveniet, nemo ullam impedit aut beatae odit debitis! Sint dolorem cupiditate repudiandae
                voluptatum ducimus quod rerum eius. Corrupti id, iste molestiae aut, explicabo nemo saepe, quos unde
                deserunt ad earum esse voluptate alias voluptas officia cupiditate laborum culpa atque consequuntur
                vero! Corporis adipisci, atque ea nostrum tempora rem asperiores quia sunt magnam, sequi fugit?</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis labore commodi minus quasi
                mollitia tempora optio tenetur non atque dignissimos maxime minima officia dolorum beatae illum
                quisquam quis ab obcaecati pariatur consequatur? Culpa vero enim ipsa ullam sequi.</p>
        </div>
    </div>
</main>

<section class="contenedor seccion">
    <h1>Más Sobre Nosotros</h1>
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono Seguridad" lading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem explicabo magnam ea dolorum quas
                consequatur suscipit maiores voluptatum? Excepturi error quas corporis. Odio corrupti quam, ratione
                veniam rem quibusdam amet.</p>
        </div> <!-- Cierre icono-->
        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono Precio" lading="lazy">
            <h3>Precio</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem explicabo magnam ea dolorum quas
                consequatur suscipit maiores voluptatum? Excepturi error quas corporis. Odio corrupti quam, ratione
                veniam rem quibusdam amet.</p>
        </div> <!-- Cierre icono-->
        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono A Tiempo" lading="lazy">
            <h3>A Tiempo</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem explicabo magnam ea dolorum quas
                consequatur suscipit maiores voluptatum? Excepturi error quas corporis. Odio corrupti quam, ratione
                veniam rem quibusdam amet.</p>
        </div> <!-- Cierre icono-->
    </div> <!-- Cierre iconos-->
</section>

<?php
incluirTemplate( 'footer' );
?>