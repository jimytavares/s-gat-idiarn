<?php include('../.globals/header.php'); ?>  
<body>
 
    <!--#### ALL PAGE ####-->
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    
        <!-- Line header -->
        <?php include('../.globals/line-header.php'); ?>   
        
        <!-- Settings color -->
        <?php include('../.globals/settings.php'); ?>  
    
        <!-- SECTION: Page -->
        <div class="app-main">
            
            <!-- LEFT: settings color -->
            <?php include('../.globals/nav-bar.php'); ?> 
            
            <!-- RIGHT: PAGE -->            
            <div class="app-main__outer">
                <div class="app-main__inner">
                    
                    <!-- titulo -->
                    <div class="app-page-title">
                        <div class="page-title-wrapper">

                            <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
                                        </i>
                                    </div>
                                    <div>Listagem das Atividades
                                        <div class="page-title-subheading">Exibição de todas as atividades.
                                        </div>
                                    </div>
                                </div>

                            <div class="page-title-actions">
                                <div class="d-inline-block dropdown">
                                    <!--<button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                            <i class="fa fa-business-time fa-w-20"></i>
                                        </span>
                                        Listagem
                                    </button>-->
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">
                                                    <i class="nav-link-icon lnr-inbox"></i>
                                                    <span>
                                                        Memorandos
                                                    </span>
                                                    <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">
                                                    <i class="nav-link-icon lnr-book"></i>
                                                    <span>
                                                        Novos
                                                    </span>
                                                    <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                    <i class="nav-link-icon lnr-file-empty"></i>
                                                    <span>
                                                        Relatório
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> 

                        </div>
                    </div> 
                    
                     <!-- Table -->
                     <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Tabela de todas as suas atividades.</h5>
                            <table class="mb-0 table table-bordered">
                                <thead>
                                <tr>
                                    <th>Situação</th>
                                    <th>Período</th>
                                    <th>Nome</th>
                                    <th>Origem</th>
                                    <th>Destino</th>
                                    <th style="width:5%;">Região</th>
                                    <th style="width:5%;">Nº</th>
                                    <th style="width:5%;">Ação</th>
                                    <th style="width:5%;">Fonte</th>
                                    <th style="width:5%;">Diária</th>
                                    <th style="width:5%;">Pernoite</th>
                                    <th style="width:5%;">Prestar Contas</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th style="text-align:center;"><i class="fas fa-times" style="font-size:30px; color:red;"></i></th>
                                    <th scope="row">04/11/2021 <br> 05/11/2021</th>
                                    <td>Fernanda Lucena Julia</td>
                                    <td>Mossóro-RN</td>
                                    <td>Apodi-RN</td>
                                    <td>11</td>
                                    <td>15.1</td>
                                    <td>16852</td>
                                    <td>250</td>
                                    <td>1,0</td>
                                    <td style="color:red; text-align:center;">Não</td>
                                    <td>  </td>
                                </tr>
                                <tr>
                                    <th style="text-align:center;"><i class="fas fa-check" style="font-size:30px; color:#00cc00;"></i></th>
                                    <th scope="row">19/10/2021</th>
                                    <td>Fernanda Lucena Julia</td>
                                    <td>Mossoró-RN</td>
                                    <td>Apodi-RN</td>
                                    <td>11</td>
                                    <td>15.1</td>
                                    <td>16830</td>
                                    <td>250</td>
                                    <td>1,0</td>
                                    <td style="color:red; text-align:center;">Não</td>
                                    <td>  </td>
                                </tr>
                                <tr>
                                    <th style="text-align:center;"><i class="fas fa-hourglass-half" style="font-size:28px; color:#0066ff;"></i></th>
                                    <th scope="row">26/10/2021</th>
                                    <td>Fernanda Lucena Julia</td>
                                    <td>Natal-RN</td>
                                    <td>Mossoró-RN</td>
                                    <td>11</td>
                                    <td>15.1</td>
                                    <td>14421</td>
                                    <td>250</td>
                                    <td>3,0</td>
                                    <td style="color:#1aca0c; text-align:center;">Sim</td>
                                    <td>  </td>
                                </tr>
                                <tr>
                                    <th style="text-align:center;"><i class="fas fa-hourglass-start" style="font-size:28px; color:#ff751a;"></i></th>
                                    <th scope="row">04/11/2021 <br> 05/11/2021</th>
                                    <td>Fernanda Lucena Julia</td>
                                    <td>Mossóro-RN</td>
                                    <td>Apodi-RN</td>
                                    <td>11</td>
                                    <td>15.1</td>
                                    <td>16852</td>
                                    <td>250</td>
                                    <td>1,0</td>
                                    <td style="color:red; text-align:center;">Não</td>
                                    <td>  </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div> 
            
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    
    </div><!-- all page -->
    
<?php include('../.globals/footer.php'); ?>  