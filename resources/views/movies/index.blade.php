@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Movies</div>

						<?php $i = 0 ?>

						<table>

							<div class="row">

							@foreach ($movies as $movie)

								<div class="col-lg-3 col-sm-4 col-xs-6">
									<div class="thumbnail">
										<a href="{{ url('/movies', $movie->id) }}"> {!! HTML::image($movie->posterLoc, $movie->title, array('class' => 'img-reponsive')) !!} </a>
										<div class="caption text-center">
											<a href="{{ url('/movies', $movie->id) }}"> {{ $movie->title }} </a>
										</div>
									</div>
								</div>

							@if (($i % 4) == 3)

							</div>

							<div class="row">

							@endif

							<?php $i++ ?>

							@endforeach

						</table>

					</div>

					<div class="text-center">
						{!! $movies->render() !!}
					</div>
			</div>
		</div>
	</div>
</div>
@endsection
