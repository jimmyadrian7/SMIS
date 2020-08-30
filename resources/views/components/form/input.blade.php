@switch($type)
    @case('checkbox')
        <div class="form-group">
            
        </div>
        @break
    @default
        <div class="form-group position-relative">
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