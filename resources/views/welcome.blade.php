<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url('{{ asset('img/bg.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
        }
    </style>

</head>

<body>


    <div class="container " style="  margin-left: 100px">

        <div class="container px-lg-3 py-1 shadow-5 rounded-3 rounded-lg-pill fixed-top ">
            <nav class="navbar navbar-expand-lg navbar-dark p-0 " id="navbar">
                <div class="container px-sm-0">

                    <div class=" collapse navbar-collapse btn btn-secondary" id="navbarCollapse">
                        <ul class="navbar-nav gap-2 mx-lg-auto">

                            <li class="nav-item"><a class="nav-link nav-pills" href="/"
                                    aria-current="page">Etkinlikler</a>
                            </li>
                            <li class="nav-item"><a class="nav-link button button-bg-dark "
                                    href="/pages/dashboard.html">Etkinlik Ekle</a>
                            </li>
                            <li class="nav-item"><a class="nav-link rounded-pill"
                                    href="/pages/page-table-listing.html">Etkinlik Konum Bilgisi</a></li>

                        </ul>
                        <div class="navbar-nav justify-content-end gap-2 ">
                            <a class="nav-item nav-link " href="/pages/login.html">Hoşgeldin ,
                            </a>
                            <a class="nav-item nav-link " href="/pages/login.html">Sign
                                in</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>


    </div>
    <div class="container" style="background-color:#f2a100; margin-top: 100px; height: 800px">
        test


    </div>





</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script>

</script>

</html>