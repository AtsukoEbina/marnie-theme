<?php if (is_front_page()) : ?>
    <div id="loading-screen">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/yarn_pink.png" alt="Loading" class="spinner" />
        <p>Loading...</p>
    </div>
<?php endif; ?>

<footer class="site-footer">
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> Marnie. All rights reserved.</p>
    </div>
</footer>
<div id="modal-overlay" class="modal-overlay">
    <div class="modal-content">
        <img src="" alt="拡大画像" id="modal-image">
        <span class="modal-close">&times;</span>
    </div>
</div>

<?php wp_footer(); ?>
</body>

</html>
