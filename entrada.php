<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img src="build/img/destacada2.jpg" alt="Imagen de la propiedad" loading="lazy">
        </picture>

        <p class="informacion-meta">Escrito el: <span>26/08/2024</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">
            <p>Nullam non semper enim. Sed luctus, libero eu finibus porttitor, sapien neque interdum mauris, pretium faucibus velit dolor id leo. Praesent in mollis libero, et blandit neque. In turpis lacus, pulvinar ut nulla eu, euismod mattis lorem. Nullam pellentesque, felis vel venenatis eleifend, ligula ligula ullamcorper lectus, non sollicitudin nulla felis in metus. In hac habitasse platea dictumst. Sed id laoreet velit, quis suscipit diam. Sed sagittis, ligula id gravida finibus, tellus neque bibendum odio, ut egestas turpis erat sit amet felis. Morbi id egestas nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet enim id turpis sollicitudin luctus. Nam sollicitudin nibh vel leo sodales faucibus. Proin et arcu mattis diam tristique condimentum eget vitae turpis. Donec at libero fringilla turpis finibus convallis.</p>

            <p>Mauris magna dolor, consectetur eget sodales vitae, auctor quis augue. Aliquam sit amet neque eu lacus volutpat sagittis eu in mauris. Cras iaculis gravida sapien fringilla semper. Aenean risus turpis, feugiat ac augue vel, molestie sodales libero. Nullam dui ligula, malesuada sit amet ornare sit amet, convallis a velit. Nulla at erat sed lacus porta bibendum.</p>
        </div>
    </main>

<?php 
    incluirTemplate('footer');
?>