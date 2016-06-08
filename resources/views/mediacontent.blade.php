@extends ('app')

@section ('content')
    

<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Media</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            @foreach($MediaContents as $media)
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal{{$media->id}}" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset('images/cabin.png')}}" class="img-responsive" alt="">
                    </a>
                </div>
            @endforeach
        </div>  

 <!-- Add Media Form -->
        <div class="row">
        <form class="form-horizontal" role="form" method="post" action="/mediacontent">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Upload Media:</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input name="description" class="form-control" id="description" placeholder="please describe something" >
                    </div>

            </div>
            <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>        
    </div>
</section>

@endsection



<!-- Modals Functionality -->
<div>

@foreach($MediaContents as $media)
    <div class="portfolio-modal modal fade" id="portfolioModal{{$media->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Media {{$media->id}}</h2>
                            <hr class="star-primary">
                            <img src="{{asset('images/cabin.png')}}" class="img-responsive img-centered" alt="">
                            <a href="#">Test</a><p>Just a bunch of text</p>
                            <ul class="list-inline item-details">
                                <li>Medai ID:
                                    <strong>{{$media->id}}</strong>
                                </li>
                                <li>Description:
                                    <strong>{{$media->description}}</strong>
                                </li>
                                
                            </ul>
                            <!-- Form used to edit content -->
                             <form class="form-horizontal" role="form" method="POST" action="mediacontent/{{$media->id}}/edit">
                                <div class="form-group">
                                        <div class="col-sm-10">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="_method" value="PATCH">
                                            <input name="description" class="form-control" id="description" placeholder="please describe something" >
                                            <button type="submit" class="btn btn-default">Edit</button>
                                        </div>
                                </div>
                            </form>

                            <!-- Form used to delete content -->
                            <form class="form-horizontal" role="form" method="POST" action="mediacontent/{{$media->id}}">
                                <div class="form-group">
                                        <div class="col-sm-10">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-default">Delete</button>
                                        </div>
                                </div>
                            </form>
                            
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

</div>