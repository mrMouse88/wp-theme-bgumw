<?php $year = new DateTime();?>
<?php wp_footer(); ?>
<footer class="bg-footer">
    <div id="bg-footer-menu">
        <?php wp_nav_menu(array('theme_location' => 'footer-menu')) ?>
    </div>
    <div id="bg-footer-copyrights" class="row p-0 m-0 pt-3">
        <div class="bg-footer-copyrights-text col-4">&copy; <?php echo $year->format("Y"); ?> <a href="<?php echo get_site_url(); ?>">
                Biblioteka Główna Uniwersytetu Medycznego we Wrocławiu</a></div>
        <div class="col-4"><a href="http://www.umed.wroc.pl"><img src="<?php echo get_template_directory_uri(); ?>/gfx/umw.png" /></a></div>
        <div class="bg-footer-copyrights-text col-4">Realizacja: <a href="mailto:it@asygnata.com">Michał Olczyk</a></div>
    </div>
    
</footer>

</body>
</html>