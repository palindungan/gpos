<!DOCTYPE html>
<html lang="en">

<head>
    <!-- header -->
    <?php $this->load->view("_partials_backend/head.php") ?>
    <!-- end header -->

</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view("_partials_backend/sidebar.php") ?>

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php $this->load->view("_partials_backend/topbar.php") ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <?php echo $contents; ?>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view("_partials_backend/footer.php") ?>

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <?php $this->load->view("_partials_backend/modal_logout.php") ?>


    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view("_partials_backend/javascript.php") ?>


</body>

</html>