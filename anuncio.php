<?php
require 'includes/funciones.php';
incluirTemplate( 'header' );
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Casa en Venta Frente al Bosque</h1>

    <picture>
        <source srcset="build/img/destacada.webp" type="image/webp">
        <source srcset="build/img/destacada.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad">
    </picture>

    <div class="resumen-propiedad">
        <p class="precio">$3,000,000</p>
        <ul class="iconos-caracteristicas">
            <li>
                <img loading="lazy" class="icono" src="build/img/icono_wc.svg" alt="Icono Baño" srcset="">
                <p>3</p>
            </li>
            <li>
                <img loading="lazy" class="icono" src="build/img/icono_estacionamiento.svg" alt="Icono Estacionamiento" srcset="">
                <p>3</p>
            </li>
            <li>
                <img loading="lazy" class="icono" src="build/img/icono_dormitorio.svg" alt="Icono Habitaciones" srcset="">
                <p>4</p>
            </li>
        </ul>
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
</main>

<?php
incluirTemplate( 'footer' );
?>