@extends('frontlayout')
@section('content')
	<!-- Gallery Section Start -->
	<div class="container my-4">
		<h1 class="text-center border-bottom" id="gallery">Gallery</h1>
		<div class="row my-4">
			@foreach($roomTypes as $rtype)
			<div class="col-md-3">
				<div class="card">
					<h5 class="card-header">{{$rtype->title}}</h5>
					<div class="card-body">
						@foreach($rtype->roomtypeimgs as $index => $img)
                        	<a href="{{asset('storage/app/'.$img->img_src)}}" data-lightbox="rgallery{{$rtype->id}}">
                        		@if($index > 0)
                        		<img class="img-fluid hide" src="{{asset('storage/app/'.$img->img_src)}}" />
                        		@else
                        		<img class="img-fluid" src="{{asset('storage/app/'.$img->img_src)}}" />
                        		@endif
                        	</a>
                        </td>
                        @endforeach
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<!-- Gallery Section End -->

    <!-- LightBox css -->
<link rel="stylesheet" type="text/css" href="{{asset('public/vendor')}}/lightbox2-2.11.3/dist/css/lightbox.min.css" />
<!-- LightBox Js -->
<script type="text/javascript" src="{{asset('public/vendor')}}/lightbox2-2.11.3/dist/js/lightbox.min.js"></script>
<style type="text/css">
	.hide{
		display: none;
	}
</style>
@endsection