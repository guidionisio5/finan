<?php

session_start();

?>

<!-- Left Sidebar -->
<div class="left main-sidebar">

    <div class="sidebar-inner leftscroll">

        <div id="sidebar-menu">
                    <ul style="margin-top: 30px">

                       <li class="submenu">
                        <a href="#">
                            <i class="fas fa-laptop"></i>
                            <span> Agenda Telefônica </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li>
                              <!--  <a href="form_contact.php">Cadastrar Contato</a> -->
                                <a href="form_contact.php">Adicinar Contatos</a>
                            </li>
                            <li>
                              <!--  <a href="list_contacts.php">Listar Contato</a> -->
                                <a href="list_contacts.php">Listar Contatos</a>
                            </li>
                        </ul>
                    </li>

                    <?php
                        $nivelUser = $_SESSION['nivelx']; 

                        if($nivelUser != 3){
                            
                        
                    ?>  
                        <li class="submenu">
                            <a href="#">
                            <i class="fas fa-users"></i>
                                <span> Usuários </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                
                                    <a href="form_user.php">Adicionar Usuários</a>
                                </li>
                                <li>
                                
                                    <a href="list_users.php">Listar Usuários</a>
                                </li>
                            </ul>
                        </li>

                    <?php
                        }
                    ?>
                    <li class="submenu">
                        <a href="#">
                           <i class="fas fa-project-diagram"></i>
                            <span> Projetos </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li>
                             
                                <a href="form_project.php">Adicionar Projetos</a>
                            </li>
                            <li>
                             
                                <a href="list_projects.php">Listar Projetos</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#">
                           <i class="far fa-calendar-alt"></i>
                            <span> Eventos </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li>
                             
                                <a href="form_event.php">Adicinar Eventos</a>
                            </li>
                            <li>
                             
                                <a href="./examples/calendario.php">Listar Eventos</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#">
                           <i class="fas fa-project-diagram"></i>
                            <span> Pagamentos </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li>
                             
                                <a href="form_payment.php">Pagamentos à Receber</a>
                            </li>
                            <li>
                             
                                <a href="form_expense.php">Registrar Despesas</a>
                            </li>
                        </ul>
                    </li>
                </ul>




                <div class="clearfix"></div>

            </div>

            <div class="clearfix"></div>

        </div>

    </div>
        <!-- End Sidebar -->