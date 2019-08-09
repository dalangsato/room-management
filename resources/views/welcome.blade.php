<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>

    <body>
       
    <div >
        <div class="content">
            <div class="title m-b-md">
                <div class="container">
                    <div class="flex-center position-ref full-heigh">
                        <div class="card" style="background-image:url('{{ asset('images/bg.jpeg') }}')">
                            <div class="card-body">
                                <div class="flex-center position-ref full-height">
                                    <div class="card">
                                        <div class="card-body">
                                        <h3>Peminjaman Ruang Rapat</h3>
                                        <a href="{{route('roomA')}}" class="btn btn-lg btn-primary mr">Ruang Rapat A</a><br>
                                        <a href="{{route('calendar')}}" class="btn btn-lg btn-primary mr">Ruang Rapat B</a><br>
                                        <button class="btn btn-lg btn-primary">Ruang Rapat C</button> <br>
                                        <button class="btn btn-lg btn-primary">Ruang Rapat D</button> <br>
                                        </div> 
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>           
            </div>
        </div>
    </div>

    </body>

</html>
