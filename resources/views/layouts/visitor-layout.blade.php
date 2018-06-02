<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EdnoBlog</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Arial:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.0/metisMenu.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    @yield('style-css')

    <style>
        html, body {
            background-color: #ecfdf5;
            color: #636b6f;
            font-family: 'Arial', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
            //c8f1ee
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
    <style>
    .blink {
        color: blue;
        animation: blink-animation 1s steps(5, start) infinite;
        -webkit-animation: blink-animation 1s steps(5, start) infinite;
    }
    @keyframes blink-animation {
        to {
            visibility: hidden;
            }
        }
    @-webkit-keyframes blink-animation {
        to {
            visibility: hidden;
            }
        }

    </style>
</head>
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <span class="blink">
                <center><h3><b>>> EdnoBlog <<</b></h3></center>
            </span>
        </nav>
<body>

        <!-- Page Content -->
        <div class="container">
          <div class="row">
            <div class="row">
                <div class="row">
                    <div class="row">

              @yield('content')
          </div>
          </div>
      </div>
          </div> 
      </div>
      <!-- jQuery -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <!-- Metis Menu Plugin JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.0/metisMenu.min.js"></script>

      <!-- Custom Theme JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/3.3.7+1/js/sb-admin-2.min.js"></script>
  </body>
  </html>
