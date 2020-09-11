<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset ('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset ('css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ asset ('css/login.css')}}" rel="stylesheet">

    </head>
    <body class="p-0 m-0 bg-login">
        <div class="container-fluid">
            <div class="header pt-3">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-8">
                        <h3 class="text-primary">SMIS</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="selection">
            <div class="middle-div">
                <div class="form-group">
                    <h1 class="text-primary text-center">Login</h1>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="username" placeholder="Username" style="text-align: center">
                    <input type="text" class="form-control" id="password" placeholder="Password" style="text-align: center">
                    <a href="#"><p class="text-right text-primary">Forget Password?</p></a>
                    <a href="dashboard"><input type="button" class="btn btn-primary form-control badge-pill" value="Masuk"></a>
                    {{-- <a href="#"><p class="text-center text-secondary pt-4 text-lg">Need an Account?</p></a> --}}
                </div>
            </div>
        </div>
    </body>
</html>
