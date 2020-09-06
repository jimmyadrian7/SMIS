<div class="h-100 border-0 custom-shadow custom-rounded-right overflow-auto hidden-scroll-x">

	@foreach(Config::get('admin.left_nav') as $navigation)
	
	<div class="d-flex align-items-center flex-column py-3 left-item position-relative {{$navigation['active'] ? 'active' : ''}}">
		<a href="/{{$navigation['name']}}">
			<img src="{{ asset ($navigation['icon']) }}" alt="{{$navigation['name']}} Icon" width="35">
			<span class="small">{{$navigation['name']}}</span>
		</a>
	</div>

	@endforeach

</div>