@extends('template')

@push('css')
    <link rel="stylesheet" href="{{ asset('/css/custom/form.css') }}">
@endpush

@push('js')
    <script src="{{ asset('/js/custom/form.js') }}" defer="true"></script>
@endpush

@section('content')
    <div class="btn-group">
        <button class="btn btn-success rounded-pill" data-toggle="modal" data-target="#school_rooms">
            Class Management
        </button>
    </div>

    {{-- Modal --}}
    <x-modal>
        <x-slot name="title">
            <img src="{{ asset('icons/structure_icon.svg') }}" alt="Structure" width="25">
            Class Management
        </x-slot>
        <x-slot name="body">
            <div class="h5 text-primary">Manage School's Classrooms</div>
            <div class="d-flex align-items-center row">
                <div class="d-flex align-items-center col-sm-8 mb-3 font-weight-bold">
                    <div class="mr-sm-5">Number of Classroom(s)</div>
                    <div class="px-3 py-1 bg-gray">5</div>
                </div>
                <div class="col-sm-4 text-right mb-3">
                    <button class="btn btn-success rounded-pill"><i class="fa fa-plus"></i> Add Column</button>
                </div>
            </div>

            <hr class="border-primary mb-3">
            
            <div class="d-flex row">
                <div class="col-8"></div>
                <div class="col-4 pb-3 font-weight-bold">Class Tier</div>
                
                @for ($i = 1; $i < 6; $i++)
                    <div class="col-1 font-weight-bold">{{$i}}.</div>
                    <div class="col-7">
                        <x-Form.input value="TK Besar Butterjoy" placeholder="Class Name/ initial"/>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <x-form.select :options="['1' => 'Kindergarden']" :value="1"/>
                            {{-- <select name="" id="" class="form-control">
                                <option value="">Kindergarden</option>
                            </select> --}}
                        </div>
                    </div>
                @endfor
                
                <div class="col-12 mb-5">
                    <div class="btn btn-success rounded-pill">
                        <i class="fa fa-plus"></i>
                        Add More Class
                    </div>
                </div>

                <div class="col-12 text-right">
                    <button class="btn btn-light px-5 rounded-pill">Cancel</button>
                    <button class="btn btn-primary px-5 rounded-pill">Save</button>
                </div>
                
            </div>
        </x-slot>
    </x-modal>
    {{-- Modal --}}
@endsection