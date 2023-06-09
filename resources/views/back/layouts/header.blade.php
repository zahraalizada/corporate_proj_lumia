<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title','Admin') | Admin Lumia</title>
    @notifyCss
    <link href="{{asset('back/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{asset('back/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('back/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @yield('css')

    <link href="{{asset('back/css/custom.css')}}" rel="stylesheet">




</head>

<body id="page-top">
<div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('adminDashboard')}}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item @if(Request::segment(2) == "dashboard") active @endif ">
            <a class="nav-link" href="{{route('adminDashboard')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <hr class="sidebar-divider">
        <li class="nav-item @if(Request::segment(2) == "abouts") active @endif ">
            <a class="nav-link " href="{{route('adminabouts.index')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Abouts</span></a>
        </li>
        <li class="nav-item @if(Request::segment(2) == "communications") active @endif ">
            <a class="nav-link" href="">
                <i class="fas fa-fw fa-table"></i>
                <span>Communications</span></a>
        </li>
        <li class="nav-item @if(Request::segment(2) == "contacts") active @endif ">
            <a class="nav-link" href="">
                <i class="fas fa-fw fa-table"></i>
                <span>Contacts</span></a>
        </li>
        <li class="nav-item @if(Request::segment(2) == "iconcards") active @endif ">
            <a class="nav-link" href="">
                <i class="fas fa-fw fa-table"></i>
                <span>Icon Cards</span></a>
        </li>
        <li class="nav-item @if(Request::segment(2) == "imagecards") active @endif ">
            <a class="nav-link" href="">
                <i class="fas fa-fw fa-table"></i>
                <span>Image Cards</span></a>
        </li>
        <li class="nav-item @if(Request::segment(2) == "portfolios") active @endif ">
            <a class="nav-link" href="">
                <i class="fas fa-fw fa-table"></i>
                <span>Portfolios</span></a>
        </li>
        <li class="nav-item @if(Request::segment(2) == "sociallinks") active @endif ">
            <a class="nav-link" href="">
                <i class="fas fa-fw fa-table"></i>
                <span>Social links</span></a>
        </li>
        <li class="nav-item @if(Request::segment(2) == "staticelements") active @endif ">
            <a class="nav-link" href="">
                <i class="fas fa-fw fa-table"></i>
                <span>Static Elements</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>


    </ul>

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <ul class="navbar-nav ml-auto">
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{auth()->user()->name}}</span>

                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
                    <a href="{{route('homepage')}}" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-globe fa-sm text-white-50"></i> Go to Website </a>
                </div>
