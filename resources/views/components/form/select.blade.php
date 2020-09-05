<select name="{{$name}}" id="{{$id}}" class="{{$class}} smis-select" style="width: 100%">
    <option value="">- Select -</option>
    @foreach ($options as $val => $label)
        <option 
            value="{{$val ?? ''}}" 
            {{ $value == $val ? 'selected' : '' }}>{{$label ?? '-'}}</option>
    @endforeach
</select>