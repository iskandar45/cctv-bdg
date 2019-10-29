<!-- footer -->
<footer id="footer" class="page-footer blue darken-4">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">
          <img src="img/other/store_logo.png" height="50px" alt="logo" />
        </h5>
        <p class="grey-text text-lighten-4">
          CCTV Bandung Surveillance System <br />
          <i class="material-icons md-light">home_work</i> Jl. xxxxx No.
          0012 Bandung - Bandung - Jawa Barat <br>
          <i class="material-icons md-light">call</i> <a class="white-text" target="_blank" href="https://wa.me/6281546968400?text=Halo%20saya%20tertarik%20untuk%20Instalasi%20CCTV%20di%20https://pasangcctvbdg.com/"> (+62) 823 1234 3211</a> <br>
          <i class="material-icons md-light">email</i> cctvbdg@mail.com
        </p>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      © <?= date('Y') ?> Copyright
      <a href="index.html" class="blue-text accent-1">Pasang CCTV Bandung</a>
      | All Right Reserved
      <!-- <a class="grey-text text-lighten-4 right" href="#!"></a> -->
    </div>
  </div>
</footer>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
  const sideNav = document.querySelectorAll(".sidenav");
  M.Sidenav.init(sideNav);

  const slider = document.querySelectorAll(".slider");
  M.Slider.init(slider, {
    indicators: false,
    height: 500,
    transition: 600,
    interval: 3000
  });

  const parallax = document.querySelectorAll(".parallax");
  M.Parallax.init(parallax);
</script>
</body>

</html>