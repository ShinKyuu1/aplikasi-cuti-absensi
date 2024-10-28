<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-xxl-8">
                <div class="row">
 
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header d-sm-flex d-block pb-0 border-0">
                                <div class="mr-auto pr-3">
                                    <h4 class="text-black fs-20 font-w600">Grafik Pegawai</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->

<!--**********************************
            Footer start
        ***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2020</p>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script type="text/javascript">
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                <?php
                if (count($chart) > 0) {
                    foreach ($chart as $data) {
                        echo "'" . $data->nama_jabatan . "',";
                    }
                }
                ?>
            ],
            datasets: [{
                label: 'Jumlah Pegawai',
                backgroundColor: '#87CEFA',
                borderColor: '##93C3D2',
                data: [
                    <?php
                    if (count($chart) > 0) {
                        foreach ($chart as $data) {
                            echo $data->total . ", ";
                        }
                    }
                    ?>
                ]
            }]
        },
    });
</script>