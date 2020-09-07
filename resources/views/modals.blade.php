@extends('template')

@push('css')
    <link rel="stylesheet" href="{{ asset('/css/custom/form.css') }}">
@endpush

@push('js')
    <script src="{{ asset('/js/custom/form.js') }}" defer="true"></script>
@endpush

@section('content')
    <div class="d-flex">
        <button class="btn btn-success rounded-pill mr-2" data-toggle="modal" data-target="#class_management">
            Class Management
        </button>
        <button class="btn btn-success rounded-pill mr-2" data-toggle="modal" data-target="#school_information">
            School Information
        </button>
    </div>

    {{-- Modal --}}
    <x-modal id="class_management">
        <x-slot name="title">
            <img src="{{ asset('icons/structure_icon.svg') }}" alt="Structure" width="25">
            Class Management
        </x-slot>
        <x-slot name="body">
            <div class="h5 text-primary">Manage School's Classrooms</div>
            <div class="d-flex align-items-center row">
                <div class="d-flex align-items-center col-sm-8 mb-3 font-weight-bold">
                    <div class="mr-sm-5">Number of Classroom(s)</div>
                    <div class="px-4 py-2 mr-sm-1">
                        <input class="rowadd" type="number" name="rowadd" id="rowadd" data-id="rowadd" value="5" min="1" max="20" maxlength="2" >
                    </div>
                </div>
                <div class="col-sm-4 text-right mb-3">
                    <button class="btn btn-success rounded-pill"><i class="fa fa-plus"></i> Add Column</button>
                </div>
            </div>

            <hr class="border-primary mb-3">
            
            <div class="d-flex row">
                <div class="col-8"></div>
                <div class="col-4 pb-3 font-weight-bold">Class Tier</div>
                
                @for ($i = 1; $i < 15; $i++)
                    <div class="col-12 d-flex align-items-center mb-3">
                        <div class="col-1 font-weight-bold">{{$i}}.</div>
                        <div class="col-7">
                            <x-Form.input value="TK Besar Butterjoy" placeholder="Class Name/ initial"/>
                        </div>
                        <div class="col-4 d-flex align-items-center">
                            <x-form.select :options="['1' => 'Kindergarden']" :value="1"/>
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
                    <button class="btn btn-light px-5 rounded-pill" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary px-5 rounded-pill">Save</button>
                </div>
                
            </div>
        </x-slot>
    </x-modal>

    <x-modal id="school_information">
        <x-slot name="title">
            <div class="d-flex justify-content-between align-items-center">
                <span>
                    <img src="{{ asset('icons/building_icon.svg') }}" alt="Structure" width="25">
                    School Information
                </span>
                <div class="col-4">
                    <label class="small text-success font-weight-bold mb-0">100 % Completed</label>
                    <div class="progress" style="height: 7px;">
                        <div class="progress-bar w-100 bg-success"></div>
                    </div>
                </div>
            </div>
        </x-slot>
        <x-slot name="body">

            <hr class="border-primary mb-3">
            
            <div class="d-flex row">

                <div class="col-12 mb-4">
                    <div class="row d-flex align-items-center">
                        <div class="col-sm-2">
                            <label class="smis-label">Company Name</label>
                        </div>
                        <div class="col-sm-10">
                            <x-form.input placeholder="PT. Edukasi Mitra Bangsa"/>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-4">
                    <div class="row d-flex align-items-center mb-3">
                        <div class="col-sm-2">
                            <label class="smis-label">School Name</label>
                        </div>
                        <div class="col-sm-10">
                            <x-form.input placeholder="Little Thinker Kindergarden"/>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 mb-4">
                    <div class="row d-flex align-items-center mb-3">
                        <div class="col-sm-2">
                            <label class="smis-label">School Level</label>
                        </div>
                        <div class="col-sm-4">
                            <x-form.select :options="['1' => 'Playgroup']" :value="1"/>
                        </div>
                        <div class="col-sm-2 text-right">
                            <label class="smis-label">Institution Type</label>
                        </div>
                        <div class="col-sm-4">
                            <x-form.select :options="['1' => 'Private']" :value="1"/>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 mb-4">
                    <div class="row d-flex align-items-center mb-3">
                        <div class="col-sm-2">
                            <label class="smis-label">NPWP</label>
                        </div>
                        <div class="col-sm-6">
                            <x-form.input placeholder="0912400185801000013" value="0912400185801000013"/>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-4">
                    <div class="row d-flex align-items-center mb-3">
                        <div class="col-sm-2">
                            <label class="smis-label">Email</label>
                        </div>
                        <div class="col-sm-4">
                            <x-form.input placeholder="Littlethinker@ltk.com" value="Littlethinker@ltk.com"/>
                        </div>
                        <div class="col-sm-2 text-right">
                            <label class="smis-label">Website</label>
                        </div>
                        <div class="col-sm-4">
                            <x-form.input placeholder="www.littlethinker.com" value="www.littlethinker.com"/>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-4">
                    <div class="row d-flex align-items-center mb-3">
                        <div class="col-sm-2">
                            <label class="smis-label">Telephone</label>
                        </div>
                        <div class="col-sm-4">
                            <x-form.input placeholder="(+62) 2189990000" value="(+62) 2189990000"/>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-4">
                    <div class="row d-flex align-items-center mb-3">
                        <div class="col-sm-2">
                            <label class="smis-label">Head Principle</label>
                        </div>
                        <div class="col-sm-10">
                            <x-form.input placeholder="Daniel W. Kurniawan" value="Daniel W. Kurniawan"/>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-4">
                    <div class="row d-flex align-items-center mb-3">
                        <div class="col-sm-2">
                            <label class="smis-label">Vice Principle</label>
                        </div>
                        <div class="col-sm-10">
                            <x-form.input placeholder="Melissa Darisius Tan" value="Melissa Darisius Tan"/>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-4">
                    <div class="row d-flex align-items-center mb-3">
                        <div class="col-sm-2">
                            <label class="smis-label">School Address</label>
                        </div>
                        <div class="col-sm-10">
                            <x-form.textarea placeholder="Jl. Sutera Boulevard Ruko Prominence Blok 7A, Pakualam, Serpong Utara, Tangerang Selatan, Banten 15330" value="Jl. Sutera Boulevard Ruko Prominence Blok 7A, Pakualam, Serpong Utara, Tangerang Selatan, Banten 15330"/>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-4">
                    <div class="row d-flex align-items-center mb-3">
                        <div class="col-sm-2">
                            <label class="smis-label">School Logo</label>
                        </div>
                        <div class="col-sm-10">
                            <x-form.input type="file"/>
                        </div>
                    </div>
                </div>

                <div class="col-12 text-right">
                    <button class="btn btn-light px-5 rounded-pill" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary px-5 rounded-pill">Save Changes</button>
                </div>
                
            </div>
        </x-slot>
    </x-modal>
    {{-- Modal --}}
@endsection