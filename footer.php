<footer id="footer">
  <section>
    <div class="">
      <?php the_field( 'footer_email_form_short_code', 'options' ); ?>
    </div>
  </section>
  <section class="split contact">
    <section class="alt">
      <h3>Address</h3>
      <p><?php the_field( 'business_address', 'options' ); ?></p>
    </section>
    <section>
      <h3>Phone</h3>
      <p><a href="tel:<?php the_field( 'phone_number', 'options' ); ?>"><?php the_field( 'phone_number', 'options' ); ?></a></p>
    </section>
    <section>
      <h3>Email</h3>
      <p><a href="mailto:<?php the_field( 'email', 'options' ); ?>"><?php the_field( 'email', 'options' ); ?></a></p>
    </section>
    <section>
      <h3>Social</h3>
      <ul class="icons alt">
        <!-- twitter -->
        <?php $twitter = get_field('twitter', 'options');
          if( $twitter ): ?>
            <li><a href="<?php the_field('twitter', 'options'); ?>" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
        <?php endif; ?>
        <!-- Facebook -->
        <?php $facebook = get_field('facebook', 'options');
          if( $facebook ): ?>
            <li><a href="<?php the_field('facebook', 'options'); ?>" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
        <?php endif; ?>
        <!-- Instagram -->
        <?php $instagram = get_field('instagram', 'options');
          if( $instagram ): ?>
            <li><a href="<?php the_field('instagram', 'options'); ?>" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
        <?php endif; ?>
        <!-- github -->
        <?php $github = get_field('github', 'options');
          if( $github ): ?>
            <li><a href="<?php the_field('github', 'options'); ?>" class="icon fa-github"><span class="label">github</span></a></li>
        <?php endif; ?>
      </ul>
    </section>
  </section>
</footer>

<!-- Copyright -->
<div id="copyright">
  <ul><li>&copy; Kortbeek Creative</li><li>Design by Psycology: <a href="http://kortbeekcreative.com/">Kortbeek Creative</a></li></ul>
</div>
<?php wp_footer(); ?>
</body>

</html>
