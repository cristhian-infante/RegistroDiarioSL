<!DOCTYPE html>
<html lang="en">

<?php include '../assets/head.php'?>

<body class="fix-header card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        <!-- =======================header=========================== -->  
        <?php include 'header.php' ?>
        <!-- ======================================================== -->
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <!-- Perfil Lateral -->
                <?php include 'PLateral.php' ?>               
                <!-- Navegacion Lateral-->
               <?php  include 'navegacion.php' ?>
            </div>
        </aside>
        <div class="page-wrapper">
            <!-- ======================barra lateral derecha Direcciones===================== -->            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Viajes</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.php">Viajes</a></li>
                        <li class="breadcrumb-item active">C4C-806</li>
                        <!--<li class="breadcrumb-item active">Animation</li>-->
                    </ol>
                </div>
                <div>
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>           
            <div class="container-fluid">
            <!-- ======================barra lateral derecha Direcciones===================== -->  
                <!-- =========================Contenido de la Pagina====================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <h4 class="card-title">Reporte Diario</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive m-t-40" id="listadoregistrosddd">
                                    <table id="tablac4c" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                                <th>Fecha</th>
                                                <th>Conductor</th>
                                                <th>Placa</th>
                                                <th>Partida</th>
                                                <th>Llegada</th>
                                                <th>Capacidad</th>
                                                <th>Cant. P/B</th>
                                                <th>Condicion</th>  
                                                <th>Disponibilidad</th>                                              
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Fecha</th>
                                                <th>Conductor</th>
                                                <th>Placa</th>
                                                <th>Partida</th>
                                                <th>Llegada</th>
                                                <th>Capacidad</th>
                                                <th>Cant. P/B</th>
                                                <th>Condicion</th> 
                                                <th>Disponibilidad</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ======================Fin del Contenido de la Pagina=================== -->
                <!-- ======================Panel Servicio========================== -->                
               <?php include 'panelServicio.php' ?>               
                <!-- ============================================================== -->
            </div>            
            <!-- ==========================footer========================= -->                  
            <?php include 'footer.php' ?>            
            <!-- ========================================================= -->
        </div>
        <!-- ========================End Page wrapper===================== -->       
    </div>
    <!-- =======================End Wrapper=========================== -->
    
    <!-- ========================All Jquery===================== -->  
    <?php include '../assets/Jquery.php'  ?>    
    <!-- ======================================================= -->
    <script type="text/javascript" src="js/c4c.js"></script>
</body>

</html>
