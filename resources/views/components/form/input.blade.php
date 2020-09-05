@switch($type)
    @case('file')
        <div class="">
            <label class="d-flex align-items-center">
                <span class="btn shadow-sm text-primary mr-3 px-4">
                    <img src="{{ asset ("/icons/upload_icon.svg") }}" alt="Upload Icon" height="30" class="mr-3">
                    Upload Image
                </span>
                <span class="small text-muted">0 file uploaded</span>
                <input type="file" class="d-none smis-input-file" name="{{$name}}" id="{{$id}}" {{$attributes}}>
            </label>
        </div>
        @break
    @default
        <div class="position-relative">
            <button class="rounded-circle btn clear-button">
                <i class="fa fa-times"></i>
            </button>
            <input
            type="text" 
            value="{{ $value }}" 
            name="{{ $name }}"
            id="{{ $id }}"
            {{$attributes}}
            class="form-control custom-input-text rounded-pill {{ $class }}" 
            placeholder="{{ $placeholder }}">
        </div>
@endswitch