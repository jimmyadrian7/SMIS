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
        <button class="btn btn-success rounded-pill mr-2" data-toggle="modal" data-target="#subject_enrollment">
            Subject Enrollment
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

    <x-modal id="subject_enrollment">
        <x-slot name="title">
            <img src="{{ asset('icons/book_icon.svg') }}" alt="Structure" width="25">
            Subject Enrollment
        </x-slot>
        <x-slot name="body">
            <div class="h5 text-primary">Enroll Extra Curricular Subject</div>
            <div class="d-flex align-items-center row">
                <div class="d-flex align-items-center col-sm-8 mb-3 font-weight-bold">
                    <div class="mr-sm-5">Number of E.C Subject</div>
                    <div class="px-4 py-2 mr-sm-1">
                        <input class="rowadd" type="number" name="rowadd" id="rowadd" data-id="rowadd" value="7" min="1" max="20" maxlength="2" >
                    </div>
                </div>
                <div class="col-sm-4 text-right mb-3">
                    <button class="btn btn-success rounded-pill"><i class="fa fa-plus"></i> Add Column</button>
                </div>
            </div>

            <hr class="border-primary mb-3">
            
            <div class="d-flex row">              
                @for ($i = 1; $i < 7; $i++)
                    <div class="col-7 d-flex align-items-center mb-3">
                        <div class="col-5 font-weight-bold text-muted">Subject Name</div>
                        <div class="col-7">
                            <x-Form.input value="TK Besar Butterjoy" placeholder="Class Name/ initial"/>
                        </div>
                    </div>
                    @if ($i === 1)
                        <div class="col-5 align-items-center text-muted">
                            <div class="text-primary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
                                    <circle cx="8" cy="4.5" r="1"/>
                                </svg>
                            </div>
                            <a href="#" class="text-primary">Extra Curricular Subjects</a> are enterirely option. You can skip this form by clicking the 'Save' button      
                        </div>      
                    @endif
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
    {{-- Modal --}}
@endsection