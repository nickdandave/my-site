<div class="bg-img bg-overlay" style="background-image: url('/assets/dist/img/overlooking-signal-mountain.jpg');"></div>
<section class="contact vp-xs-top-6 vp-xs-bottom-6">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 vp-xs-bottom-3">
                <h3>Want to know more?</h3>
            </div>
            <div class="col-xs-12 col-sm-4">
                <h4 class="vp-xs-bottom-1">Drop me a line.</h4>
                <p>
                    <a href="mailto:nick.dan.davidson@gmail.com" class="inline-link">nick.dan.davidson@gmail.com</a>
                </p>
            </div>
            <div class="col-xs-12 col-sm-4 vp-xs-top-3 vp-sm-top-0">
                <h4 class="vp-xs-bottom-1">Or give me a call.</h4>
                <p>
                    <a href="tel:7316086326" class="inline-link">731.608.6326</a>
                </p>
            </div>
            <div class=" contact__links col-xs-12 col-sm-4 vp-xs-top-3 vp-sm-top-0">
                <a href="https://www.linkedin.com/in/nickdandavidson" target="_blank" class="contact__linkedin">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a href="https://github.com/NickDanDavidson" target="_blank" class="contact__github">
                    <i class="fa fa-github"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="colophon">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 vp-xs-top-1 vp-xs-bottom-1">
                <?php $now = new DateTime("now", new DateTimeZone("UTC")); ?>
                <p class="mb-0">&copy; Nick Davidson <?php echo $now->format("Y"); ?></p>
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
