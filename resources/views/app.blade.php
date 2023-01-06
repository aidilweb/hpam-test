<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HPAM Store - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @stack('css')
    <style>
        html {
            font-size: 14px;
            font-family: 'Open Sauce One', sans-serif;
            padding-top: 2rem;
        }

        .navbar-brand {
            color: #03AC0E;
            font-weight: bold
        }

        .card-body>.title {
            color: rgba(0, 0, 0, 0.7);
            display: -webkit-box;
            max-height: 38px;
            font-size: 14px;
            font-weight: 600;
            line-height: 19px;
            overflow: hidden;
            white-space: normal;
            word-wrap: break-word;
        }

        .card {
            margin-bottom: 1rem;
        }

        .card-body {
            padding: 8px;
        }

        .price {
            font-size: 14px;
            font-weight: bold;
            color: var(--Y500, #FA591D);
            white-space: nowrap;
            line-height: 22px;
        }

        .city>a {
            text-decoration: none;
            display: block;
            width: 100%;
            font-size: 0.8571428571428571rem;
            height: 20px;
            color: rgba(0, 0, 0, 0.54);
            margin-top: 0;
            text-overflow: ellipsis;
            overflow: hidden;
            -webkit-transition: -webkit-transform 0.3s;
            -webkit-transition: transform 0.3s;
            transition: transform 0.3s;
            -webkit-transform: unset;
            -ms-transform: unset;
            transform: unset;
            max-width: 140px;
        }

        .ratings {
            margin-right: 10px;
        }

        .rating-color {
            color: rgb(255, 194, 0) !important;
        }

        .rating-color-disabled {
            color: rgb(238, 238, 238);
        }

        .reviews {
            vertical-align: middle;
            color: rgba(49, 53, 59, 0.44);
            margin-left: 2px;
            font-size: 0.8571428571428571rem;
        }

        @media only screen and (min-width: 1920px) {

            /* 8 Product */
            .col-product {
                width: 12.5%;
            }
        }

        @media only screen and (max-width: 1919px) and (min-width: 1601px) {

            /* 7 Product */
            .col-product {
                width: 14.285714285714286%;
            }
        }

        @media only screen and (max-width: 1600px) and (min-width: 1401px) {

            /* 6 Product */
            .col-product {
                width: 16.666666666666667%;
            }
        }

        @media only screen and (max-width: 1400px) and (min-width: 1201px) {

            /* 5 Product */
            .col-product {
                width: 20%;
            }
        }

        @media only screen and (max-width: 1200px) and (min-width: 1001px) {

            /* 4 Product */
            .col-product {
                width: 25%;
            }
        }

        @media only screen and (max-width: 1000px) and (min-width: 801px) {

            /* 3 Product */
            .col-product {
                width: 33.333333333333333%;
            }
        }

        @media only screen and (max-width: 800px) {

            /* 2 Product */
            .col-product {
                width: 50%;
            }
        }

        .modal-body {
            margin: 0;
            padding: 0;
        }

        .modal-title {
            margin: 10px 0px 4px;
            font-weight: 800;
            font-size: 1.28571rem;
            line-height: 24px;
            color: rgba(49, 53, 59, 0.96);
            word-break: break-word;
        }

        .modal-price {
            margin-bottom: 4px;
            font-size: 2rem;
            line-height: 34px;
            font-weight: 800;
            color: rgba(49, 53, 59, 0.96);
        }

        .modal-body a {
            color: #03AC0E;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary  fixed-top ">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">HPAM Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($category as $item)
                                <li><a class="dropdown-item"
                                        href="{{ url('category/' . $item->slug) }}">{{ $item->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Type
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($type as $item)
                                <li><a class="dropdown-item"
                                        href="{{ url('type/' . $item->slug) }}">{{ $item->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Merk
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($merk as $item)
                                <li><a class="dropdown-item"
                                        href="{{ url('merk/' . $item->slug) }}">{{ $item->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container my-5">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @stack('js')
</body>

</html>
