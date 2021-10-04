<?php
    include ("../../order_tracking/includes/header.php");
?>

            <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <div class="col-lg-12" style="padding-top:20px;">
                        <div class="card">
                            <div class="card-header">
                                Grafico de seguimiento
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <label for="">Fecha inicio</label>
                                        <select name="" id="select_finicio" class="form-control"></select>
                                    </div>
                                    <div class="col-lg-5">
                                        <label for="">Fecha Final</label>
                                        <select name="" id="select_ffin" class="form-control"></select>
                                    </div>
                                    <div class="col-lg-2">
                                        <label for="">&nbsp;</label><br>
                                        <button class="btn btn-danger">Buscar</button>
                                    </div>
                                    <div class="col-lg-4">
                                        <canvas id="myChart" width="400" height="400"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    


<?php
    include ("../../order_tracking/includes/footer.php");
?>
