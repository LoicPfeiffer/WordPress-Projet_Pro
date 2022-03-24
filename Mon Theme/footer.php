</div>
<?php wp_footer() ?>
<footer>
    <?php
    wp_nav_menu(array(
        'theme_location' => 'footer',
        'menu' => 'footer-menu',
        'container_class' => 'custom-menu-class-footer',
    ));
    ?>
</footer>
</body>

</html>
