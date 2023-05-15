@include('userheader')
<div class="container m-5">
<a href="/user/booklist" class="" style="color:black;"><button class="btn btn-success mb-2">Back</button></a>
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6 p-3">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="{{$BooksDetails->image}}"   class="mt-3 ml-4" style="height: 400px;width: 400px;"></div>
						  <div class="tab-pane" id="pic-2"><img src="{{$BooksDetails->image}}" /></div>
						  <div class="tab-pane" id="pic-3"><img src="{{$BooksDetails->image}}" /></div>
						  <div class="tab-pane" id="pic-4"><img src="{{$BooksDetails->image}}" /></div>
						  <div class="tab-pane" id="pic-5"><img src="{{$BooksDetails->image}}" /></div>
						</div>						
					</div>
					<div class="details col-md-6 p-4">
						<h3 class="product-title"><span>Name:</span>{{$BooksDetails->title}}</h3>
						<div class="rating"> 
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no"><span>Author: </span>{{$BooksDetails->author}}</span>
						</div>
						<p class="product-description">{{$BooksDetails->description}}</p>
						<h4 class="price">Publisher: <span> {{$BooksDetails->publisher}}</span></h4>
					
						<h5 class="sizes">Date:
							<span class="size" data-toggle="tooltip" title="small">  {{$BooksDetails->publication_date}}</span>
						</h5>
						<h5 class="colors">Isbn:
							<span class="color orange not-available" data-toggle="tooltip" title="Not In store"> {{$BooksDetails->isbn}}</span>
							<span class="color green"></span>
							<span class="color blue"></span>
						</h5>

						<h5 class="colors">Genre: 
							<span class="color orange not-available" data-toggle="tooltip" title="Not In store"> {{$BooksDetails->genre}}</span>
							<span class="color green"></span>
							<span class="color blue"></span>
						</h5>
						
					</div>
				</div>
			</div>
		</div>
	</div>

    @include('userfooter')