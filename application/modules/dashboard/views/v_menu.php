<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('username'); ?></span>
                        <img class="img-profile rounded-circle" src="<?= base_url(''); ?>frontend/assets/images/users/<?= $usersl[0]['foto']; ?>">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?= base_url('dashboard/profuser/' . $this->session->userdata('id')); ?>">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?= $breadcumb; ?></h1>
            </div>
            <!-- Content Row -->
            <div class="row">
                <!-- Area Chart -->
                <div class="col-lg-12">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <div class="dropdown no-arrow">
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="x_content">
                                <div id="alert-message">
                                    <div class="center"><strong><?= $this->session->flashdata('message'); ?></strong></div>
                                </div>
                                <a data-toggle="modal" data-target="#addMenu" class="btn btn-success"><i class="fas fa-plus"></i>
                                    &nbsp; Add Menu</a>
                                <br><br>
                                <div class="table-responsive">
                                    <table id="dataTable" class="table table-bordered table-striped table-hover" style="width:100%">
                                        <thead>
                                            <tr class="info">
                                                <th>No</th>
                                                <th>Menu</th>
                                                <th>Content</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php
                                                $i = 1;
                                                foreach ($menu as $menu) {
                                                    $id             = $menu->id_menu;
                                                    $judul          = $menu->menu;
                                                    $content        = $menu->isi_menu; ?>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?= $judul; ?></td>
                                                    <td><?= $content; ?></td>
                                                    <td>
                                                        <a data-toggle="modal" href="#edit<?= $menu->id_menu ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                                                        <?php if ($this->session->userdata('username') == 'admin') {
                                                        ; ?>
                                                            <a href="<?= base_url('dashboard/deletemenu/' . $id) ?>" class="btn btn-danger btn-sm tombol-konfirm" data-judul="Untuk menghapus Kelebihan ?" data-konfirm="Yakin, Hapus Data !">
                                                                <i class="fa fa-trash"></i> Delete
                                                            </a>
                                                        <?php
                                                    }; ?>
                                                    </td>
                                            </tr>
                                            <!-- Small modal -->
                                            <div id="edit<?= $menu->id_menu ?>" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true" style="margin-top: 0">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <?= form_open_multipart('dashboard/menuupdate/' . $menu->id_menu); ?>
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel2">Edit Data Menu</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body form-horizontal form-label-left">
                                                            <div class="item form-group">
                                                                <label for="password" class="control-label col-md-2" style="text-align: right">Nama Menu</label>
                                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                                    <input type="text" name="nama_menu" class="form-control col-md-7 col-xs-12" required="required" value="<?= $menu->menu ?>">
                                                                </div>
                                                            </div>
                                                            <div class="item form-group">
                                                                <label for="password" class="control-label col-md-2" style="text-align: right">Content</label>
                                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                                    <input type="text" name="content" class="form-control col-md-7 col-xs-12" required="required" value="<?= $menu->isi_menu ?>">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Edit</button>
                                                            </div>
                                                            <?= form_close(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /modals -->
                                            <?php
                                                    $i++;
                                                };
                                            ?>
                                            <!-- Modal Edit Admin End -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Modal ADD Menu -->
        <div id="addMenu" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true" style="margin-top: 0">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <?= form_open_multipart('dashboard/addMenu'); ?>
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel2">Add Menu</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body form-horizontal">
                        <div class="form-group">
                            <label for="menu" class="control-label">Menu</label>
                            <div class="col-md-9 col-sm-9">
                                <input type="text" name="menu" class="form-control col-md-7" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" class="control-label">Content</label>
                            <div class="col-md-9 col-sm-9">
                                <input type="text" name="content" class="form-control col-md-7" required="required">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Tambahkan</button>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?= base_url('login/logout'); ?>">Logout</a>
                    </div>
                </div>
            </div>
        </div>
