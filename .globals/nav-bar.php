<div class="app-sidebar sidebar-shadow">

    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    

    <!-- NAV BAR: MENU -->
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">

            <ul class="vertical-nav-menu">
                <!-- LINE 01 -->
                <li class="app-sidebar__heading"></li>
                <li>
                    <img src="../../s-gat-idiarn/assets/images/logo-menu.png" style="width:100%;"/>
                </li>
                
                <!-- LINE 02 -->
                <li class="app-sidebar__heading" style="padding-top:30px;"><i class="fas fa-file-signature" style="font-size:18px;"></i> Memorando</li>
                <li>
                    <a href="../../s-gat-idiarn/.pages/form-memorando.php">
                        <i class="metismenu-icon pe-7s-note2"></i>
                        Registro de Programação
                    </a>
                </li>
                <li>
                    <a href="../../s-gat-idiarn/.pages/list-memorando.php">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Listar Todos
                    </a>
                </li>
                <li>
                    <a href="../../s-gat-idiarn/.pages/list-memorando-interno.php">
                        <i class="metismenu-icon pe-7s-photo-gallery"></i>
                        Listar Memorando Interno
                    </a>
                </li>
                <li>
                    <a href="tables-regular.html">
                        <i class="metismenu-icon pe-7s-news-paper"></i>
                        Gerar .PDF
                    </a>
                </li>
                
                <!-- PRESTACAO DE CONTAS -->
                <li class="app-sidebar__heading" style="padding-top:30px;"><i class="fas fa-paste" style="font-size:22px;"></i> Prestação de Contas</li>
                <li>
                    <a href="../../s-gat-idiarn/.pages/list-relatorioAtividades.php">
                        <i class="metismenu-icon pe-7s-note2"></i>
                        Relatório de Atividades
                    </a>
                </li>
                
                <!-- LINE 02 -->
                <li class="app-sidebar__heading" style="padding-top:10px;"><i class="fas fa-user-lock" style="font-size:18px;"></i> Administrador</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-add-user"></i>
                        Controle de Usuário
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="elements-buttons-standard.html">
                                <i class="metismenu-icon"></i>
                                Novo Usuário
                            </a>
                        </li>
                        <li>
                            <a href="elements-dropdowns.html">
                                <i class="metismenu-icon">
                                </i>Listar / Excluir
                            </a>
                        </li>
                        <li>
                            <a href="elements-dropdowns.html">
                                <i class="metismenu-icon">
                                </i>Relatório
                            </a>
                        </li>
                    </ul>
                </li>
                
                <!-- LINE 04 -->
                <li class="app-sidebar__heading" style="padding-top:10px;"><i class="fas fa-sign-out-alt" style="font-size:19px;"></i> Configurações</li>
                <li>
                    <a href="tables-regular.html">
                        <i class="metismenu-icon pe-7s-user"></i>
                        Meu Perfil
                    </a>
                    <a href="tables-regular.html">
                        <i class="metismenu-icon pe-7s-close-circle"></i>
                        Sair
                    </a>
                </li>
                
                <!--<li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Função 01
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="elements-buttons-standard.html">
                                <i class="metismenu-icon"></i>
                                Buttons
                            </a>
                        </li>
                        <li>
                            <a href="elements-dropdowns.html">
                                <i class="metismenu-icon">
                                </i>Dropdowns
                            </a>
                        </li>
                        <li>
                            <a href="elements-icons.html">
                                <i class="metismenu-icon">
                                </i>Icons
                            </a>
                        </li>
                        <li>
                            <a href="elements-badges-labels.html">
                                <i class="metismenu-icon">
                                </i>Badges
                            </a>
                        </li>
                        <li>
                            <a href="elements-cards.html">
                                <i class="metismenu-icon">
                                </i>Cards
                            </a>
                        </li>
                        <li>
                            <a href="elements-list-group.html">
                                <i class="metismenu-icon">
                                </i>List Groups
                            </a>
                        </li>
                        <li>
                            <a href="elements-navigation.html">
                                <i class="metismenu-icon">
                                </i>Navigation Menus
                            </a>
                        </li>
                        <li>
                            <a href="elements-utilities.html">
                                <i class="metismenu-icon">
                                </i>Utilities
                            </a>
                        </li>
                    </ul>
                </li>
                <!--<li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-car"></i>
                        Função 02
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="components-tabs.html">
                                <i class="metismenu-icon">
                                </i>Tabs
                            </a>
                        </li>
                        <li>
                            <a href="components-accordions.html">
                                <i class="metismenu-icon">
                                </i>Accordions
                            </a>
                        </li>
                        <li>
                            <a href="components-notifications.html">
                                <i class="metismenu-icon">
                                </i>Notifications
                            </a>
                        </li>
                        <li>
                            <a href="components-modals.html">
                                <i class="metismenu-icon">
                                </i>Modals
                            </a>
                        </li>
                        <li>
                            <a href="components-progress-bar.html">
                                <i class="metismenu-icon">
                                </i>Progress Bar
                            </a>
                        </li>
                        <li>
                            <a href="components-tooltips-popovers.html">
                                <i class="metismenu-icon">
                                </i>Tooltips &amp; Popovers
                            </a>
                        </li>
                        <li>
                            <a href="components-carousel.html">
                                <i class="metismenu-icon">
                                </i>Carousel
                            </a>
                        </li>
                        <li>
                            <a href="components-calendar.html">
                                <i class="metismenu-icon">
                                </i>Calendar
                            </a>
                        </li>
                        <li>
                            <a href="components-pagination.html">
                                <i class="metismenu-icon">
                                </i>Pagination
                            </a>
                        </li>
                        <li>
                            <a href="components-scrollable-elements.html">
                                <i class="metismenu-icon">
                                </i>Scrollable
                            </a>
                        </li>
                        <li>
                            <a href="components-maps.html">
                                <i class="metismenu-icon">
                                </i>Maps
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="tables-regular.html">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Tables
                    </a>
                </li>
                
                <!-- LINE 03
                <li class="app-sidebar__heading">Widgets</li>
                <li>
                    <a href="dashboard-boxes.html">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Dashboard Boxes
                    </a>
                </li>-->
                
                <!-- LINE 04 
                <li class="app-sidebar__heading">Forms</li>
                <li>
                    <a href="forms-controls.html">
                        <i class="metismenu-icon pe-7s-mouse">
                        </i>Forms Controls
                    </a>
                </li>
                <li>
                    <a href="forms-layouts.html">
                        <i class="metismenu-icon pe-7s-eyedropper">
                        </i>Forms Layouts
                    </a>
                </li>
                <li>
                    <a href="forms-validation.html">
                        <i class="metismenu-icon pe-7s-pendrive">
                        </i>Forms Validation
                    </a>
                </li>-->
                
                <!-- LINE 05 
                <li class="app-sidebar__heading">Charts</li>
                <li>
                    <a href="charts-chartjs.html">
                        <i class="metismenu-icon pe-7s-graph2">
                        </i>ChartJS
                    </a>
                </li> -->
                
                <!-- LINE 06 
                <li class="app-sidebar__heading">PRO Version</li>
                <li>
                    <a href="https://dashboardpack.com/theme-details/architectui-dashboard-html-pro/" target="_blank">
                        <i class="metismenu-icon pe-7s-graph2">
                        </i>
                        Upgrade to PRO
                    </a>
                </li> -->
            </ul>

        </div>
    </div>

</div>