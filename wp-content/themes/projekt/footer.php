<section id="Footer" class="footer-section">
  <footer class="site-footer">
    <div class="footer-content">
      <p><?php echo esc_html(get_field('footer_text')); ?></p>
      <div class="footer-links">
        <a href="#Home">Home</a>
        <a href="#Section_1">Open World</a>
        <a href="#Section_2">Monster Hunter</a>
        <a href="#Section_3">Story</a>
      </div>
    </div>
  </footer>
</section>

<div class="side-nav">
  <a href="#Home" class="dot" data-section="Home" title="Home"></a>
  <a href="#Section_1" class="dot" data-section="Section_1" title="Open world"></a>
  <a href="#Section_2" class="dot" data-section="Section_2" title="Monster hunter"></a>
  <a href="#Section_3" class="dot" data-section="Section_3" title="Story"></a>
  <a href="#Footer" class="dot" data-section="Footer" title="End"></a>
</div>

<?php wp_footer(); ?>
</body>
</html>