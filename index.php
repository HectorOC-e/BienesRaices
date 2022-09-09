<?php
require 'includes/funciones.php';

incluirTemplate( 'header', $inicio = true);

?>

<main class="contenedor seccion">
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
</main>

<section class="seccion contenedor">
    <h2>Casas y Departamentos en Venta</h2>
    <div class="contenedor-anuncios">
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio1.webp" type="image/webp">
                <source srcset="build/img/anuncio1.jpg" type="image/jpg">
                <img loading="lazy" src="build/img/anuncio1.jpg" alt="Anuncio">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa de lujo en el lago</h3>
                <p>Casa en lago con excelente vista, con acabados de lujo a excelente Precio</p>
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
                <a href="anuncio.php" class="boton-amarillo-block">Ver propiedad</a>
            </div> <!-- Contenido anuncio-->
        </div> <!-- Cierre Anuncio-->
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio2.webp" type="image/webp">
                <source srcset="build/img/anuncio2.jpg" type="image/jpg">
                <img loading="lazy" src="build/img/anuncio2.jpg" alt="Anuncio">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa terminados de lujo</h3>
                <p>Casa en lago con excelente vista, con acabados de lujo a excelente Precio</p>
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
                <a href="anuncio.php" class="boton-amarillo-block">Ver propiedad</a>
            </div> <!-- Contenido anuncio-->
        </div> <!-- Cierre Anuncio-->
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio3.webp" type="image/webp">
                <source srcset="build/img/anuncio3.jpg" type="image/jpg">
                <img loading="lazy" src="build/img/anuncio3.jpg" alt="Anuncio">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa con alberca</h3>
                <p>Casa en lago con excelente vista, con acabados de lujo a excelente Precio</p>
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
                <a href="anuncio.php" class="boton-amarillo-block">Ver propiedad</a>
            </div> <!-- Contenido anuncio-->
        </div> <!-- Cierre Anuncio-->
    </div> <!-- Cierre Anuncios-->

    <div class="alinear-derecha">
        <a href="anuncios.php" class="boton-verde">Ver Todas</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
    <a href="contacto.php" class="boton-amarillo">Contáctenos</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="informacion-meta">Escrito el: <span> 20/08/2022</span> Por: <span>Admin</span></p>

                    <p>Consejos para construir la terraza en el techo de tu casa con los mejores materiales y
                        ahorrando dinero</p>
                </a>
            </div>
        </article> <!-- Cierre articulo-->
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guía para la decoración de tu hogar en el techo de tu casa</h4>
                    <p class="informacion-meta">Escrito el: <span> 20/08/2022</span> Por: <span>Admin</span></p>

                    <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para
                        darle vida a tu espacio</p>
                </a>
            </div>
        </article> <!-- Cierre articulo-->
    </section> <!-- Cierre seccion de blog-->

    <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
            <blockquote>
                El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron
                cumple con todas mis expectativas.
            </blockquote>
            <p>- Hector Osorio</p>
        </div>
    </section>

</div>

<?php
incluirTemplate( 'footer' );
?>