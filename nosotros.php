<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="bulid/img/nosotros.jpg" type="image/jpeg">
                    <img src="build/img/nosotros.jpg" alt="Sobre Nosotros" loading="lazy">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>25 años de experiencia</blockquote>

                <p>Nullam non semper enim. Sed luctus, libero eu finibus porttitor, sapien neque interdum mauris, pretium faucibus velit dolor id leo. Praesent in mollis libero, et blandit neque. In turpis lacus, pulvinar ut nulla eu, euismod mattis lorem. Nullam pellentesque, felis vel venenatis eleifend, ligula ligula ullamcorper lectus, non sollicitudin nulla felis in metus. In hac habitasse platea dictumst. Sed id laoreet velit, quis suscipit diam. Sed sagittis, ligula id gravida finibus, tellus neque bibendum odio, ut egestas turpis erat sit amet felis. Morbi id egestas nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet enim id turpis sollicitudin luctus. Nam sollicitudin nibh vel leo sodales faucibus. Proin et arcu mattis diam tristique condimentum eget vitae turpis. Donec at libero fringilla turpis finibus convallis.</p>

                <p>Mauris magna dolor, consectetur eget sodales vitae, auctor quis augue. Aliquam sit amet neque eu lacus volutpat sagittis eu in mauris. Cras iaculis gravida sapien fringilla semper. Aenean risus turpis, feugiat ac augue vel, molestie sodales libero. Nullam dui ligula, malesuada sit amet ornare sit amet, convallis a velit. Nulla at erat sed lacus porta bibendum.</p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1 class="espacio">Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Eveniet esse non delectus unde earum molestias minus mollitia, obcaecati sint tenetur sed laboriosam sapiente.</p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Eveniet esse non delectus unde earum molestias minus mollitia, obcaecati sint tenetur sed laboriosam sapiente.</p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Eveniet esse non delectus unde earum molestias minus mollitia, obcaecati sint tenetur sed laboriosam sapiente.</p>
            </div>
        </div>
    </section>

<?php 
    incluirTemplate('footer');
?>