<div class="h-100 border-0 custom-shadow custom-rounded-right overflow-auto">

	@foreach($navigations as $navigation)
	<a href="/{{$navigation['url']}}" class="text-decoration-none">
		<div class="d-flex align-items-center flex-column py-3 left-item position-relative {{$isSelected($navigation['name'])}}">
			<img src="{{ asset ($navigation['icon']) }}" alt="{{$navigation['name']}} Icon" width="35">
			<span class="small">{{$navigation['name']}}</span>
		</div>
	</a>
	@endforeach

</div>