<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)"><?= $title ?></a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#addProvinsi" class="btn rounded btn-sm btn-primary mb-3" style="float: right;">Tambah data kabupaten
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
                                        <th>Provinsi</th>
                                        <th>Kabupaten</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="customers">
                                    <?php $no = 1;
                                    foreach ($kabupaten as $row) : ?>
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
                                                        <div class="media-body">
                                                            <h5 class="mb-0 fs--1"><?= $row->provinsi ?></h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="py-3">
                                                <a href="#">
                                                    <div class="media d-flex align-items-center">
                                                        <div class="media-body">
                                                            <h5 class="mb-0 fs--1"><?= $row->kabupaten ?></h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
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
                                                            <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#aAddDietMenus<?= $row->id_kabupaten ?>">Edit</a>
                                                            <a class="dropdown-item text-danger" href="<?php echo base_url('admin/kabupaten/delete/' . $row->id_kabupaten) ?>">Delete</a>
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

<!-- Modal add -->
<div class="modal fade" id="addProvinsi">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Kabupaten</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('admin/kabupaten/proses_tambah') ?>" method="post">
                    <div class="form-group">
                        <label>Provinsi</label>
                        <select name="id_provinsi" class="form-control">
                            <option hidden>Silahkan pilih</option>
                            <?php foreach ($provinsi as $p) : ?>
                                <option value="<?= $p->id_provinsi ?>"><?= $p->provinsi ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kabupaten</label>
                        <input type="text" class="form-control" name="kabupaten" autocomplete="off" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Update -->
<?php foreach ($kabupaten as $row) : ?>
    <div class="modal fade" id="aAddDietMenus<?= $row->id_kabupaten ?>">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Data Kabupaten</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= site_url('admin/kabupaten/update') ?>" method="post">
                        <div class="form-group">
                            <label>Provinsi</label>
                            <input type="hidden" name="id_kabupaten" value="<?= $row->id_kabupaten ?>">
                            <select name="id_provinsi" class="form-control">
                                <option hidden value="<?= $row->id_provinsi ?>"><?= $row->provinsi ?></option>
                                <?php foreach ($provinsi as $pp) : ?>
                                    <option value="<?= $pp->id_provinsi ?>"><?= $pp->provinsi ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kabupaten</label>
                            <input type="text" class="form-control" name="kabupaten" value="<?= $row->kabupaten ?>">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- End Modal -->