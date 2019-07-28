<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Head -->
    <?php $this->load->view("_partials/head.php") ?>
    <!-- End of Head -->

</head>

<body>
    <!-- Header -->
    <?php $this->load->view("_partials/header.php") ?>
    <!-- End of Header -->

    <!-- Intro -->
    <?php

    if ($this->uri->segment('2') == 'home') {
        $this->load->view("_partials/intro.php");
    }

    ?>
    <!-- End of Intro -->

    <main id="main">

        <!-- Content -->
        <?php echo $contents; ?>
        <!-- End of Content -->

    </main>

    <!-- Footer -->
    <?php $this->load->view("_partials/footer.php") ?>
    <!-- End of Footer -->

    <!-- back to top button -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- End of back to top button -->

    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- JavaScript Libraries -->
    <?php $this->load->view("_partials/java_script.php") ?>
    <!-- End of JavaScript Libraries -->

</body>

</html>