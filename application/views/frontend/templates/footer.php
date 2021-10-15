<!-- ======= Footer ======= -->
<footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 mb-md-0">
          <h3>About SIPUDAK</h3>
          <p>SIPUDAK merupakan sebuah aplikasi pemetaan tingkat kekerasan terhadap perempuan dan anak di Kabupaten Sambas</p>
          <p class="social">
            <a href="#"><span class="bi bi-twitter"></span></a>
            <a href="#"><span class="bi bi-facebook"></span></a>
            <a href="#"><span class="bi bi-instagram"></span></a>
            <a href="#"><span class="bi bi-linkedin"></span></a>
          </p>
        </div>
        <div class="col-md-7 ms-auto">
          <div class="row site-section pt-0">
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Navigation</h3>
              <ul class="list-unstyled">
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Services</h3>
              <ul class="list-unstyled">
                <li><a href="#">Team</a></li>
                <li><a href="#">Collaboration</a></li>
                <li><a href="#">Todos</a></li>
                <li><a href="#">Events</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Downloads</h3>
              <ul class="list-unstyled">
                <li><a href="#">Get from the App Store</a></li>
                <li><a href="#">Get from the Play Store</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <p class="copyright">&copy; Copyright misbahulms. All Rights Reserved</p>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=SoftLand
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>

    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>assets/frontend/assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url() ?>assets/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/frontend/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url() ?>assets/frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>assets/frontend/assets/js/main.js"></script>
  <script>

	var mymap = L.map('mapid').setView([51.505, -0.09], 13);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(mymap);

	L.marker([51.5, -0.09]).addTo(mymap)
		.bindPopup("<b>Hello world!</b><br />I am a popup.").openPopup();

	L.circle([51.508, -0.11], 500, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("I am a circle.");

	L.polygon([
		[51.509, -0.08],
		[51.503, -0.06],
		[51.51, -0.047]
	]).addTo(mymap).bindPopup("I am a polygon.");


	var popup = L.popup();

	function onMapClick(e) {
		popup
			.setLatLng(e.latlng)
			.setContent("You clicked the map at " + e.latlng.toString())
			.openOn(mymap);
	}

	mymap.on('click', onMapClick);

</script>

</body>

</html>