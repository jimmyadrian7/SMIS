<div class="card border-0 custom-shadow custom-rounded h-100">
    <div class="card-body p-2">
    
    <!-- Card Header -->
    <div class="row d-flex justify-content-between">
        <div class="d-flex col pr-0">
        <div class="mr-2 d-none d-sm-block">
            <div class="d-inline-block">
                <img src="{{ asset ($icon) }}" alt="Building Icon" height="40">
            </div>
        </div>
        <div class="col-md-9 col-xl-9 col-sm-10 col-9 p-0 d-flex align-items-center">
            <div class="col-12 p-0 text-truncate">
            {{$title}}
            </div>
        </div>
        </div>
        <div class="d-flex justify-content-end align-items-start col-1 pl-0">
            {{$left_button}}
        </div>
    </div>
    <!-- Card Header -->

    <!-- Card Content -->
    <div class="row mt-3 d-flex align-items-center">
        {{$slot}}
    </div>
    <!-- Card Content -->
    </div>
</div>