<div class="position-relative">
    <button class="rounded-circle btn clear-button">
        <i class="fa fa-times"></i>
    </button>
    <textarea
    name="{{ $name }}"
    id="{{ $id }}"
    {{$attributes}}
    class="form-control custom-input-text {{ $class }}" 
    placeholder="{{ $placeholder }}">{{$value}}</textarea>
</div>