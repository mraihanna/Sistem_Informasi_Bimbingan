<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <?php
        $mhs = $this->db->get_where('user', ['role_id' => 3])->result_Array();
        ?>
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Persetujuan Sidang</h2>
                    <hr>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header text-center">
                    <h5 class="mb-0">Data Persetujuan Sidang</h5>
                </div>
                <div class="card-body">
                    <table id="example2" class="table table-striped table-bordered" style="width:100%">
                        <tbody>
                            <tr>
                                <td>Jumlah Mahasiswa Yang Telah Disetujui Sidang</td>
                                <td>1</td>
                            </tr>
                    </table>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col" width="50">No</th>
                                    <th scope="col">Nama Mahasiswa</th>
                                    <th scope="col">NPM</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col" width="200">Status</th>
                                </tr>
                            </thead>
                            <?php $no = 1; ?>
                            <?php foreach ($mhs as  $mhs) : ?>
                                <tbody>
                                    <tr class="text-center">
                                        <th rowspan="2"><?= $no++  ?></th>
                                        <td><?= $mhs['name_mhs_1']; ?></td>
                                        <td><?= $mhs['npm_mhs_1']; ?></td>
                                        <td><?= $mhs['kelas_mhs_1']; ?></td>
                                        <td rowspan="2">Sudah Disetujui / Belum Disetujui</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><?= $mhs['name_mhs_2']; ?></td>
                                        <td><?= $mhs['npm_mhs_2']; ?></td>
                                        <td><?= $mhs['kelas_mhs_2']; ?></td>
                                    </tr>
                                </tbody>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->