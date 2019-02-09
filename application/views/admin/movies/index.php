      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="<?= base_url('admin'); ?>"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
            <li>
                <a href="<?= base_url('admin/users'); ?>">
                    <i class="fa fa-table"></i> <span>Users</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('admin/admins'); ?>">
                    <i class="fa fa-table"></i> <span>Admin</span>
                </a>
            </li>
            <li class="active">
                <a href="<?= base_url('admin/movies'); ?>">
                    <i class="fa fa-table"></i> <span>Movies</span>
                </a>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Hover Data Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Tipe</th>
                                    <th>Durasi</th>
                                    <th>Umur</th>
                                    <th>Genre</th>
                                    <th>Sinopsis</th>
                                    <th>Trailer</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($movies as $row) : ?>
                            <tr>
                                <td><?= $row['Judul']; ?></td>
                                <td><?= $row['Tipe']; ?></td>
                                <td><?= $row['Durasi']; ?></td>    
                                <td><?= $row['Umur']; ?></td>    
                                <td><?= $row['Genre']; ?></td>    
                                <td><?= $row['sinopsis']; ?></td>    
                                <td><?= $row['trailer']; ?></td>   
                                 
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  