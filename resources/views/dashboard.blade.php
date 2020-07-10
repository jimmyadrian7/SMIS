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
        <link href="{{ asset ('css/custom.css')}}" rel="stylesheet">

    </head>
    <body class="p-0 m-0">
        <div class="container-fluid">
            <div class="header pt-5">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-8">
                        <h3 class="text-primary pl-3">Welcome to the jungle</h3>
                    </div>
                    <div class="col-md-4">
                        <div class="button-right d-flex justify-content-end pr-3">
                            <button class="btn btn-sm mr-3 btn-purple rounded btn-square"><i class="fa fa-bell fa-lg"></i></button>
                            <div class="card custom-shadow border-0">
                                <div class="card-body py-1 px-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-start">
                                            <div class="rounded-circle p-1 bg-success"></div>
                                        </div>
                                        <div class="d-flex align-items-end">
                                            <span class="px-4">FranksBPK</span>
                                        </div>
                                        <button class="btn btn-sm btn-cyan btn-square"><i class="fa fa-user fa-lg"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-sm ml-3 btn-orange rounded btn-square"><i class="fa fa-gear fa-lg"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
