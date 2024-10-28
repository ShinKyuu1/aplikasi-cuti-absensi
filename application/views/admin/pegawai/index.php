<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Pegawai</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
            </ol>
        </div>
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                                <a href="<?= site_url('admin/pegawai/tambah') ?>" class="btn rounded btn-primary float-right mb-3">
                                    Tambah data pegawai
                                </a>
                            <table class="table table-responsive-lg mb-0 table-striped">
                                <thead>
                                    <tr>
                                        <th class="">
                                            <div class="custom-control custom-checkbox mx-2">
                                                <input type="checkbox" class="custom-control-input" id="checkAll">
                                                <label class="custom-control-label" for="checkAll"></label>
                                            </div>
                                        </th>
                                        <th>Nama</th>
                                        <th>Jenis_Kelamin</th>
                                        <th>Email</th>
                                        <th>No Tel</th>
                                        <th>Bergabung</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="customers">
                                    <?php foreach ($pegawai as $row) : ?>
                                        <tr class="btn-reveal-trigger">
                                            <td>
                                                <div class="custom-control custom-checkbox mx-2">
                                                    <input type="checkbox" class="custom-control-input" id="checkbox1">
                                                    <label class="custom-control-label" for="checkbox1"></label>
                                                </div>
                                            </td>
                                            <td class="py-3">
                                                <a href="#">
                                                    <div class="media d-flex align-items-center">
                                                        <div class="avatar avatar-xl mr-2">
                                                            <div class=""><img class="rounded-circle img-fluid" src="<?php echo base_url() . 'assets/photo/' . $row->photo ?>" width="30" alt="" />
                                                            </div>
                                                        </div>&nbsp;
                                                        <div class="media-body">
                                                            <h5 class="mb-0 fs--1"><?= $row->nama ?></h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="py-2"><?= $row->jenis_kelamin ?></td>
                                            <td class="py-2"><a href="mailto:<?= $row->email ?>"><?= $row->email ?></a></td>
                                            <td class="py-2"> <a href="tel:<?= $row->no_hp ?>"><?= $row->no_hp ?></a></td>
                                            <td class="py-2">30/03/2018</td>
                                            <td class="py-2 text-right">
                                                <div class="dropdown"><button class="btn btn-primary tp-btn-light sharp" type="button" data-toggle="dropdown"><span class="fs--1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                </g>
                                                            </svg></span></button>
                                                    <div class="dropdown-menu dropdown-menu-right border py-0">
                                                        <div class="py-2">
                                                            <a class="dropdown-item" href="<?php echo base_url('admin/pegawai/detail/' . $row->id_pegawai) ?>">View</a>
                                                            <a class="dropdown-item" href="<?php echo base_url('admin/pegawai/edit/' . $row->id_pegawai) ?>">Edit</a>
                                                            <a class="dropdown-item text-danger" href="<?php echo base_url('admin/pegawai/delete/' . $row->id_pegawai) ?>">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>