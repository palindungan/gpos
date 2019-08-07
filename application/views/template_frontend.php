<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Head -->
    <?php $this->load->view("_partials_frontend/head.php") ?>
    <!-- End of Head -->

</head>

<?php
if ($this->uri->segment('1') == 'home') {
    echo '<body>';
} else {
    echo '<body class="body-custom">';
}
?>
<!-- Header -->

<?php $this->load->view("_partials_frontend/header.php") ?>
<!-- End of Header -->

<!-- Intro -->
<?php

if ($this->uri->segment('1') == 'home') {
    $this->load->view("_partials_frontend/intro.php");
}

?>
<!-- End of Intro -->

<main id="main">

    <!-- Content -->
    <?php echo $contents; ?>
    <!-- End of Content -->

</main>

<!-- Footer -->
<?php $this->load->view("_partials_frontend/footer.php") ?>
<!-- End of Footer -->

<!-- back to top button -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- End of back to top button -->

<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->

<!-- JavaScript Libraries -->
<?php $this->load->view("_partials_frontend/java_script.php") ?>
<!-- End of JavaScript Libraries -->

</body>

</html>