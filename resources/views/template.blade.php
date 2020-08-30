<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      {{-- Metas --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @stack('meta')

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        @stack('font')

        {{-- Styles --}}
        <link href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset ('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset ('css/select2.min.css') }}" rel="stylesheet">
        <link href="{{ asset ('css/custom/border.css') }}" rel="stylesheet">
        <link href="{{ asset ('css/custom/button.css') }}" rel="stylesheet">
        <link href="{{ asset ('css/custom/others.css') }}" rel="stylesheet">
        @stack('css')

        {{-- Script --}}
        <script src="{{ asset ('js/jquery.min.js') }}" defer="true"></script>
        <script src="{{ asset ('js/bootstrap.min.js') }}" defer="true"></script>
        <script src="{{ asset ('js/select2.full.min.js') }}" defer="true"></script>
        <script src="{{ asset ('js/custom/dragable.js') }}" defer="true"></script>
        <script src="{{ asset ('js/custom/admin.js') }}" defer="true"></script>
        @stack('js')

    </head>
    <body class="p-0 m-0">
        <div class="container-fluid">
            <div class="header">

                <!-- Header -->
                  <div class="row d-flex justify-content-between align-items-center sticky-top bg-light pt-3">
                    @include('header')
                  </div>
                <!-- Header -->

                <!-- Center Line -->
                <div class="row d-flex justify-content-center mt-md-3">
                  <div class="col-md-9">
                    <div class="border border-dotted"></div>
                  </div>
                </div>
                <!-- Center Line -->

                <!-- Body -->
                <div class="mt-4 row">
                  <!-- Left Side -->
                  <div class="position-fixed fixed-top-bottom d-none d-md-block fixed-width pb-3">
                    <x-left-navbar/>
                  </div>
                  <div class="fixed-width mr-3 d-none d-md-block"></div>
                  <!-- Left Side -->

                  <!-- Right Side -->
                  <div class="col">
                    @yield('content')
                  </div>
                  <!-- Right Side -->

                  {{-- Floating Button --}}
                </div>
                <!-- Body -->

            </div>
        </div>
        
        <div class="full-fixed-container">
          <div class="floating-div">
            <button class="btn p-0">
              <img src="{{ asset ('icons/add_contacts.svg') }}" alt="Add Contacts Icon" width="70">
            </button>
          </div>
        </div>

    </body>
</html>
