<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

    </style>

</head>

<body>
    <!-- <div class="container" style="margin-left: 100px">
        <img src="{{ asset('img/logo.png') }}" alt="" width="100" height="100">
        <div class="container px-lg-3 py-1 shadow-5 rounded-3 rounded-lg-pill  " style="background-color: orange" ;>
            <nav class="navbar navbar-expand-lg navbar-dark p-0 " id="navbar">
                <div class="container px-sm-0">
                    <div class=" collapse navbar-collapse" id="navbarCollapse">

                        <ul class="navbar-nav gap-2 mx-lg-auto">
                            <li class="nav-item  btn btn-outline-danger"><a class="nav-link" href="/"
                                    aria-current="page">Etkinlikler</a></li>
                            <li class="nav-item  btn btn-outline-danger "><a class="nav-link button button-bg-dark"
                                    href="/pages/dashboard">Etkinlik Ekle</a></li>
                            <li class="nav-item  btn btn-outline-danger"><a class="nav-link rounded-pill"
                                    href="/pages/page-table-listing">Etkinlik Konum Bilgisi</a></li>
                        </ul>

                        <div class="navbar-nav justify-content-end gap-2 ">
                            <a class="nav-item nav-link " href="/pages/login">Hoşgeldin ,</a>
                            <a class="nav-item nav-link " href="/pages/login">Sign in</a>
                        </div>

                    </div>
                </div>
            </nav>
        </div>
    </div> -->

    <div class="row">
        <div class="col-md-3">
            <img src="{{ asset('img/logo.png') }}" alt="" width="150" height="150">

        </div>
        <div class="col-md-6 mt-5 justify-content-center " style="  text-align: center">
            <h1 style="color: #7f003f; text-shadow: 2px 2px 2px black">Etkinlik Yönetim Sistemi</h1>
        </div>
        <div class="col-md-3 ">
            <button style="margin-top: 20px ;margin-left: 240px" class="btn btn-outline-success" type="submit">Kullanıcı
                Girişi</button>
            <button style="margin-top: 20px; margin-left: 10px" class="btn btn-outline-success" type="submit">Üye
                Ol</button>
            <form class="d-flex mt-2 " role="search">
                <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-danger" type="submit">Search</button>
            </form>

        </div>
    </div>


    <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
        <div class="bg-dark p-4">
            <ul class="navbar-nav gap-2 mx-lg-auto">
                <li class="nav-item  btn btn-outline-danger"><a class="nav-link" href="/"
                        aria-current="page">Etkinlikler</a></li>
                <li class="nav-item  btn btn-outline-danger "><a class="nav-link button button-bg-dark"
                        href="/pages/dashboard">Etkinlik Ekle</a></li>
                <li class="nav-item  btn btn-outline-danger"><a class="nav-link rounded-pill"
                        href="/pages/page-table-listing">Etkinlik Konum Bilgisi</a></li>
                <li class="nav-item  btn btn-outline-danger"><a class="nav-link rounded-pill"
                        href="/pages/page-table-listing">Etkinlikte Çekilen İçerikleri Gönder</a></li>
            </ul>

            <div class="navbar-nav justify-content-end gap-2 ">
                <a class="nav-item nav-link " href="/pages/login">Hoşgeldin ,</a>
                <a class="nav-item nav-link " href="/pages/login">Sign in</a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>