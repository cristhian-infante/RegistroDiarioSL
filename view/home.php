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
                    <h3 class="text-themecolor">Inicio</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <!--<ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                        <li class="breadcrumb-item">pages</li>
                        <li class="breadcrumb-item active">Animation</li>
                    </ol>-->
                </div>
                <div>
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>           
            <div class="container-fluid">
            <!-- ======================barra lateral derecha Direcciones===================== -->  
                <!-- =========================Contenido de la Pagina====================== -->
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="mdi mdi-car text-info"></i></h2>
                                    <h3 class="">3 Viajes</h3>
                                    <h6 class="card-subtitle">C4C-804</h6>
                                </div>                               
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="mdi mdi-car text-success"></i></h2>
                                    <h3 class="">2 Viajes</h3>
                                    <h6 class="card-subtitle">C7A-804</h6>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="mdi mdi-car text-purple"></i></h2>
                                    <h3 class="">2 Viajes</h3>
                                    <h6 class="card-subtitle">B8I-926</h6>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="mdi mdi-car text-warning"></i></h2>
                                    <h3 class="">2 Viajes</h3>
                                    <h6 class="card-subtitle">B8F-929</h6>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="mdi mdi-car text-red"></i></h2>
                                    <h3 class="">1 Viajes</h3>
                                    <h6 class="card-subtitle">F8Z-764</h6>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <!-- card -->
                        <div class="card card-inverse card-info">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="ti-pie-chart"></i></h1></div>
                                    <div>
                                        <h3 class="card-title">Viajes Generales</h3>
                                        <h6 class="card-subtitle">Julio  2020</h6> </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <h2 class="font-light text-white">81</h2>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card card-inverse card-success">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="icon-cloud-download"></i></h1></div>
                                    <div>
                                        <h3 class="card-title">Viajes de Hoy</h3>
                                        <h6 class="card-subtitle">Julio  2020</h6> </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <h2 class="font-light text-white">15</h2> 
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <!-- card -->
                        <div class="card card-inverse card-danger">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="ti-pie-chart"></i></h1></div>
                                    <div>
                                        <h3 class="card-title">Viajes del Mes</h3>
                                        <h6 class="card-subtitle">Julio  2020</h6> </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <h2 class="font-light text-white">51</h2>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <h4 class="card-title">Reporte del mes de<br/></h4>
                                    <div class="ml-auto">
                                        <select class="custom-select">
                                            <option value="1">Enero</option>
                                            <option value="2">Febrero</option>
                                            <option value="3">Marzo</option>
                                            <option value="4">Abril</option>
                                            <option value="5">Mayo</option>
                                            <option value="6">Junio</option>
                                            <option value="7">Julio</option>
                                            <option value="8">Agosto</option>
                                            <option value="9">Setiembre</option>
                                            <option value="10">Octubre</option>
                                            <option value="11">Noviembre</option>
                                            <option value="12">Diciembre</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-light p-20">
                                <div class="d-flex">
                                    <div class="align-self-center">
                                        <h3 class="m-b-0">Julio del 2020</h3><small>Viajes Totales</small></div>
                                    <div class="ml-auto align-self-center">
                                        <h2 class="text-success">56</h2></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover earning-box">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Conductor</th>
                                                <th>Placa</th>
                                                <th>Viajes R</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width:50px;"><span class="round"><img src="../assets/images/users/8.jpg" alt="user" width="50"></span></td>
                                                <td>
                                                    <h6>Juan Lamar Tineo</h6></td>
                                                <td><span class="label label-success">C4C-806</span></td>
                                                <td>12</td>
                                            </tr>
                                            <tr class="active">
                                                <td><span class="round"><img src="../assets/images/users/2.jpg" alt="user" width="50"></span></td>
                                                <td>
                                                    <h6>Roberto</h6></td>
                                                <td><span class="label label-info">C7A-804</span></td>
                                                <td>15</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-success"><img src="../assets/images/users/1.jpg" alt="user" width="50"></span></td>
                                                <td>
                                                    <h6>Marco Vigo</h6></td>
                                                <td><span class="label label-primary">F8Z-764</span></td>
                                                <td>16</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-primary"><img src="../assets/images/users/4.jpg" alt="user" width="50"></span></td>
                                                <td>
                                                    <h6>Juan Garcia</h6></td>
                                                <td><span class="label label-danger">B8I-926</span></td>
                                                <td>22</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-warning"><img src="../assets/images/users/5.jpg" alt="user" width="50"></span></td>
                                                <td>
                                                    <h6>Luiz Zapata</h6></td>
                                                <td><span class="label label-warning">B8F-929</span></td>
                                                <td>33</td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active"> <img class="img-responsive" src="../assets/images/big/img4.jpg" alt="First slide"> </div>
                                        <div class="carousel-item"> <img class="img-responsive" src="../assets/images/big/img5.jpg" alt="Second slide"> </div>
                                        <div class="carousel-item"> <img class="img-responsive" src="../assets/images/big/img6.jpg" alt="Third slide"> </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
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
</body>

</html>
