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
                                    <i class="pe-7s-graph text-success">
                                    </i>
                                </div>
                                <div>Memorando
                                    <div class="page-title-subheading">Preenchimento do memorando para envio de programação via SEI</div>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                    <i class="fa fa-star"></i>
                                </button>
                                <div class="d-inline-block dropdown">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                            <i class="fa fa-business-time fa-w-20"></i>
                                        </span>
                                        Memorandos
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">
                                                    <i class="nav-link-icon lnr-inbox"></i>
                                                    <span>
                                                        Todos:
                                                    </span>
                                                    <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">
                                                    <i class="nav-link-icon lnr-book"></i>
                                                    <span>
                                                        Novos:
                                                    </span>
                                                    <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">
                                                    <i class="nav-link-icon lnr-picture"></i>
                                                    <span>
                                                        Gravados:
                                                    </span>
                                                    <div class="ml-auto badge badge-pill badge-secondary">3</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>            

                    <!-- 3 buttons -->
                    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                        <li class="nav-item">
                            <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                <span>Vegetal</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                <span>Animal</span>
                            </a>
                        </li>
                    </ul>

                    <!-- Formulários -->
                    <div class="tab-content">
                       
                        <!-- 01 FORM: Vegetal -->
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                  
                                    <h5 class="card-title" style="color:#3f6ad8;">Memorando área Vegetal:</h5>
                                   
                                    <form class="">
                                        
                                        <!-- Data inicio / Data fim / Pernoite -->
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-2">
                                                <p style="font-size:15px;"><i class="far fa-calendar-alt"></i> Selecione a Data Início:</p>
                                                <input class="w3-input w3-border" value="<?php echo date('Y-m-d');?>" type="date" name="datta" required>
                                            </div>
                                            <div class="col-2">
                                                <p style="font-size:15px;"><i class="far fa-calendar-alt"></i> Selecione a Data Fim:</p>
                                                <input class="w3-input w3-border" value="<?php echo date('Y-m-d');?>" type="date" name="datta" required>
                                            </div>
                                            <div class="col-5">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Pernoite?</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" style="width:30%;">
                                                      <option>..:: Sim ou Não ::..</option>
                                                      <option>Sim</option>
                                                      <option>Não</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Fonte -->
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Fonte:</label>
                                            <select class="form-control" id="exampleFormControlSelect1" style="width:15%;">
                                              <option></option>
                                              <option>250 (Nao tem meta)</option>
                                              <option>281</option>
                                            </select>
                                        </div>
                                        
                                        <!-- Atividade a ser realizada -->
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Atividade a ser realizada:</label>
                                            <select class="form-control" id="exampleFormControlSelect1" style="width:50%;">
                                              <option></option>
                                              <?php include_once('../.control/select_ativ_vegetal.php'); ?>
                                            </select>
                                        </div>
                                        
                                        <!-- Meta -->
                                        <div class="">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Meta: <span style="color:gray;">(Automatico, dependendo da atividade)</span> <span style="color:red;"><b></b></span></label>
                                                <select class="form-control" id="exampleFormControlSelect1" style="width:15%;">
                                                  <option></option>
                                                  <option></option>
                                                  <option></option>
                                                </select>
                                            </div>
                                        </div>
                                           
                                        <br/><h5 class="card-title" style="color:#3f6ad8;">Formação da Equipe:</h5>
                                            
                                        <!-- Equipe -->
                                        <div class="">
                                            
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="exampleFormControlSelect1">Selecione o 1º Beneficiario:</label>
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                      <option></option>
                                                      <?php include_once('../.control/select_beneficiario.php'); ?>
                                                    </select>
                                                </div>
                                                <div class="col-4">
                                                    <label for="exampleFormControlSelect2">Selecione o 2º Beneficiario:</label>
                                                    <select class="form-control" id="exampleFormControlSelect2">
                                                      <option></option>
                                                      <?php include_once('../.control/select_beneficiario.php'); ?>
                                                    </select>
                                                </div>
                                                <div class="col-4">
                                                    <label for="exampleFormControlSelect1">Selecione o 3º Beneficiario:</label>
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                      <option></option>
                                                      <?php include_once('../.control/select_beneficiario.php'); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="row" style="margin-top:15px;">
                                                <div class="col-4">
                                                    <label for="exampleFormControlSelect1">Selecione o 4º Beneficiario:</label>
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                      <option></option>
                                                      <?php include_once('../.control/select_beneficiario.php'); ?>
                                                    </select>
                                                </div>
                                                <div class="col-4">
                                                    <label for="exampleFormControlSelect1">Selecione o 5º Beneficiario:</label>
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                      <option></option>
                                                      <?php include_once('../.control/select_beneficiario.php'); ?>
                                                    </select>
                                                </div>
                                            </div>
                                          

                                        </div>
                                        
                                        <br/><h5 class="card-title" style="color:#3f6ad8;">Destino:</h5>
                                        
                                        <!-- Origem 01 -->
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <p>Município de Origem</p>
                                                    <select class="custom-select" required>
                                                      <option value="">Origem</option>
                                                      <option value="1">Natal</option>
                                                      <option value="2">Parnamirim</option>
                                                      <option value="3">Teste</option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecione a origem</div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <p>1º Município de Destino</p>
                                                    <select class="custom-select" required>
                                                      <option value="">Destino</option>
                                                      <option value="1">Apodi-RN</option>
                                                      <option value="2">Caraúbas-RN</option>
                                                      <option value="3">Dantas-RN</option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecione o destino</div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <p>2º Município de Destino</p>
                                                    <select class="custom-select" required>
                                                      <option value="">Destino</option>
                                                      <option value="1">Apodi-RN</option>
                                                      <option value="2">Caraúbas-RN</option>
                                                      <option value="3">Dantas-RN</option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecione o destino</div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <p>3º Município de Destino</p>
                                                    <select class="custom-select" required>
                                                      <option value="">Destino</option>
                                                      <option value="1">Apodi-RN</option>
                                                      <option value="2">Caraúbas-RN</option>
                                                      <option value="3">Dantas-RN</option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecione o destino</div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <p>4º Município de Destino</p>
                                                    <select class="custom-select" required>
                                                      <option value="">Destino</option>
                                                      <option value="1">Apodi-RN</option>
                                                      <option value="2">Caraúbas-RN</option>
                                                      <option value="3">Dantas-RN</option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecione o destino</div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <p>5º Município de Destino</p>
                                                    <select class="custom-select" required>
                                                      <option value="">Destino</option>
                                                      <option value="1">Apodi-RN</option>
                                                      <option value="2">Caraúbas-RN</option>
                                                      <option value="3">Dantas-RN</option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecione o destino</div>
                                                </div>
                                            </div>
                                        </div>
                                          
                                        <!-- Origem 02 -->     
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <p>Município de Origem</p>
                                                    <select class="custom-select" required>
                                                      <option value="">Origem</option>
                                                      <option value="1">Natal</option>
                                                      <option value="2">Parnamirim</option>
                                                      <option value="3">Teste</option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecione a origem</div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <p>1º Município de Destino</p>
                                                    <select class="custom-select" required>
                                                      <option value="">Destino</option>
                                                      <option value="1">Apodi-RN</option>
                                                      <option value="2">Caraúbas-RN</option>
                                                      <option value="3">Dantas-RN</option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecione o destino</div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <p>2º Município de Destino</p>
                                                    <select class="custom-select" required>
                                                      <option value="">Destino</option>
                                                      <option value="1">Apodi-RN</option>
                                                      <option value="2">Caraúbas-RN</option>
                                                      <option value="3">Dantas-RN</option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecione o destino</div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <p>3º Município de Destino</p>
                                                    <select class="custom-select" required>
                                                      <option value="">Destino</option>
                                                      <option value="1">Apodi-RN</option>
                                                      <option value="2">Caraúbas-RN</option>
                                                      <option value="3">Dantas-RN</option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecione o destino</div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <p>4º Município de Destino</p>
                                                    <select class="custom-select" required>
                                                      <option value="">Destino</option>
                                                      <option value="1">Apodi-RN</option>
                                                      <option value="2">Caraúbas-RN</option>
                                                      <option value="3">Dantas-RN</option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecione o destino</div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <p>5º Município de Destino</p>
                                                    <select class="custom-select" required>
                                                      <option value="">Destino</option>
                                                      <option value="1">Apodi-RN</option>
                                                      <option value="2">Caraúbas-RN</option>
                                                      <option value="3">Dantas-RN</option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecione o destino</div>
                                                </div>
                                            </div>
                                        </div>
                                           
                                        <!-- Diarias -->  
                                        <div class="row">
                                           <div class="col">
                                               <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Total de Dárias:</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" style="width:30%;">
                                                      <option>Não há diária</option>
                                                      <option>1,0</option>
                                                      <option>3,0</option>
                                                    </select>
                                               </div>
                                           </div>
                                        </div>
                                        
                                        <button class="btn btn-success">Salvar</button>
                                        <button class="btn btn-primary">Gravar Rascunho</button>
                                        
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- 02 FORM: Animal -->
                        <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                   
                                   <h5 class="card-title" style="color:#3f6ad8;">Memorando área Animal:</h5>
                                   
                                    <form class="">
                                        
                                        <!-- Data inicio / Data fim / Pernoite -->
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-2">
                                                <p style="font-size:15px;"><i class="far fa-calendar-alt"></i> Selecione a Data Início:</p>
                                                <input class="w3-input w3-border" value="<?php echo date('Y-m-d');?>" type="date" name="datta" required>
                                            </div>
                                            <div class="col-2">
                                                <p style="font-size:15px;"><i class="far fa-calendar-alt"></i> Selecione a Data Fim:</p>
                                                <input class="w3-input w3-border" value="<?php echo date('Y-m-d');?>" type="date" name="datta" required>
                                            </div>
                                            <div class="col-5">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Pernoite?</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" style="width:30%;">
                                                      <option>..:: Sim ou Não ::..</option>
                                                      <option>Sim</option>
                                                      <option>Não</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Fonte -->
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Fonte:</label>
                                            <select class="form-control" id="exampleFormControlSelect1" style="width:15%;">
                                              <option></option>
                                              <option>250 (Nao tem meta)</option>
                                              <option>281</option>
                                            </select>
                                        </div>
                                        
                                        <!-- Atividade a ser realizada -->
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Atividade a ser realizada:</label>
                                            <select class="form-control" id="exampleFormControlSelect1" style="width:50%;">
                                              <option></option>
                                              <?php include_once('../.control/select_ativ_vegetal.php'); ?>
                                            </select>
                                        </div>
                                        
                                        <!-- Ação / Meta -->
                                        <div class="">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Meta: <span style="color:gray;">(Automatico, dependendo da atividade)</span> <span style="color:red;"><b></b></span></label>
                                                <select class="form-control" id="exampleFormControlSelect1" style="width:15%;">
                                                  <option></option>
                                                  <option>250</option>
                                                  <option>281</option>
                                                </select>
                                            </div>
                                        </div>
                                           
                                        <br/><h5 class="card-title" style="color:#3f6ad8;">Formação da Equipe:</h5>
                                            
                                        <!-- Equipe -->
                                        <div class="">
                                            
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="exampleFormControlSelect1">Selecione o 1º Beneficiario:</label>
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                      <option></option>
                                                      <?php include_once('../.control/select_beneficiario.php'); ?>
                                                    </select>
                                                </div>
                                                <div class="col-4">
                                                    <label for="exampleFormControlSelect2">Selecione o 2º Beneficiario:</label>
                                                    <select class="form-control" id="exampleFormControlSelect2">
                                                      <option></option>
                                                      <?php include_once('../.control/select_beneficiario.php'); ?>
                                                    </select>
                                                </div>
                                                <div class="col-4">
                                                    <label for="exampleFormControlSelect1">Selecione o 3º Beneficiario:</label>
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                      <option></option>
                                                      <?php include_once('../.control/select_beneficiario.php'); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="row" style="margin-top:15px;">
                                                <div class="col-4">
                                                    <label for="exampleFormControlSelect1">Selecione o 4º Beneficiario:</label>
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                      <option></option>
                                                      <?php include_once('../.control/select_beneficiario.php'); ?>
                                                    </select>
                                                </div>
                                                <div class="col-4">
                                                    <label for="exampleFormControlSelect1">Selecione o 5º Beneficiario:</label>
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                      <option></option>
                                                      <?php include_once('../.control/select_beneficiario.php'); ?>
                                                    </select>
                                                </div>
                                            </div>
                                          

                                        </div>
                                        
                                        <br/><h5 class="card-title" style="color:#3f6ad8;">Destino:</h5>
                                        
                                        <!-- Origem 01 -->
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <p>Município de Origem</p>
                                                    <select class="custom-select" required>
                                                      <option value="">Origem</option>
                                                      <option value="1">Natal</option>
                                                      <option value="2">Parnamirim</option>
                                                      <option value="3">Teste</option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecione a origem</div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <p>1º Município de Destino</p>
                                                    <select class="custom-select" required>
                                                      <option value="">Destino</option>
                                                      <option value="1">Apodi-RN</option>
                                                      <option value="2">Caraúbas-RN</option>
                                                      <option value="3">Dantas-RN</option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecione o destino</div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <p>2º Município de Destino</p>
                                                    <select class="custom-select" required>
                                                      <option value="">Destino</option>
                                                      <option value="1">Apodi-RN</option>
                                                      <option value="2">Caraúbas-RN</option>
                                                      <option value="3">Dantas-RN</option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecione o destino</div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <p>3º Município de Destino</p>
                                                    <select class="custom-select" required>
                                                      <option value="">Destino</option>
                                                      <option value="1">Apodi-RN</option>
                                                      <option value="2">Caraúbas-RN</option>
                                                      <option value="3">Dantas-RN</option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecione o destino</div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <p>4º Município de Destino</p>
                                                    <select class="custom-select" required>
                                                      <option value="">Destino</option>
                                                      <option value="1">Apodi-RN</option>
                                                      <option value="2">Caraúbas-RN</option>
                                                      <option value="3">Dantas-RN</option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecione o destino</div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <p>5º Município de Destino</p>
                                                    <select class="custom-select" required>
                                                      <option value="">Destino</option>
                                                      <option value="1">Apodi-RN</option>
                                                      <option value="2">Caraúbas-RN</option>
                                                      <option value="3">Dantas-RN</option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecione o destino</div>
                                                </div>
                                            </div>
                                        </div>
                                          
                                        <!-- Origem 02 -->     
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <p>Município de Origem</p>
                                                    <select class="custom-select" required>
                                                      <option value="">Origem</option>
                                                      <option value="1">Natal</option>
                                                      <option value="2">Parnamirim</option>
                                                      <option value="3">Teste</option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecione a origem</div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <p>1º Município de Destino</p>
                                                    <select class="custom-select" required>
                                                      <option value="">Destino</option>
                                                      <option value="1">Apodi-RN</option>
                                                      <option value="2">Caraúbas-RN</option>
                                                      <option value="3">Dantas-RN</option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecione o destino</div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <p>2º Município de Destino</p>
                                                    <select class="custom-select" required>
                                                      <option value="">Destino</option>
                                                      <option value="1">Apodi-RN</option>
                                                      <option value="2">Caraúbas-RN</option>
                                                      <option value="3">Dantas-RN</option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecione o destino</div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <p>3º Município de Destino</p>
                                                    <select class="custom-select" required>
                                                      <option value="">Destino</option>
                                                      <option value="1">Apodi-RN</option>
                                                      <option value="2">Caraúbas-RN</option>
                                                      <option value="3">Dantas-RN</option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecione o destino</div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <p>4º Município de Destino</p>
                                                    <select class="custom-select" required>
                                                      <option value="">Destino</option>
                                                      <option value="1">Apodi-RN</option>
                                                      <option value="2">Caraúbas-RN</option>
                                                      <option value="3">Dantas-RN</option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecione o destino</div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <p>5º Município de Destino</p>
                                                    <select class="custom-select" required>
                                                      <option value="">Destino</option>
                                                      <option value="1">Apodi-RN</option>
                                                      <option value="2">Caraúbas-RN</option>
                                                      <option value="3">Dantas-RN</option>
                                                    </select>
                                                    <div class="invalid-feedback">Selecione o destino</div>
                                                </div>
                                            </div>
                                        </div>
                                           
                                        <!-- Diarias -->  
                                        <div class="row">
                                           <div class="col">
                                               <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Total de Dárias:</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" style="width:30%;">
                                                      <option>Não há diária</option>
                                                      <option>1,0</option>
                                                      <option>3,0</option>
                                                    </select>
                                               </div>
                                           </div>
                                        </div>
                                        
                                        <button class="btn btn-success">Salvar</button>
                                        <button class="btn btn-primary">Gravar Rascunho</button>
                                        
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                        
                </div>
            </div>
            
        </div> 
  
            
                                
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    </div>
<?php include('../.globals/footer.php'); ?>  