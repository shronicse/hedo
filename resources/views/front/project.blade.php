@extends('front.master')
@section('content')
	<!-- blog -->
	<div class="blog">
		<!-- container -->
		<div class="container">
			<div class="blog-top-grids">
				<div class="col-md-8 blog-top-left-grid">
					<div class="left-blog">
						<div class="blog-left">
                            @foreach ($projects as $project)

							<div class="blog-left-left">
								<a href="#"><img src="/image/{{ $project->image }}" width="100px"></a>
							</div>
							<div class="blog-left-right">
								<a href="single.html">{{ $project->slug }} </a>
								<p>{{ $project->detail }}
							</p>
							</div>
							<div class="clearfix"> </div>
                            @endforeach
						</div>


							<div class="clearfix"> </div>

					</div>
					<nav>
						<ul class="pagination">
                            {!! $projects->links() !!}
						</ul>
					</nav>
				</div>
				<div class="col-md-4 blog-top-right-grid">
					<div class="Categories">
						<h3>Categories</h3>
						<ul>
							<li><a href="#">Phasellus sem leo, interdum quis risus</a></li>
							<li><a href="#">Nullam egestas nisi id malesuada aliquet </a></li>
							<li><a href="#"> Donec condimentum purus urna venenatis</a></li>
							<li><a href="#">Ut congue, nisl id tincidunt lobor mollis</a></li>
							<li><a href="#">Cum sociis natoque penatibus et magnis</a></li>
							<li><a href="#">Suspendisse nec magna id ex pretium</a></li>
						</ul>
					</div>

			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //blog -->
@endsection

