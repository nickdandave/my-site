<section id="contact" class="contact">

</section>
<section class="colophon">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center vp-xs-top-1 vp-xs-bottom-1">
                <?php $now = new DateTime("now", new DateTimeZone("UTC")); ?>
                <p>&copy; Nick Davidson <?php echo $now->format("Y"); ?></p>
            </div>
        </div>
    </div>
</section>
<script>
    [
      '//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js',
      '/assets/dist/js/script.min.js'
    ].forEach(function(src) {
      var script = document.createElement('script');
      script.src = src;
      script.async = false;
      document.body.appendChild(script);
    });
</script>
