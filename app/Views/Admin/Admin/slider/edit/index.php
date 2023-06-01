<!DOCTYPE html>
<html lang="tr">

<?php echo view("Admin/Admin/includes/head"); ?>



<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php echo view("Admin/Admin/includes/header"); ?>



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-10">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Slider Düzenle</h4>
                            </div>
                        </div>
                        <div class="col-2 text-end">
                        <a href="<?php echo base_url("admin/slider"); ?>" class="btn btn-outline-danger">Geri Git</a>
                        </div>
                    </div>
                    <hr>
                    <!-- end page title -->
                    <form action="<?php echo base_url("admin/slider/update/{$ID}");?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-6">
                                <h4>Slider Başlığı</h4>
                                <textarea name="header" id="slider-header">
                                    <?php echo $header;?>
                                </textarea>
                            </div>
                            <div class="col-6">
                                <h4>Slider Metini</h4>
                                <textarea name="text" id="slider-text">
                                    <?php echo $text;?>
                                </textarea>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12">
                                <h4>Slider Resimi</h4>
                                <input type="file" class="form-control" name="image" id="slider-image" accept="image/*">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <input type="submit" value="Kaydet" class="btn btn-primary">
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END layout-wrapper -->

    <!-- JAVASCRIPT -->
    <?php echo view("Admin/Admin/includes/scripts"); ?>
    <script src="https://cdn.tiny.cloud/1/fnh4xrw3sn7siw2hoygfahxwpj3un7unzwj1dvvda583d37f/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
            toolbar_mode: 'floating',
            language: "tr"
        });
    </script>
</body>


</html>
<!DOCTYPE html>