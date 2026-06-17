
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Biodata</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body{
            background:#f5f7fb;
        }

        .navbar{
            box-shadow:0 2px 20px rgba(0,0,0,.08);
        }

        .content{
            margin-top:30px;
        }

        .card{
            border:none;
            border-radius:18px;
            box-shadow:0 5px 20px rgba(0,0,0,.08);
        }

        .card-header{
            background:white;
            border-bottom:1px solid #f0f0f0;
            padding:20px;
        }

        .table th{
            font-weight:600;
        }

        .btn{
            border-radius:10px;
        }

        .badge-modern{
            background:#e8f2ff;
            color:#0d6efd;
            padding:8px 14px;
            border-radius:20px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">

        <a class="navbar-brand fw-bold" href="#">
            <i class="bi bi-grid-fill"></i>
            Dashboard
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">

            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a href="/biodata" class="nav-link active">
                        Biodata
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/produk" class="nav-link active">
                        produk
                    </a>
                </li>
            </ul>





                                    <a class="btn btn-light" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="bi bi-box-arrow-right"></i>
                                        {{ __('keluar') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>


        </div>
    </div>
</nav>

@yield('conten')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

