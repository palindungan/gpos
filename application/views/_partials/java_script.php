<script src="<?= base_url() ?>assets/template/lib/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/template/lib/jquery/jquery-migrate.min.js"></script>
<script src="<?= base_url() ?>assets/template/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/template/lib/easing/easing.min.js"></script>
<script src="<?= base_url() ?>assets/template/lib/mobile-nav/mobile-nav.js"></script>
<script src="<?= base_url() ?>assets/template/lib/wow/wow.min.js"></script>
<script src="<?= base_url() ?>assets/template/lib/waypoints/waypoints.min.js"></script>
<script src="<?= base_url() ?>assets/template/lib/counterup/counterup.min.js"></script>
<script src="<?= base_url() ?>assets/template/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>assets/template/lib/isotope/isotope.pkgd.min.js"></script>
<script src="<?= base_url() ?>assets/template/lib/lightbox/js/lightbox.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="<?= base_url() ?>assets/template/contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="<?= base_url() ?>assets/template/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',
        // The data for our dataset
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'My First dataset',
                borderColor: 'rgb(255, 99, 132)',
                data: [0, 10, 5, 2, 20, 30, 45]
            }]
        },

        // Configuration options go here
        options: {}
    });
</script>