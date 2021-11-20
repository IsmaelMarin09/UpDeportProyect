<?php 

require_once ("../../Model/conexion.php");
require_once ("../../Model/consultasAsideUsuarios.php");
require_once ("../../Model/consutasAdmin.php");
require_once ("../../Controller/listarUsersAdmin.php");
require_once ("../../Controller/profileAdmin.php");
require_once ("../../Controller/crearPublicaciones.php");
require_once ("../../Controller/cargarPublicaciones.php");


session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AdminLTE 3 | User Profile</title>

    <!-- vamos a conectar con la base de datos para jalar todas las publicaciones-->

    

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="../Assets/plugins/fontawesome-free/css/all.min.css"
    />
    <!-- Theme style -->
    <link rel="stylesheet" href="../Assets/css/adminlte.min.css" />
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"
              ><i class="fas fa-bars"></i
            ></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="../../index3.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <li class="nav-item">
            <a
              class="nav-link"
              data-widget="navbar-search"
              href="#"
              role="button"
            >
              <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input
                    class="form-control form-control-navbar"
                    type="search"
                    placeholder="Search"
                    aria-label="Search"
                  />
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                    <button
                      class="btn btn-navbar"
                      type="button"
                      data-widget="navbar-search"
                    >
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li>

          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-comments"></i>
              <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img
                    src="../Assets/img/user1-128x128.jpg"
                    alt="User Avatar"
                    class="img-size-50 mr-3 img-circle"
                  />
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Brad Diesel
                      <span class="float-right text-sm text-danger"
                        ><i class="fas fa-star"></i
                      ></span>
                    </h3>
                    <p class="text-sm">Call me whenever you can...</p>
                    <p class="text-sm text-muted">
                      <i class="far fa-clock mr-1"></i> 4 Hours Ago
                    </p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img
                    src="../Assets/img/user8-128x128.jpg"
                    alt="User Avatar"
                    class="img-size-50 img-circle mr-3"
                  />
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      John Pierce
                      <span class="float-right text-sm text-muted"
                        ><i class="fas fa-star"></i
                      ></span>
                    </h3>
                    <p class="text-sm">I got your message bro</p>
                    <p class="text-sm text-muted">
                      <i class="far fa-clock mr-1"></i> 4 Hours Ago
                    </p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img
                    src="../Assets/img/user3-128x128.jpg"
                    alt="User Avatar"
                    class="img-size-50 img-circle mr-3"
                  />
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Nora Silvester
                      <span class="float-right text-sm text-warning"
                        ><i class="fas fa-star"></i
                      ></span>
                    </h3>
                    <p class="text-sm">The subject goes here</p>
                    <p class="text-sm text-muted">
                      <i class="far fa-clock mr-1"></i> 4 Hours Ago
                    </p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer"
                >See All Messages</a
              >
            </div>
          </li>
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-item dropdown-header"
                >15 Notifications</span
              >
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer"
                >See All Notifications</a
              >
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              data-widget="control-sidebar"
              data-slide="true"
              href="#"
              role="button"
            >
              <i class="fas fa-th-large"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="../../index3.html" class="brand-link">
          <img
            src="../Assets/img/AdminLTELogo.png"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: 0.8"
          />
          <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img
                src="../Assets/img/user2-160x160.jpg"
                class="img-circle elevation-2"
                alt="User Image"
              />
            </div>
            <div class="info">
              <a href="#" class="d-block">Alexander Pierce</a>
            </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input
                class="form-control form-control-sidebar"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul
              class="nav nav-pills nav-sidebar flex-column"
              data-widget="treeview"
              role="menu"
              data-accordion="false"
            >
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../../index.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Dashboard v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Dashboard v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../index3.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Dashboard v3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="../widgets.html" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Widgets
                    <span class="right badge badge-danger">New</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Layout Options
                    <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-info right">6</span>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../layout/top-nav.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Top Navigation</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../layout/top-nav-sidebar.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Top Navigation + Sidebar</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../layout/boxed.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Boxed</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../layout/fixed-sidebar.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Fixed Sidebar</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      href="../layout/fixed-sidebar-custom.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon"></i>
                      <p>Fixed Sidebar <small>+ Custom Area</small></p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../layout/fixed-topnav.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Fixed Navbar</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../layout/fixed-footer.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Fixed Footer</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../layout/collapsed-sidebar.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Collapsed Sidebar</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>
                    Charts
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../charts/chartjs.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>ChartJS</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../charts/flot.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Flot</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../charts/inline.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Inline</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../charts/uplot.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>uPlot</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tree"></i>
                  <p>
                    UI Elements
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../UI/general.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>General</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../UI/icons.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Icons</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../UI/buttons.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Buttons</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../UI/sliders.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Sliders</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../UI/modals.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Modals & Alerts</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../UI/navbar.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Navbar & Tabs</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../UI/timeline.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Timeline</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../UI/ribbons.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Ribbons</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Forms
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../forms/general.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>General Elements</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../forms/advanced.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Advanced Elements</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../forms/editors.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Editors</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../forms/validation.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Validation</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Tables
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../tables/simple.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Simple Tables</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../tables/data.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>DataTables</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../tables/jsgrid.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>jsGrid</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-header">EXAMPLES</li>
              <li class="nav-item">
                <a href="../calendar.html" class="nav-link">
                  <i class="nav-icon far fa-calendar-alt"></i>
                  <p>
                    Calendar
                    <span class="badge badge-info right">2</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../gallery.html" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>Gallery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../kanban.html" class="nav-link">
                  <i class="nav-icon fas fa-columns"></i>
                  <p>Kanban Board</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-envelope"></i>
                  <p>
                    Mailbox
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../mailbox/mailbox.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Inbox</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../mailbox/compose.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Compose</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../mailbox/read-mail.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Read</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Pages
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../examples/invoice.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Invoice</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/profile.html" class="nav-link active">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Profile</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/e-commerce.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>E-commerce</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/projects.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Projects</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/project-add.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Project Add</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/project-edit.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Project Edit</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/project-detail.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Project Detail</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/contacts.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Contacts</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/faq.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>FAQ</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/contact-us.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Contact us</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>
                    Extras
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Login & Register v1
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="../examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Login v1</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Register v1</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          href="../examples/forgot-password.html"
                          class="nav-link"
                        >
                          <i class="far fa-circle nav-icon"></i>
                          <p>Forgot Password v1</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          href="../examples/recover-password.html"
                          class="nav-link"
                        >
                          <i class="far fa-circle nav-icon"></i>
                          <p>Recover Password v1</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Login & Register v2
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="../examples/login-v2.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Login v2</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../examples/register-v2.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Register v2</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          href="../examples/forgot-password-v2.html"
                          class="nav-link"
                        >
                          <i class="far fa-circle nav-icon"></i>
                          <p>Forgot Password v2</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          href="../examples/recover-password-v2.html"
                          class="nav-link"
                        >
                          <i class="far fa-circle nav-icon"></i>
                          <p>Recover Password v2</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/lockscreen.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Lockscreen</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      href="../examples/legacy-user-menu.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon"></i>
                      <p>Legacy User Menu</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/language-menu.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Language Menu</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/404.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Error 404</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/500.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Error 500</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/pace.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pace</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/blank.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Blank Page</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../starter.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Starter Page</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-search"></i>
                  <p>
                    Search
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../search/simple.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Simple Search</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../search/enhanced.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Enhanced</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-header">MISCELLANEOUS</li>
              <li class="nav-item">
                <a href="../../iframe.html" class="nav-link">
                  <i class="nav-icon fas fa-ellipsis-h"></i>
                  <p>Tabbed IFrame Plugin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://adminlte.io/docs/3.1/" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Documentation</p>
                </a>
              </li>
              <li class="nav-header">MULTI LEVEL EXAMPLE</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Level 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-circle"></i>
                  <p>
                    Level 1
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Level 2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Level 2
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Level 3</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Level 3</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Level 3</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Level 2</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Level 1</p>
                </a>
              </li>
              <li class="nav-header">LABELS</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p class="text">Important</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Warning</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Informational</p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Profile</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Perfil de Usuario</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- /.col -->
              <div class="">
                <div class="card">
                  <div class="card-header p-2">
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        <a
                          class="nav-link active"
                          href="#activity"
                          data-toggle="tab"
                          >Muro</a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#activity" data-toggle="tab"
                          >Mis Publicaciones</a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#settings" data-toggle="tab"
                          >Amigos</a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#timeline" data-toggle="tab"
                          >Perfil</a
                        >
                      </li>
                    </ul>
                  </div>

                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="active tab-pane" id="#timeline">
                        <!-- Post -->
                        <div id="containerPublicaciones">
                            <div class="post">
                                <?php
                                          cargarPublicaciones()
                                ?>
                            <!-- /.post -->
                          </div>
                        </div>  
                      <!-- /.tab-pane -->
                      <div class="tab-pane" id="timeline">
                        <!-- The timeline -->
                        <div class="timeline-inverse">
                          <!-- INICIO DE PERFIL -->
                          <div class="row">
                            <div class="col-md-6">
                              <!-- Profile Image -->
                              <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                  <div class="text-center">
                                    <img
                                      class="
                                        profile-user-img
                                        img-fluid img-circle
                                      "
                                      src="../Assets/img/alejandro.png"
                                      alt="User profile picture"
                                    />
                                  </div>

                                  <h3 class="profile-username text-center">
                                    Alejandro Diaz
                                  </h3>

                                  <p class="text-muted text-center">
                                    ENTRENADOR
                                  </p>

                                  <ul
                                    class="
                                      list-group list-group-unbordered
                                      mb-3
                                    "
                                  >
                                    <li class="list-group-item">
                                      <b>Seguidores</b>
                                      <a class="float-right">1K</a>
                                    </li>
                                    <li class="list-group-item">
                                      <b>Seguidos</b>
                                      <a class="float-right">200</a>
                                    </li>
                                    <li class="list-group-item">
                                      <b>Amigos</b>
                                      <a class="float-right">800</a>
                                    </li>
                                  </ul>

                                  <a href="#" class="btn btn-primary btn-block"
                                    ><b>Seguir</b></a
                                  >
                                </div>
                                <!-- /.card-body -->
                              </div>
                              <!-- /.card -->
                            </div>
                            <div class="card card-primary col-md-6">
                              <div class="card-header">
                                <h3 class="card-title">Sobre Mi</h3>
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body">
                                <strong
                                  ><i class="fas fa-book mr-1"></i>MI
                                  DESARROLLO</strong
                                >

                                <p class="text-muted">
                                  Actualmente trabajo en un colegio y soy
                                  entrenador de esta exelente app
                                </p>

                                <hr />

                                <strong
                                  ><i class="fas fa-map-marker-alt mr-1"></i>me
                                  localizo</strong
                                >

                                <p class="text-muted">Zipaquirá,Cundimarca</p>

                                <hr />

                                <strong
                                  ><i class="fas fa-pencil-alt mr-1"></i
                                  >RECONOCIMIENTOS</strong
                                >

                                <p class="text-muted">
                                  <span class="tag tag-danger"
                                    >3 Veces entrenador de la semana</span
                                  >
                                  <span class="tag tag-success"
                                    >1 Vez entrenador del mes</span
                                  >
                                  <span class="tag tag-info"
                                    >Campeón de salto alto</span
                                  >
                                  <span class="tag tag-warning"
                                    >Campeón de futbolsala</span
                                  >
                                  <span class="tag tag-primary"
                                    >Sub campeón de natación</span
                                  >
                                </p>

                                <hr />

                                <strong
                                  ><i class="far fa-file-alt mr-1"></i
                                  >DESCRIPCION</strong
                                >

                                <p class="text-muted">
                                  Soy un entrenador con mucha experiencia y
                                  buenas capacidades para el estado fisico de
                                  los deportistas.
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- OTRAS ESTADISTICAS  -->
                        <section class="content">
                          <div class="container-fluid">
                            <!-- row -->
                            <div class="row">
                              <div class="col-12">
                                <!-- jQuery Knob -->
                                <div class="card">
                                  <div class="card-header">
                                    <h3 class="card-title">
                                      <i class="far fa-chart-bar"></i>
                                      jQuery Knob
                                    </h3>

                                    <div class="card-tools">
                                      <button
                                        type="button"
                                        class="btn btn-tool"
                                        data-card-widget="collapse"
                                      >
                                        <i class="fas fa-minus"></i>
                                      </button>
                                      <button
                                        type="button"
                                        class="btn btn-tool"
                                        data-card-widget="remove"
                                      >
                                        <i class="fas fa-times"></i>
                                      </button>
                                    </div>
                                  </div>
                                  <!-- /.card-header -->
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-6 col-md-3 text-center">
                                        <input
                                          type="text"
                                          class="knob"
                                          value="30"
                                          data-width="90"
                                          data-height="90"
                                          data-fgColor="#3c8dbc"
                                        />

                                        <div class="knob-label">
                                          New Visitors
                                        </div>
                                      </div>
                                      <!-- ./col -->
                                      <div class="col-6 col-md-3 text-center">
                                        <input
                                          type="text"
                                          class="knob"
                                          value="70"
                                          data-width="90"
                                          data-height="90"
                                          data-fgColor="#f56954"
                                        />

                                        <div class="knob-label">
                                          Bounce Rate
                                        </div>
                                      </div>
                                      <!-- ./col -->
                                      <div class="col-6 col-md-3 text-center">
                                        <input
                                          type="text"
                                          class="knob"
                                          value="-80"
                                          data-min="-150"
                                          data-max="150"
                                          data-width="90"
                                          data-height="90"
                                          data-fgColor="#00a65a"
                                        />

                                        <div class="knob-label">
                                          Server Load
                                        </div>
                                      </div>
                                      <!-- ./col -->
                                      <div class="col-6 col-md-3 text-center">
                                        <input
                                          type="text"
                                          class="knob"
                                          value="40"
                                          data-width="90"
                                          data-height="90"
                                          data-fgColor="#00c0ef"
                                        />

                                        <div class="knob-label">Disk Space</div>
                                      </div>
                                      <!-- ./col -->
                                    </div>
                                    <!-- /.row -->

                                    <div class="row">
                                      <div class="col-6 text-center">
                                        <input
                                          type="text"
                                          class="knob"
                                          value="90"
                                          data-width="90"
                                          data-height="90"
                                          data-fgColor="#932ab6"
                                        />

                                        <div class="knob-label">Bandwidth</div>
                                      </div>
                                      <!-- ./col -->
                                      <div class="col-6 text-center">
                                        <input
                                          type="text"
                                          class="knob"
                                          value="50"
                                          data-width="90"
                                          data-height="90"
                                          data-fgColor="#39CCCC"
                                        />

                                        <div class="knob-label">CPU</div>
                                      </div>
                                      <!-- ./col -->
                                    </div>
                                    <!-- /.row -->
                                  </div>
                                  <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <div class="row">
                              <div class="col-12">
                                <div class="card">
                                  <div class="card-header">
                                    <h3 class="card-title">
                                      <i class="far fa-chart-bar"></i>
                                      jQuery Knob Different Sizes
                                    </h3>

                                    <div class="card-tools">
                                      <button
                                        type="button"
                                        class="btn btn-tool"
                                        data-card-widget="collapse"
                                      >
                                        <i class="fas fa-minus"></i>
                                      </button>
                                      <button
                                        type="button"
                                        class="btn btn-tool"
                                        data-card-widget="remove"
                                      >
                                        <i class="fas fa-times"></i>
                                      </button>
                                    </div>
                                  </div>
                                  <!-- /.card-header -->
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-6 col-md-3 text-center">
                                        <input
                                          type="text"
                                          class="knob"
                                          value="30"
                                          data-width="90"
                                          data-height="90"
                                          data-fgColor="#3c8dbc"
                                          data-readonly="true"
                                        />

                                        <div class="knob-label">
                                          data-width="90"
                                        </div>
                                      </div>
                                      <!-- ./col -->
                                      <div class="col-6 col-md-3 text-center">
                                        <input
                                          type="text"
                                          class="knob"
                                          value="30"
                                          data-width="120"
                                          data-height="120"
                                          data-fgColor="#f56954"
                                        />

                                        <div class="knob-label">
                                          data-width="120"
                                        </div>
                                      </div>
                                      <!-- ./col -->
                                      <div class="col-6 col-md-3 text-center">
                                        <input
                                          type="text"
                                          class="knob"
                                          value="30"
                                          data-thickness="0.1"
                                          data-width="90"
                                          data-height="90"
                                          data-fgColor="#00a65a"
                                        />

                                        <div class="knob-label">
                                          data-thickness="0.1"
                                        </div>
                                      </div>
                                      <!-- ./col -->
                                      <div class="col-6 col-md-3 text-center">
                                        <input
                                          type="text"
                                          class="knob"
                                          data-thickness="0.2"
                                          data-angleArc="250"
                                          data-angleOffset="-125"
                                          value="30"
                                          data-width="120"
                                          data-height="120"
                                          data-fgColor="#00c0ef"
                                        />

                                        <div class="knob-label">
                                          data-angleArc="250"
                                        </div>
                                      </div>
                                      <!-- ./col -->
                                    </div>
                                    <!-- /.row -->
                                  </div>
                                  <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <div class="row">
                              <div class="col-12">
                                <div class="card">
                                  <div class="card-header">
                                    <h3 class="card-title">
                                      <i class="far fa-chart-bar"></i>
                                      jQuery Knob Tron Style
                                    </h3>

                                    <div class="card-tools">
                                      <button
                                        type="button"
                                        class="btn btn-tool"
                                        data-card-widget="collapse"
                                      >
                                        <i class="fas fa-minus"></i>
                                      </button>
                                      <button
                                        type="button"
                                        class="btn btn-tool"
                                        data-card-widget="remove"
                                      >
                                        <i class="fas fa-times"></i>
                                      </button>
                                    </div>
                                  </div>
                                  <!-- /.card-header -->
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-6 col-md-3 text-center">
                                        <input
                                          type="text"
                                          class="knob"
                                          value="80"
                                          data-skin="tron"
                                          data-thickness="0.2"
                                          data-width="90"
                                          data-height="90"
                                          data-fgColor="#3c8dbc"
                                          data-readonly="true"
                                        />

                                        <div class="knob-label">
                                          data-width="90"
                                        </div>
                                      </div>
                                      <!-- ./col -->
                                      <div class="col-6 col-md-3 text-center">
                                        <input
                                          type="text"
                                          class="knob"
                                          value="60"
                                          data-skin="tron"
                                          data-thickness="0.2"
                                          data-width="120"
                                          data-height="120"
                                          data-fgColor="#f56954"
                                        />

                                        <div class="knob-label">
                                          data-width="120"
                                        </div>
                                      </div>
                                      <!-- ./col -->
                                      <div class="col-6 col-md-3 text-center">
                                        <input
                                          type="text"
                                          class="knob"
                                          value="10"
                                          data-skin="tron"
                                          data-thickness="0.1"
                                          data-width="90"
                                          data-height="90"
                                          data-fgColor="#00a65a"
                                        />

                                        <div class="knob-label">
                                          data-thickness="0.1"
                                        </div>
                                      </div>
                                      <!-- ./col -->
                                      <div class="col-6 col-md-3 text-center">
                                        <input
                                          type="text"
                                          class="knob"
                                          value="100"
                                          data-skin="tron"
                                          data-thickness="0.2"
                                          data-angleArc="250"
                                          data-angleOffset="-125"
                                          data-width="120"
                                          data-height="120"
                                          data-fgColor="#00c0ef"
                                        />

                                        <div class="knob-label">
                                          data-angleArc="250"
                                        </div>
                                      </div>
                                      <!-- ./col -->
                                    </div>
                                    <!-- /.row -->
                                  </div>
                                  <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- /.row -->
                          </div>
                          <!-- /.container-fluid -->
                        </section>
                        <!-- ESTADISTICAS PRIMERAS -->
                        <section class="content">
                          <div class="container-fluid">
                            <div class="row">
                              <div class="col-12">
                                <!-- interactive chart -->

                                <div id="interactive"></div>

                                <!-- /.card -->
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <div class="row">
                              <div class="col-md-6">
                                <!-- Line chart -->
                                <div class="card card-primary card-outline">
                                  <div class="card-header">
                                    <h3 class="card-title">
                                      <i class="far fa-chart-bar"></i>
                                      Line Chart
                                    </h3>

                                    <div class="card-tools">
                                      <button
                                        type="button"
                                        class="btn btn-tool"
                                        data-card-widget="collapse"
                                      >
                                        <i class="fas fa-minus"></i>
                                      </button>
                                      <button
                                        type="button"
                                        class="btn btn-tool"
                                        data-card-widget="remove"
                                      >
                                        <i class="fas fa-times"></i>
                                      </button>
                                    </div>
                                  </div>
                                  <div class="card-body">
                                    <div
                                      id="line-chart"
                                      style="height: 300px"
                                    ></div>
                                  </div>
                                  <!-- /.card-body-->
                                </div>
                                <!-- /.card -->

                                <!-- Area chart -->
                                <div class="card card-primary card-outline">
                                  <div class="card-header">
                                    <h3 class="card-title">
                                      <i class="far fa-chart-bar"></i>
                                      Area Chart
                                    </h3>

                                    <div class="card-tools">
                                      <button
                                        type="button"
                                        class="btn btn-tool"
                                        data-card-widget="collapse"
                                      >
                                        <i class="fas fa-minus"></i>
                                      </button>
                                      <button
                                        type="button"
                                        class="btn btn-tool"
                                        data-card-widget="remove"
                                      >
                                        <i class="fas fa-times"></i>
                                      </button>
                                    </div>
                                  </div>
                                  <div class="card-body">
                                    <div
                                      id="area-chart"
                                      style="height: 338px"
                                      class="full-width-chart"
                                    ></div>
                                  </div>
                                  <!-- /.card-body-->
                                </div>
                                <!-- /.card -->
                              </div>
                              <!-- /.col -->

                              <div class="col-md-6">
                                <!-- Bar chart -->
                                <div class="card card-primary card-outline">
                                  <div class="card-header">
                                    <h3 class="card-title">
                                      <i class="far fa-chart-bar"></i>
                                      Bar Chart
                                    </h3>

                                    <div class="card-tools">
                                      <button
                                        type="button"
                                        class="btn btn-tool"
                                        data-card-widget="collapse"
                                      >
                                        <i class="fas fa-minus"></i>
                                      </button>
                                      <button
                                        type="button"
                                        class="btn btn-tool"
                                        data-card-widget="remove"
                                      >
                                        <i class="fas fa-times"></i>
                                      </button>
                                    </div>
                                  </div>
                                  <div class="card-body">
                                    <div
                                      id="bar-chart"
                                      style="height: 300px"
                                    ></div>
                                  </div>
                                  <!-- /.card-body-->
                                </div>
                                <!-- /.card -->

                                <!-- Donut chart -->
                                <div class="card card-primary card-outline">
                                  <div class="card-header">
                                    <h3 class="card-title">
                                      <i class="far fa-chart-bar"></i>
                                      Donut Chart
                                    </h3>

                                    <div class="card-tools">
                                      <button
                                        type="button"
                                        class="btn btn-tool"
                                        data-card-widget="collapse"
                                      >
                                        <i class="fas fa-minus"></i>
                                      </button>
                                      <button
                                        type="button"
                                        class="btn btn-tool"
                                        data-card-widget="remove"
                                      >
                                        <i class="fas fa-times"></i>
                                      </button>
                                    </div>
                                  </div>
                                  <div class="card-body">
                                    <div
                                      id="donut-chart"
                                      style="height: 300px"
                                    ></div>
                                  </div>
                                  <!-- /.card-body-->
                                </div>
                                <!-- /.card -->
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row -->
                          </div>
                          <!-- /.container-fluid -->
                        </section>
                      </div>

                      <!-- FIN PARTE PERFIL -->
                      <!-- /.tab-pane -->

                      <div class="tab-pane" id="settings">
                        <section class="content">
                          <!-- Default box -->
                          <div class="card card-solid">
                            <div class="card-body pb-0">
                              <div class="row">
                                <div
                                  class="
                                    col-12 col-sm-6 col-md-4
                                    d-flex
                                    align-items-stretch
                                    flex-column
                                  "
                                >
                                  <div class="card bg-light d-flex flex-fill">
                                    <div
                                      class="
                                        card-header
                                        text-muted
                                        border-bottom-0
                                      "
                                    ></div>
                                    <div class="card-body pt-0">
                                      <div class="row">
                                        <div class="col-7">
                                          <h2 class="lead">
                                            <b>Nicole Pearson</b>
                                          </h2>
                                          <p class="text-muted text-sm">
                                            <b>About: </b> Web Designer / UX /
                                            Graphic Artist / Coffee Lover
                                          </p>
                                          <ul
                                            class="ml-4 mb-0 fa-ul text-muted"
                                          >
                                            <li class="small">
                                              <span class="fa-li"
                                                ><i
                                                  class="fas fa-lg fa-building"
                                                ></i
                                              ></span>
                                              Address: Chia, Cundinamarca
                                            </li>
                                            <li class="small"></li>
                                          </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                          <img
                                            src="../Assets/img/user1-128x128.jpg"
                                            alt="user-avatar"
                                            class="img-circle img-fluid"
                                          />
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                          <i class="fas fa-comments"></i>
                                        </a>
                                        <a
                                          href="#"
                                          class="btn btn-sm btn-primary"
                                        >
                                          <i class="fas fa-user"></i> View
                                          Profile
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  class="
                                    col-12 col-sm-6 col-md-4
                                    d-flex
                                    align-items-stretch
                                    flex-column
                                  "
                                >
                                  <div class="card bg-light d-flex flex-fill">
                                    <div
                                      class="
                                        card-header
                                        text-muted
                                        border-bottom-0
                                      "
                                    ></div>
                                    <div class="card-body pt-0">
                                      <div class="row">
                                        <div class="col-7">
                                          <h2 class="lead">
                                            <b>Nicole Pearson</b>
                                          </h2>
                                          <p class="text-muted text-sm">
                                            <b>About: </b> Web Designer / UX /
                                            Graphic Artist / Coffee Lover
                                          </p>
                                          <ul
                                            class="ml-4 mb-0 fa-ul text-muted"
                                          >
                                            <li class="small">
                                              <span class="fa-li"
                                                ><i
                                                  class="fas fa-lg fa-building"
                                                ></i
                                              ></span>
                                              Address: Chia, Cundinamarca
                                            </li>
                                            <li class="small"></li>
                                          </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                          <img
                                            src="../Assets/img/user2-160x160.jpg"
                                            alt="user-avatar"
                                            class="img-circle img-fluid"
                                          />
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                          <i class="fas fa-comments"></i>
                                        </a>
                                        <a
                                          href="#"
                                          class="btn btn-sm btn-primary"
                                        >
                                          <i class="fas fa-user"></i> View
                                          Profile
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  class="
                                    col-12 col-sm-6 col-md-4
                                    d-flex
                                    align-items-stretch
                                    flex-column
                                  "
                                >
                                  <div class="card bg-light d-flex flex-fill">
                                    <div
                                      class="
                                        card-header
                                        text-muted
                                        border-bottom-0
                                      "
                                    ></div>
                                    <div class="card-body pt-0">
                                      <div class="row">
                                        <div class="col-7">
                                          <h2 class="lead">
                                            <b>Nicole Pearson</b>
                                          </h2>
                                          <p class="text-muted text-sm">
                                            <b>About: </b> Web Designer / UX /
                                            Graphic Artist / Coffee Lover
                                          </p>
                                          <ul
                                            class="ml-4 mb-0 fa-ul text-muted"
                                          >
                                            <li class="small">
                                              <span class="fa-li"
                                                ><i
                                                  class="fas fa-lg fa-building"
                                                ></i
                                              ></span>
                                              Address: Chia, Cundinamarca
                                            </li>
                                            <li class="small"></li>
                                          </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                          <img
                                            src="../Assets/img/user1-128x128.jpg"
                                            alt="user-avatar"
                                            class="img-circle img-fluid"
                                          />
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                          <i class="fas fa-comments"></i>
                                        </a>
                                        <a
                                          href="#"
                                          class="btn btn-sm btn-primary"
                                        >
                                          <i class="fas fa-user"></i> View
                                          Profile
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  class="
                                    col-12 col-sm-6 col-md-4
                                    d-flex
                                    align-items-stretch
                                    flex-column
                                  "
                                >
                                  <div class="card bg-light d-flex flex-fill">
                                    <div
                                      class="
                                        card-header
                                        text-muted
                                        border-bottom-0
                                      "
                                    ></div>
                                    <div class="card-body pt-0">
                                      <div class="row">
                                        <div class="col-7">
                                          <h2 class="lead">
                                            <b>Nicole Pearson</b>
                                          </h2>
                                          <p class="text-muted text-sm">
                                            <b>About: </b> Web Designer / UX /
                                            Graphic Artist / Coffee Lover
                                          </p>
                                          <ul
                                            class="ml-4 mb-0 fa-ul text-muted"
                                          >
                                            <li class="small">
                                              <span class="fa-li"
                                                ><i
                                                  class="fas fa-lg fa-building"
                                                ></i
                                              ></span>
                                              Address: Chia, Cundinamarca
                                            </li>
                                            <li class="small"></li>
                                          </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                          <img
                                            src="../Assets/img/user2-160x160.jpg"
                                            alt="user-avatar"
                                            class="img-circle img-fluid"
                                          />
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                          <i class="fas fa-comments"></i>
                                        </a>
                                        <a
                                          href="#"
                                          class="btn btn-sm btn-primary"
                                        >
                                          <i class="fas fa-user"></i> View
                                          Profile
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  class="
                                    col-12 col-sm-6 col-md-4
                                    d-flex
                                    align-items-stretch
                                    flex-column
                                  "
                                >
                                  <div class="card bg-light d-flex flex-fill">
                                    <div
                                      class="
                                        card-header
                                        text-muted
                                        border-bottom-0
                                      "
                                    ></div>
                                    <div class="card-body pt-0">
                                      <div class="row">
                                        <div class="col-7">
                                          <h2 class="lead">
                                            <b>Nicole Pearson</b>
                                          </h2>
                                          <p class="text-muted text-sm">
                                            <b>About: </b> Web Designer / UX /
                                            Graphic Artist / Coffee Lover
                                          </p>
                                          <ul
                                            class="ml-4 mb-0 fa-ul text-muted"
                                          >
                                            <li class="small"></li>
                                          </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                          <img
                                            src="../Assets/img/user1-128x128.jpg"
                                            alt="user-avatar"
                                            class="img-circle img-fluid"
                                          />
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                          <i class="fas fa-comments"></i>
                                        </a>
                                        <a
                                          href="#"
                                          class="btn btn-sm btn-primary"
                                        >
                                          <i class="fas fa-user"></i> View
                                          Profile
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  class="
                                    col-12 col-sm-6 col-md-4
                                    d-flex
                                    align-items-stretch
                                    flex-column
                                  "
                                >
                                  <div class="card bg-light d-flex flex-fill">
                                    <div
                                      class="
                                        card-header
                                        text-muted
                                        border-bottom-0
                                      "
                                    ></div>
                                    <div class="card-body pt-0">
                                      <div class="row">
                                        <div class="col-7">
                                          <h2 class="lead">
                                            <b>Nicole Pearson</b>
                                          </h2>
                                          <p class="text-muted text-sm">
                                            <b>About: </b> Web Designer / UX /
                                            Graphic Artist / Coffee Lover
                                          </p>
                                          <ul
                                            class="ml-4 mb-0 fa-ul text-muted"
                                          >
                                            <li class="small">
                                              <span class="fa-li"
                                                ><i
                                                  class="fas fa-lg fa-building"
                                                ></i
                                              ></span>
                                              Address: Chia, Cundinamarca
                                            </li>
                                            <li class="small"></li>
                                          </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                          <img
                                            src="../Assets/img/user1-128x128.jpg"
                                            alt="user-avatar"
                                            class="img-circle img-fluid"
                                          />
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                          <i class="fas fa-comments"></i>
                                        </a>
                                        <a
                                          href="#"
                                          class="btn btn-sm btn-primary"
                                        >
                                          <i class="fas fa-user"></i> View
                                          Profile
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  class="
                                    col-12 col-sm-6 col-md-4
                                    d-flex
                                    align-items-stretch
                                    flex-column
                                  "
                                >
                                  <div class="card bg-light d-flex flex-fill">
                                    <div
                                      class="
                                        card-header
                                        text-muted
                                        border-bottom-0
                                      "
                                    ></div>
                                    <div class="card-body pt-0">
                                      <div class="row">
                                        <div class="col-7">
                                          <h2 class="lead">
                                            <b>Nicole Pearson</b>
                                          </h2>
                                          <p class="text-muted text-sm">
                                            <b>About: </b> Web Designer / UX /
                                            Graphic Artist / Coffee Lover
                                          </p>
                                          <ul
                                            class="ml-4 mb-0 fa-ul text-muted"
                                          >
                                            <li class="small">
                                              <span class="fa-li"
                                                ><i
                                                  class="fas fa-lg fa-building"
                                                ></i
                                              ></span>
                                              Address: Chia, Cundinamarca
                                            </li>
                                          </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                          <img
                                            src="../Assets/img/user1-128x128.jpg"
                                            alt="user-avatar"
                                            class="img-circle img-fluid"
                                          />
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                          <i class="fas fa-comments"></i>
                                        </a>
                                        <a
                                          href="#"
                                          class="btn btn-sm btn-primary"
                                        >
                                          <i class="fas fa-user"></i> View
                                          Profile
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  class="
                                    col-12 col-sm-6 col-md-4
                                    d-flex
                                    align-items-stretch
                                    flex-column
                                  "
                                >
                                  <div class="card bg-light d-flex flex-fill">
                                    <div
                                      class="
                                        card-header
                                        text-muted
                                        border-bottom-0
                                      "
                                    ></div>
                                    <div class="card-body pt-0">
                                      <div class="row">
                                        <div class="col-7">
                                          <h2 class="lead">
                                            <b>Nicole Pearson</b>
                                          </h2>
                                          <p class="text-muted text-sm">
                                            <b>About: </b> Web Designer / UX /
                                            Graphic Artist / Coffee Lover
                                          </p>
                                          <ul
                                            class="ml-4 mb-0 fa-ul text-muted"
                                          >
                                            <li class="small">
                                              <span class="fa-li"
                                                ><i
                                                  class="fas fa-lg fa-building"
                                                ></i
                                              ></span>
                                              Address: Chia, Cundinamarca
                                            </li>
                                            <li class="small"></li>
                                          </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                          <img
                                            src="../Assets/img/user1-128x128.jpg"
                                            alt="user-avatar"
                                            class="img-circle img-fluid"
                                          />
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                          <i class="fas fa-comments"></i>
                                        </a>
                                        <a
                                          href="#"
                                          class="btn btn-sm btn-primary"
                                        >
                                          <i class="fas fa-user"></i> View
                                          Profile
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  class="
                                    col-12 col-sm-6 col-md-4
                                    d-flex
                                    align-items-stretch
                                    flex-column
                                  "
                                >
                                  <div class="card bg-light d-flex flex-fill">
                                    <div
                                      class="
                                        card-header
                                        text-muted
                                        border-bottom-0
                                      "
                                    ></div>
                                    <div class="card-body pt-0">
                                      <div class="row">
                                        <div class="col-7">
                                          <h2 class="lead">
                                            <b>Nicole Pearson</b>
                                          </h2>
                                          <p class="text-muted text-sm">
                                            <b>About: </b> Web Designer / UX /
                                            Graphic Artist / Coffee Lover
                                          </p>
                                          <ul
                                            class="ml-4 mb-0 fa-ul text-muted"
                                          >
                                            <li class="small">
                                              <span class="fa-li"
                                                ><i
                                                  class="fas fa-lg fa-building"
                                                ></i
                                              ></span>
                                              Address: Chia, Cundinamarca
                                            </li>
                                            <li class="small"></li>
                                          </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                          <img
                                            src="../Assets/img/user2-160x160.jpg"
                                            alt="user-avatar"
                                            class="img-circle img-fluid"
                                          />
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                          <i class="fas fa-comments"></i>
                                        </a>
                                        <a
                                          href="#"
                                          class="btn btn-sm btn-primary"
                                        >
                                          <i class="fas fa-user"></i> View
                                          Profile
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                              <nav aria-label="Contacts Page Navigation">
                                <ul
                                  class="pagination justify-content-center m-0"
                                >
                                  <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                  </li>
                                  <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                  </li>
                                  <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                  </li>
                                  <li class="page-item">
                                    <a class="page-link" href="#">4</a>
                                  </li>
                                  <li class="page-item">
                                    <a class="page-link" href="#">5</a>
                                  </li>
                                  <li class="page-item">
                                    <a class="page-link" href="#">6</a>
                                  </li>
                                  <li class="page-item">
                                    <a class="page-link" href="#">7</a>
                                  </li>
                                  <li class="page-item">
                                    <a class="page-link" href="#">8</a>
                                  </li>
                                </ul>
                              </nav>
                            </div>
                            <!-- /.card-footer -->
                          </div>
                          <!-- /.card -->
                        </section>
                      </div>
                      <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="float-right d-none d-sm-block"><b>Version</b> 3.1.0</div>
        <strong
          >Copyright &copy; 2014-2021
          <a href="https://adminlte.io">AdminLTE.io</a>.</strong
        >
        All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../Assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../Assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../Assets/js/adminlte.min.js"></script>
    <!-- jQuery Knob -->
    <script src="../Assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- Sparkline -->
    <script src="../Assets/plugins/sparklines/sparkline.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../Assets/js/demo.js"></script>

    <!-- SCRIPT PRIMERAS ESTADITICAS -->
    <!-- FLOT CHARTS -->
    <script src="../Assets/plugins/flot/jquery.flot.js"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="../Assets/plugins/flAssets/plugins/jquery.flot.resize.js"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="../Assets/plugins/flAssets/plugins/jquery.flot.pie.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../Assets/js/demo.js"></script>
    <script>
      $(function () {
        /*
         * Flot Interactive Chart
         * -----------------------
         */
        // We use an inline data source in the example, usually data would
        // be fetched from a server
        var data = [],
          totalPoints = 100;

        function getRandomData() {
          if (data.length > 0) {
            data = data.slice(1);
          }

          // Do a random walk
          while (data.length < totalPoints) {
            var prev = data.length > 0 ? data[data.length - 1] : 50,
              y = prev + Math.random() * 10 - 5;

            if (y < 0) {
              y = 0;
            } else if (y > 100) {
              y = 100;
            }

            data.push(y);
          }

          // Zip the generated y values with the x values
          var res = [];
          for (var i = 0; i < data.length; ++i) {
            res.push([i, data[i]]);
          }

          return res;
        }

        var interactive_plot = $.plot(
          "#interactive",
          [
            {
              data: getRandomData(),
            },
          ],
          {
            grid: {
              borderColor: "#f3f3f3",
              borderWidth: 1,
              tickColor: "#f3f3f3",
            },
            series: {
              color: "#3c8dbc",
              lines: {
                lineWidth: 2,
                show: true,
                fill: true,
              },
            },
            yaxis: {
              min: 0,
              max: 100,
              show: true,
            },
            xaxis: {
              show: true,
            },
          }
        );

        var updateInterval = 500; //Fetch data ever x milliseconds
        var realtime = "on"; //If == to on then fetch data every x seconds. else stop fetching
        function update() {
          interactive_plot.setData([getRandomData()]);

          // Since the axes don't change, we don't need to call plot.setupGrid()
          interactive_plot.draw();
          if (realtime === "on") {
            setTimeout(update, updateInterval);
          }
        }

        //INITIALIZE REALTIME DATA FETCHING
        if (realtime === "on") {
          update();
        }
        //REALTIME TOGGLE
        $("#realtime .btn").click(function () {
          if ($(this).data("toggle") === "on") {
            realtime = "on";
          } else {
            realtime = "off";
          }
          update();
        });
        /*
         * END INTERACTIVE CHART
         */

        /*
         * LINE CHART
         * ----------
         */
        //LINE randomly generated data

        var sin = [],
          cos = [];
        for (var i = 0; i < 14; i += 0.5) {
          sin.push([i, Math.sin(i)]);
          cos.push([i, Math.cos(i)]);
        }
        var line_data1 = {
          data: sin,
          color: "#3c8dbc",
        };
        var line_data2 = {
          data: cos,
          color: "#00c0ef",
        };
        $.plot("#line-chart", [line_data1, line_data2], {
          grid: {
            hoverable: true,
            borderColor: "#f3f3f3",
            borderWidth: 1,
            tickColor: "#f3f3f3",
          },
          series: {
            shadowSize: 0,
            lines: {
              show: true,
            },
            points: {
              show: true,
            },
          },
          lines: {
            fill: false,
            color: ["#3c8dbc", "#f56954"],
          },
          yaxis: {
            show: true,
          },
          xaxis: {
            show: true,
          },
        });
        //Initialize tooltip on hover
        $('<div class="tooltip-inner" id="line-chart-tooltip"></div>')
          .css({
            position: "absolute",
            display: "none",
            opacity: 0.8,
          })
          .appendTo("body");
        $("#line-chart").bind("plothover", function (event, pos, item) {
          if (item) {
            var x = item.datapoint[0].toFixed(2),
              y = item.datapoint[1].toFixed(2);

            $("#line-chart-tooltip")
              .html(item.series.label + " of " + x + " = " + y)
              .css({
                top: item.pageY + 5,
                left: item.pageX + 5,
              })
              .fadeIn(200);
          } else {
            $("#line-chart-tooltip").hide();
          }
        });
        /* END LINE CHART */

        /*
         * FULL WIDTH STATIC AREA CHART
         * -----------------
         */
        var areaData = [
          [2, 88.0],
          [3, 93.3],
          [4, 102.0],
          [5, 108.5],
          [6, 115.7],
          [7, 115.6],
          [8, 124.6],
          [9, 130.3],
          [10, 134.3],
          [11, 141.4],
          [12, 146.5],
          [13, 151.7],
          [14, 159.9],
          [15, 165.4],
          [16, 167.8],
          [17, 168.7],
          [18, 169.5],
          [19, 168.0],
        ];
        $.plot("#area-chart", [areaData], {
          grid: {
            borderWidth: 0,
          },
          series: {
            shadowSize: 0, // Drawing is faster without shadows
            color: "#00c0ef",
            lines: {
              fill: true, //Converts the line chart to area chart
            },
          },
          yaxis: {
            show: false,
          },
          xaxis: {
            show: false,
          },
        });

        /* END AREA CHART */

        /*
         * BAR CHART
         * ---------
         */

        var bar_data = {
          data: [
            [1, 10],
            [2, 8],
            [3, 4],
            [4, 13],
            [5, 17],
            [6, 9],
          ],
          bars: { show: true },
        };
        $.plot("#bar-chart", [bar_data], {
          grid: {
            borderWidth: 1,
            borderColor: "#f3f3f3",
            tickColor: "#f3f3f3",
          },
          series: {
            bars: {
              show: true,
              barWidth: 0.5,
              align: "center",
            },
          },
          colors: ["#3c8dbc"],
          xaxis: {
            ticks: [
              [1, "January"],
              [2, "February"],
              [3, "March"],
              [4, "April"],
              [5, "May"],
              [6, "June"],
            ],
          },
        });
        /* END BAR CHART */

        /*
         * DONUT CHART
         * -----------
         */

        var donutData = [
          {
            label: "Series2",
            data: 30,
            color: "#3c8dbc",
          },
          {
            label: "Series3",
            data: 20,
            color: "#0073b7",
          },
          {
            label: "Series4",
            data: 50,
            color: "#00c0ef",
          },
        ];
        $.plot("#donut-chart", donutData, {
          series: {
            pie: {
              show: true,
              radius: 1,
              innerRadius: 0.5,
              label: {
                show: true,
                radius: 2 / 3,
                formatter: labelFormatter,
                threshold: 0.1,
              },
            },
          },
          legend: {
            show: false,
          },
        });
        /*
         * END DONUT CHART
         */
      });

      /*
       * Custom Label formatter
       * ----------------------
       */
      function labelFormatter(label, series) {
        return (
          '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">' +
          label +
          "<br>" +
          Math.round(series.percent) +
          "%</div>"
        );
      }
    </script>
    <script>
      $(function () {
        /* jQueryKnob */

        $(".knob").knob({
          /*change : function (value) {
           //console.log("change : " + value);
           },
           release : function (value) {
           console.log("release : " + value);
           },
           cancel : function () {
           console.log("cancel : " + this.value);
           },*/
          draw: function () {
            // "tron" case
            if (this.$.data("skin") == "tron") {
              var a = this.angle(this.cv), // Angle
                sa = this.startAngle, // Previous start angle
                sat = this.startAngle, // Start angle
                ea, // Previous end angle
                eat = sat + a, // End angle
                r = true;

              this.g.lineWidth = this.lineWidth;

              this.o.cursor && (sat = eat - 0.3) && (eat = eat + 0.3);

              if (this.o.displayPrevious) {
                ea = this.startAngle + this.angle(this.value);
                this.o.cursor && (sa = ea - 0.3) && (ea = ea + 0.3);
                this.g.beginPath();
                this.g.strokeStyle = this.previousColor;
                this.g.arc(
                  this.xy,
                  this.xy,
                  this.radius - this.lineWidth,
                  sa,
                  ea,
                  false
                );
                this.g.stroke();
              }

              this.g.beginPath();
              this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
              this.g.arc(
                this.xy,
                this.xy,
                this.radius - this.lineWidth,
                sat,
                eat,
                false
              );
              this.g.stroke();

              this.g.lineWidth = 2;
              this.g.beginPath();
              this.g.strokeStyle = this.o.fgColor;
              this.g.arc(
                this.xy,
                this.xy,
                this.radius - this.lineWidth + 1 + (this.lineWidth * 2) / 3,
                0,
                2 * Math.PI,
                false
              );
              this.g.stroke();

              return false;
            }
          },
        });
        /* END JQUERY KNOB */

        //INITIALIZE SPARKLINE CHARTS
        var sparkline1 = new Sparkline($("#sparkline-1")[0], {
          width: 240,
          height: 70,
          lineColor: "#92c1dc",
          endColor: "#92c1dc",
        });
        var sparkline2 = new Sparkline($("#sparkline-2")[0], {
          width: 240,
          height: 70,
          lineColor: "#f56954",
          endColor: "#f56954",
        });
        var sparkline3 = new Sparkline($("#sparkline-3")[0], {
          width: 240,
          height: 70,
          lineColor: "#3af221",
          endColor: "#3af221",
        });

        sparkline1.draw([1000, 1200, 920, 927, 931, 1027, 819, 930, 1021]);
        sparkline2.draw([
          515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921,
        ]);
        sparkline3.draw([15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21]);
      });
    </script>
  </body>
</html>
