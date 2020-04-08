<?php
function html_head(){ ?>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    }

    function html_link_css($link){ ?>
        <link rel="stylesheet" href="<?php echo $link;?>_tema/adminlte/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="<?php echo $link;?>_tema/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <link rel="stylesheet" href="<?php echo $link;?>_tema/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $link;?>_tema/adminlte/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="<?php echo $link;?>_tema/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <link rel="stylesheet" href="<?php echo $link;?>_tema/adminlte/plugins/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" href="<?php echo $link;?>_tema/adminlte/plugins/summernote/summernote-bs4.css">
        <link rel="stylesheet" href="<?php echo $link;?>_tema/adminlte/plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="<?php echo $link;?>_tema/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
        <link rel="stylesheet" href="<?php echo $link;?>_tema/adminlte/plugins/datepicker/css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="<?php echo $link;?>_tema/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="<?php echo $link;?>_tema/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="<?php echo $link;?>_tema/adminlte/plugins/sweetalert2/sweetalert2.min.css">
    <?php
    }
    function html_link_js($link){ ?>
        <script src="<?php echo $link;?>_tema/adminlte/plugins/jquery/jquery.min.js"></script>
        <script src="<?php echo $link;?>_tema/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <script src="<?php echo $link;?>_tema/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo $link;?>_tema/adminlte/plugins/chart.js/Chart.min.js"></script>
        <script src="<?php echo $link;?>_tema/adminlte/plugins/sparklines/sparkline.js"></script>
        <script src="<?php echo $link;?>_tema/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
        <script src="<?php echo $link;?>_tema/adminlte/plugins/moment/moment.min.js"></script>
        <script src="<?php echo $link;?>_tema/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
        <script src="<?php echo $link;?>_tema/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="<?php echo $link;?>_tema/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
        <script src="<?php echo $link;?>_tema/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <script src="<?php echo $link;?>_tema/adminlte/dist/js/adminlte.js"></script>
        <script src="<?php echo $link;?>_tema/adminlte/dist/js/pages/dashboard.js"></script>
        <script src="<?php echo $link;?>_tema/adminlte/dist/js/demo.js"></script>
        <script src="<?php echo $link;?>_tema/adminlte/plugins/select2/js/select2.full.min.js"></script>
        <script src="<?php echo $link;?>_tema/adminlte/plugins/datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="<?php echo $link;?>_tema/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo $link;?>_tema/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?php echo $link;?>_tema/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo $link;?>_tema/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="<?php echo $link;?>_tema/adminlte/plugins/chart.js/Chart.min.js"></script>
        <script src="<?php echo $link;?>_tema/adminlte/plugins/sweetalert2/sweetalert2.min.js"></script>
    <?php
    }

    function html_body_nav(){ ?>
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-lock"></i> Log Out
                </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
    <?php
    }

    function html_body_sidebar_open(){ ?>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <?php
    }
    function html_body_sidebar_close(){ ?>
        </aside>
        </div>
        <!-- /.sidebar div open pada sidebar akun -->
    <?php
    }

    function sidebar_akun($link='#',$nama_aplikasi='CRUD', $nama_pengguna='Pengguna'){?>
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
        <img src="<?php echo $link;?>_tema/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light"><?php echo $nama_aplikasi;?></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="<?php echo $link;?>_tema/adminlte/dist/img/prod-1.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="#" class="d-block"><?php echo $nama_pengguna;?></a>
            </div>
        </div>
        <?php
    }

    function sidebar_menu_open(){?>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">              
    <?php
    }
    
    function sidebar_menu_close(){?>
            </ul>
        </nav>
    <?php
    }
    
    function menu_item_head($keterangan='MENU GROUP HEAD'){?>
        <li class="nav-header"><?php echo $keterangan;?></li>
    <?php
    }
    
    function menu_item_single($teks='Menu Single', $link='#', $icon='fas fa-bars'){?>
        <li class="nav-item">
                <a href="<?php echo $link;?>" class="nav-link">
                <i class="nav-icon <?php echo $icon;?>"></i>
                <p>
                    <?php echo $teks;?>
                </p>
            </a>
        </li>
    <?php
    }
    function menu_tree_open($teks='Menu Tree',$icon='fas fa-bars'){?>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon <?php echo $icon;?>"></i>
            <p>
                <?php echo $teks;?>
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
    <?php
    }
    function menu_tree_close(){?>
            </ul>
        </li>
    <?php
    }
    function menu_tree_item($teks='Menu Tree Item', $link='#',$icon='far fa-circle'){?>
        <li class="nav-item">
            <a href="<?php echo $link;?>" class="nav-link">
            <i class="<?php echo $icon;?> nav-icon"></i>
            <p><?php echo $teks;?></p>
            </a>
        </li>
    <?php
    }
    function html_body_content_open($judul_halaman='Judul Halaman'){?>
        <section class="content">  
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-md-12">
                        <h1><?php echo $judul_halaman;?></h1>
                    </div>
                </div>
            </div>
        <div class="container-fluid">
    <?php
    }

    function html_body_content_close(){?>
            </div>
        </section>
    <?php
    }
?>