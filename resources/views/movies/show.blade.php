@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">{{ $movie->title }}</div>
					<div class="row">

						<?php $i = 0 ?>

						<table>

							<div class="row">

							@foreach ($photos as $photo)

							@if (($i % 3) == 0)

							<div class="col-lg-3 col-lg-offset-1 col-sm-4 col-xs-6">

							@else

							<div class="col-lg-3 col-sm-4 col-xs-6">

							@endif

									<div class="thumbnail">
										<a href="{{ url('/movies', $movie->id) }}"> {!! HTML::image($movie->posterLoc, $user->name, array('class' => 'img-reponsive')) !!} </a>
										<div class="caption text-center">
											<a href="{{ url('/movies', $movie->id) }}"> {{ $movie->title }} </a>
										</div>
									</div>
								</div>

							@if (($i % 3) == 2)

							</div>

							<div class="row">

							@endif

							<?php $i++ ?>

							@endforeach

						</table>

					</div>

					<div class="text-center">
						{!! $photos->render() !!}
					</div>
			</div>
		</div>
	</div>
</div>
@endsection
