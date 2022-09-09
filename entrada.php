<?php
require 'includes/funciones.php';
incluirTemplate( 'header' );
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Guía para la decoración de tu hogar</h1>


    <picture>
        <source srcset="build/img/destacada2.webp" type="image/webp">
        <source srcset="build/img/destacada2.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen de la propiedad">
    </picture>

    <p class="informacion-meta">Escrito el: <span>20/08/2022</span> por: <span>Admin</span></p>

    <div class="resumen-propiedad">

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