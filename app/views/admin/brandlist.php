<?php
include __DIR__ . '/./inc/header.php';
include __DIR__ . '/./inc/sidebar.php';
$result = isset($data['brand']) ? $data['brand'] : [''];
?>


<!-- End::app-sidebar -->
<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Brand List</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Brand List</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header Close -->
        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">Brand List</div>
                    </div>
                    <div class="card-body">
                        <table id="file-export" class="table table-bordered text-nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>brand</th>
                                    <th>Category</th>
                                    <th>Published</th>
                                    <th>Created Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($result) {
                                    while ($c_data = $result->fetch_assoc()) {
                                ?>

                                        <tr>
                                            <td>
                                                <?php echo $c_data['CateID'] ?>
                                            </td>
                                            <td>
                                                <img width="50px" src="<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $c_data['Image'] ?>" alt="">
                                            </td>
                                            <td>
                                                <span class=" text-default"><?php echo   $c_data['Name'] ?></span>
                                            </td>
                                            <td>
                                                <span class=" text-default"><?php echo   $c_data['CateID'] ?></span>
                                            </td>


                                            <td>
                                                <?php
                                                if ($c_data['Status'] == '1') {
                                                ?>
                                                    <span class="badge bg-success text-light">Published</span>

                                                <?php
                                                } else {
                                                ?>
                                                    <span class="badge bg-danger text-light">UnPublished</span>

                                                <?php
                                                }
                                                ?>
                                            </td>

                                            <td>
                                                <span class=""><?php echo $c_data['CreatedDate'] ?></span>

                                            </td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a href="<?php echo ASSETS_URL_ROOT . '/admin/updatebrand' . '?id=' . $c_data['CateID'] ?>" class="btn btn-icon btn-sm btn-info-light"><i class="ri-edit-line"></i></a>
                                                    <a onclick="return confirm('Are you sure about that?')" href="<?php echo ASSETS_URL_ROOT . '/admin/delbrand' . '?delid=' . $c_data['BrandID'] ?>" class="btn btn-icon btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--End::row-1 -->
        <!-- Start:: row-2 -->

        <!-- End:: row-3 -->
        <!-- Start:: row-4 -->

        <!-- End:: row-4 -->
        <!-- Start:: row-5 -->

        <!-- End:: row-7 -->
        <!-- Start:: row-8 -->

        <!-- Footer Start -->
        <footer class="footer mt-auto py-3 bg-white text-center">
            <div class="container"> <span class="text-muted"> Copyright © <span id="year"></span> <a href="javascript:void(0);" class="text-dark fw-semibold">Ynex</a>. Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);"> <span class="fw-semibold text-primary text-decoration-underline">Spruko</span> </a> All
                    rights
                    reserved </span>
            </div>
        </footer>
        <!-- Footer End -->
    </div>
    <div class="scrollToTop"> <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span> </div>
    <div id="responsive-overlay"></div>

    <!-- Popper JS -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/@popperjs/core/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Defaultmenu JS -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/defaultmenu.min.js"></script>
    <!-- Node Waves JS-->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/node-waves/waves.min.js"></script>
    <!-- Sticky JS -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/sticky.js"></script>
    <!-- Simplebar JS -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/simplebar.js"></script>
    <!-- Color Picker JS -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>
    <!-- Custom-Switcher JS -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/custom-switcher.min.js"></script>
    <!-- Jquery Cdn -->
    <!-- table data -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- Datatables Cdn -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.6/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

    <!-- Internal Datatables JS -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/datatables.js"></script>
    <!-- Custom JS -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/custom.js"></script>

    </body>

    </html>