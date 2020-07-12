<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset ('css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- <link href="{{ asset ('css/custom.css') }}" rel="stylesheet"> -->
        <link href="{{ asset ('css/custom/border.css') }}" rel="stylesheet">
        <link href="{{ asset ('css/custom/button.css') }}" rel="stylesheet">
        <link href="{{ asset ('css/custom/others.css') }}" rel="stylesheet">

    </head>
    <body class="p-0 m-0">
        <div class="container-fluid">
            <div class="header pt-5">

                <!-- Header -->
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-6 order-md-2 mb-4">
                      <div class="button-right d-flex justify-content-md-end justify-content-end justify-content-sm-center flex-wrap">
                          <div class="order-1 order-sm-1 d-flex mb-3 mb-sm-0">
                            <button class="btn btn-sm mr-sm-3 p-0">
                              <img src="{{ asset ('icons/bell_icon.svg') }}" alt="Bell Icon" height="40">
                            </button>
                          </div>
                          <div class="card custom-shadow border-0 mb-sm-0 mb-3 col-sm-auto col-12 order-3 order-sm-2">
                              <div class="card-body py-1 pl-2 pr-0">
                                  <div class="d-flex justify-content-between">
                                      <div class="d-flex align-items-start">
                                          <div class="rounded-circle p-1 bg-success"></div>
                                      </div>
                                      <div class="d-flex align-items-end text-truncate">
                                          <span class="px-4">FranksBPK</span>
                                      </div>
                                      <button class="btn btn-sm btn-cyan btn-square p-0">
                                        <img src="{{ asset ('icons/admin_config_icon.svg') }}" alt="Admin Config Icon" height="30">
                                      </button>
                                  </div>
                              </div>
                          </div>
                          <div class="order-2 order-sm-3 d-flex mb-3 mb-sm-0">
                            <button class="btn btn-sm ml-sm-3 p-0">
                              <img src="{{ asset ('icons/setting_icon.svg') }}" alt="Setting Icon" height="40">
                            </button>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6 order-md-1 mb-4">
                      <div class="h3 text-primary justify-content-center justify-content-md-start d-flex">
                        Welcome to the jungle
                      </div>
                    </div>
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
                    <div class="h-100 border-0 custom-shadow custom-rounded-right overflow-auto">
                      <div class="d-flex align-items-center flex-column py-3 left-item position-relative">
                        <img src="{{ asset ('icons/dashboard_icon.svg') }}" alt="Dashboard Icon" width="35">
                        <span class="small">Dashboard</span>
                      </div>
                      <div class="d-flex align-items-center flex-column py-3 left-item active position-relative">
                        <img src="{{ asset ('icons/rocket_icon.svg') }}" alt="Rocket Icon" width="35">
                        <span class="small">Manage</span>
                      </div>
                      <div class="d-flex align-items-center flex-column py-3 left-item position-relative">
                        <img src="{{ asset ('icons/book_icon.svg') }}" alt="Book Icon" width="35">
                        <span class="small">Subject</span>
                      </div>
                      <div class="d-flex align-items-center flex-column py-3 left-item position-relative">
                        <img src="{{ asset ('icons/structure_icon.svg') }}" alt="Structure Icon" width="35">
                        <span class="small">Classroom</span>
                      </div>
                      <div class="d-flex align-items-center flex-column py-3 left-item position-relative">
                        <img src="{{ asset ('icons/connection_icon.svg') }}" alt="Connection Icon" width="35">
                        <span class="small">Teacher</span>
                      </div>
                      <div class="d-flex align-items-center flex-column py-3 left-item position-relative">
                        <img src="{{ asset ('icons/calendar_icon.svg') }}" alt="Calendar Icon" width="35">
                        <span class="small">Schedule</span>
                      </div>
                      <div class="d-flex align-items-center flex-column py-3 left-item position-relative">
                        <img src="{{ asset ('icons/smile_icon.svg') }}" alt="Student Icon" width="35">
                        <span class="small">Student</span>
                      </div>
                      <div class="d-flex align-items-center flex-column py-3 left-item position-relative">
                        <img src="{{ asset ('icons/bubble_icon.svg') }}" alt="Bubble Icon" width="35">
                        <span class="small">Tuition</span>
                      </div>
                    </div>
                  </div>
                  <div class="fixed-width mr-3 d-none d-md-block"></div>
                  <!-- Left Side -->

                  <!-- Right Side -->
                  <div class="col">
                    <!-- Title -->
                    <div class="h4 text-primary font-weight-normal mb-5">
                      Administrator Content Management
                    </div>
                    <!-- Title -->

                    <!-- Content -->
                    <div class="row">
                      <div class="col-md-6 col-lg-4">

                        <!-- Card Section -->
                        <div class="card border-0 custom-shadow custom-rounded">
                          <div class="card-body p-2">
                            <!-- Card Header -->
                            <div class="row d-flex justify-content-between">
                              <div class="d-flex col pr-0">
                                <div class="mr-2 d-none d-sm-block">
                                  <div class="d-inline-block">
                                    <img src="{{ asset ('icons/building_icon.svg') }}" alt="Building Icon" height="40">
                                  </div>
                                </div>
                                <div class="col-md-9 col-xl-9 col-sm-10 col-9 p-0 d-flex align-items-center">
                                  <div class="col-12 p-0 text-truncate">
                                    School Information
                                  </div>
                                </div>
                              </div>
                              <div class="d-flex justify-content-end align-items-start col-1 pl-0">
                                <button type="button" class="btn-sm btn btn-link p-0">View</button>
                              </div>
                            </div>
                            <!-- Card Header -->

                            <!-- Card Content -->
                            <div class="row mt-3 d-flex align-items-center">
                              <!-- Image Left -->
                              <div class="col-lg-4 col-xl-3 col-md-4 col-sm-2 d-none d-sm-block pr-0">
                                <div class="card custom-shadow p-0 border-0 custom-rounded">
                                  <div class="card-body d-flex justify-content-center align-items-center">
                                    <img src="{{ asset ('icons/earth_icon.svg') }}" alt="Earth Icon" class="img-responsive">
                                  </div>
                                </div>
                              </div>
                              <!-- Image Left -->

                              <!-- Right Side -->
                              <div class="col-lg-8 col-xl-9 col-md-8 col-sm-10 pl-0 pr-1">
                                <div class="col-12 text-truncate">
                                  <span class="font-weight-bold">SMA Santo nikolaus Lokon</span>
                                  <div class="small col-12 p-0 text-truncate">
                                    <span class="text-muted">Information: </span>
                                    <span class="text-danger font-italic">10 % Completed</span>
                                  </div>
                                  <!-- Progress Bar -->
                                  <div class="col-12 p-0">
                                    <div class="progress ch-7 rounded-pill">
                                      <div class="progress-bar bg-danger" style="width: 10%"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12 mt-3 d-flex justify-content-end">
                                  <button type="button" class="px-3 btn btn-sm rounded-pill btn-primary">
                                    Edit
                                  </button>
                                </div>
                              </div>
                              <!-- Right Side -->
                            </div>
                            <!-- Card Content -->
                          </div>
                        </div>
                        <!-- Card Section -->

                      </div>
                    </div>
                    <!-- Content -->

                  </div>
                  <!-- Right Side -->
                </div>
                <!-- Body -->

            </div>
        </div>
    </body>
</html>
