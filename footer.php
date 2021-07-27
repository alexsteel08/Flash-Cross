<footer id="site-footer" role="contentinfo">
    <div class="footer_block wow animate__animated animate__fadeInUp animate__faster">
        <div class="footer-col">
            <?php dynamic_sidebar('footer_menu1'); ?>
        </div>
        <div class="footer-col">
            <?php dynamic_sidebar('footer_menu2'); ?>
        </div>
        <div class="footer-col">
            <?php dynamic_sidebar('footer_menu3'); ?>
        </div>
    </div>
    <?php if( get_field('copyright','option') ): ?>
        <div class="copyright">
            <div class="copyright_text">
                <?php the_field('copyright','option'); ?>
            </div>
        </div>
    <?php endif; ?>

</footer>

<?php wp_footer(); ?>
</div>
<script>
    new WOW().init();
</script>
</body>
</html>
