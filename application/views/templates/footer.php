
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.js')?>"></script>
<script src="<?php echo base_url('assets/jquery/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js')?>"></script>
<script src="<?php echo base_url('assets/jquery/jquery.magnific-popup.js')?>" type="text/javascript"></script>

<!-- pop-up-box -->
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',
      fixedContentPos: false,
      fixedBgPos: true,
      overflowY: 'auto',
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });
  });
</script>
<!-- pop-up-box -->

</body>
</html>