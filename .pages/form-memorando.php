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
                                <div> <i class="metismenu-icon pe-7s-note2" style="color:black; opacity:1.0;"></i> Memorando
                                    <div class="page-title-subheading">Preenchimento do memorando para envio de programação via SEI
                                    </div>
                                </div>
                            </div>
                            
                            

                            <div class="page-title-actions">
                                
                                <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                    <i class="far fa-file-pdf"></i> Memorando
                                </button>
                                <div class="d-inline-block dropdown">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                            <i class="fa fa-business-time fa-w-20"></i>
                                        </span>
                                        Listagem
                                    </button>
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
                    
                    <!-- forms -->
                    <div class="tab-content">
                       
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                           
                            <!--<div class="main-card mb-3 card">
                                <div class="card-body"><h5 class="card-title" style="color:#3f6ad8;">Período</h5>
                                       
                                    <form class="">
                                        
                                        <div class="form-group">
                                                <label for="exampleFormControlSelect1">Fonte</label>
                                                <select class="form-control" id="exampleFormControlSelect1" style="width:30%;">
                                                  <option>..:: Selecione a Fonte ::..</option>
                                                  <option>250</option>
                                                  <option>281</option>
                                                </select>
                                           </div>

                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-2">
                                                <p style="font-size:15px;"><i class="far fa-calendar-alt"></i> Selecione a Data Início:</p>
                                                <input class="w3-input w3-border" value="<?php echo date('Y-m-d');?>" type="date" name="datta" required>
                                            </div>
                                            <div class="col">
                                                <p style="font-size:15px;"><i class="far fa-calendar-alt"></i> Selecione a Data Fim:</p>
                                                <input class="w3-input w3-border" value="<?php echo date('Y-m-d');?>" type="date" name="datta" required>
                                            </div>
                                        </div>

                                    </form>
                                    <div class="divider"></div>
                                        
                                </div>
                            </div>-->
                            
                            <div class="main-card mb-3 card">
                                <div class="card-body"><h5 class="card-title" style="color:#3f6ad8;"></h5><br>
                                    
                                    <form class="">
                                            
                                            <!-- Area -->
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Área</label>
                                                <select class="form-control" id="exampleFormControlSelect1" style="width:30%;">
                                                  <option>..:: Selecione a Fonte ::..</option>
                                                  <option>Vegetal</option>
                                                  <option>Animal</option>
                                                  <option>Administrativo/Suporte</option>
                                                </select>
                                            </div>
                                        
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
                                                <div class="col">
                                                    <p>Pernoite:</p>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                      <label class="form-check-label" for="exampleRadios1">
                                                        Sim
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                      <label class="form-check-label" for="exampleRadios2">
                                                        Não
                                                      </label>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <br>
                                        
                                            <!-- Fonte -->
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Fonte</label>
                                                <select class="form-control" id="exampleFormControlSelect1" style="width:30%;">
                                                  <option>..:: Selecione a Fonte ::..</option>
                                                  <option>250 (Nao tem meta)</option>
                                                  <option>281</option>
                                                </select>
                                            </div>
                                        
                                            <!-- Atividade a ser realizada -->
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Atividade a ser realizada</label>
                                                <select class="form-control" id="exampleFormControlSelect1" style="width:50%;">
                                                  <option>..:: Selecione a atividade ::..</option>
                                                  <option>15.1 Coleta de Leite</option>
                                                  <option>14.8 Vistoria para registro de estabelecimento</option>
                                                  <option>14.3 Supervisão</option>
                                                </select>
                                            </div>
                                        
                                            <!-- Ação / Meta -->
                                            <div class="row">
                                                <div class="col-3">
                                                     <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Ação <span style="color:gray;">(Automatico, dependendo da atividade)</span></label>
                                                        <select class="form-control" id="exampleFormControlSelect1" style="width:100%;">
                                                          <option>..:: Selecione a Ação ::..</option>
                                                          <option>1323</option>
                                                          <option>24234</option>
                                                          <option>3242</option>
                                                          <option>4312</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Meta <span style="color:gray;">(Automatico, dependendo da atividade)</span> <span style="color:red;"><b></b></span></label>
                                                        <select class="form-control" id="exampleFormControlSelect1" style="width:100%;">
                                                          <option>..:: Selecione a Fonte ::..</option>
                                                          <option>250</option>
                                                          <option>281</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!--   -->
                                            <div class="">

                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Informe quantidade de pessoas</label>
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                      <option>1</option>
                                                      <option>2</option>
                                                      <option>3</option>
                                                      <option>4</option>
                                                      <option>5</option>
                                                    </select>
                                                  </div>

                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Nome 01</label><input name="email" id="exampleEmail11" placeholder="*Informe o nome" type="name" class="form-control"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Nome 02</label><input name="email" id="exampleEmail11" placeholder="*Informe o nome" type="name" class="form-control"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Nome 03</label><input name="email" id="exampleEmail11" placeholder="*Informe o nome" type="name" class="form-control"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        
                                        <form class="was-validated">
                                            
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
                                           
                                           <div class="row">
                                              
                                               <div class="col">
                                                   <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Total de Dárias</label>
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

                        <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                            <div class="main-card mb-3 card">
                                <div class="card-body"><h5 class="card-title">Grid</h5>
                                    <form class="">
                                        <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10"><input name="email" id="exampleEmail" placeholder="with a placeholder" type="email" class="form-control"></div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10"><input name="password" id="examplePassword" placeholder="password placeholder" type="password" class="form-control"></div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Select</label>
                                            <div class="col-sm-10"><select name="select" id="exampleSelect" class="form-control"></select></div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="exampleSelectMulti" class="col-sm-2 col-form-label">Select Multiple</label>
                                            <div class="col-sm-10"><select multiple="" name="selectMulti" id="exampleSelectMulti" class="form-control"></select></div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Text Area</label>
                                            <div class="col-sm-10"><textarea name="text" id="exampleText" class="form-control"></textarea></div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">File</label>
                                            <div class="col-sm-10"><input name="file" id="exampleFile" type="file" class="form-control-file">
                                                <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                            </div>
                                        </div>
                                        <fieldset class="position-relative row form-group">
                                            <legend class="col-form-label col-sm-2">Radio Buttons</legend>
                                            <div class="col-sm-10">
                                                <div class="position-relative form-check"><label class="form-check-label"><input name="radio2" type="radio" class="form-check-input"> Option one is this and that—be sure to include why it's great</label></div>
                                                <div class="position-relative form-check"><label class="form-check-label"><input name="radio2" type="radio" class="form-check-input"> Option two can be something else and selecting it will deselect option
                                                    one</label></div>
                                                <div class="position-relative form-check disabled"><label class="form-check-label"><input name="radio2" disabled="" type="radio" class="form-check-input"> Option three is disabled</label></div>
                                            </div>
                                        </fieldset>
                                        <div class="position-relative row form-group"><label for="checkbox2" class="col-sm-2 col-form-label">Checkbox</label>
                                            <div class="col-sm-10">
                                                <div class="position-relative form-check"><label class="form-check-label"><input id="checkbox2" type="checkbox" class="form-check-input"> Check me out</label></div>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-check">
                                            <div class="col-sm-10 offset-sm-2">
                                                <button class="btn btn-secondary">Submit</button>
                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                          </div>
                   
                    </div>
                        
                        
                </div>
            </div> 
            
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    
    </div><!-- all page -->
    
<?php include('../.globals/footer.php'); ?>  