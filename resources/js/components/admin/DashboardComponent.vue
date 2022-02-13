<template>
    <!-- Main container for all page -->
    <div class="container-fluid p-0">
        <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
  
        <!-- Right navbar links -->
        <ul class="navbar-nav mr-auto-navbav">  
            <li class="nav-item">
                <a class="btn btn-danger" href="" title="نسجيل الخروج" style="padding: 0 8px; margin-top: 5px">
                    <i class="fas fa-sign-out-alt" style="font-size: 14px"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->
  
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <span class="brand-text font-weight-light">مشكاة نور</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item has-treeview menu-open">
                        <a href="" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                            القائمة الرئيسية
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
        
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>رصيد أول المدة</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>قيود اليومية</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>ح / الاستاذ</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>اليومية العامة</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>ميزان المراجعة</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
  
  
    <!-- <div class="content-wrapper">
        @yield('dashboard-page-content')
    </div> -->
  
  
    <aside class="control-sidebar control-sidebar-dark"></aside>
  
</div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                
            }
        },
        created () {
            this.setTitle();    /* Call function to set page title */
        },
        methods: {
            /* Set page title */
            setTitle () {
                document.title = this.$trans('app.home');
            },
        },
    }
</script>