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
                        <img src="{{asset('images/'.$media->path)}}" class="img-responsive" alt="">
                    </a>
                </div>
            @endforeach
        </div>  


        <!-- Add Media Form -->
        <div class="row">
            @if (Auth::check())

            <div class="tabs">
                <ul class="tab-links">
                    <li class="active"><a href="#tab1">Upload Test Media</a></li>
                    <li><a href="#tab2">Upload Image</a></li>
                    <li><a href="#tab3">Tab #3</a></li>
                    <li><a href="#tab4">Tab #4</a></li>
                </ul>
             
                <div class="tab-content">
                    <div id="tab1" class="tab active">
                        <form class="form-horizontal" role="form" method="post" action="/mediacontent" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Upload Media:</label>
                                    <div class="col-sm-10">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="file" name="file" id="file">
                                        <input name="description" class="form-control" id="description" placeholder="please describe something">
                                        <input type="submit" value="Submit">
                                    </div>

                            </div>
                        </form>
                    </div>
             
                    <div id="tab2" class="tab">
                        <form class="form-horizontal" role="form" method="post" action="/mediacontent" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Upload Video:</label>
                                    <div class="col-sm-10">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="file" name="file" id="file">
                                        <input type="submit" value="Submit">
                                    </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>



                <!-- <form class="form-horizontal" role="form" method="post" action="{{URL::to('upload')}}" enctype="multipart/form-data">-->
                
            @else

                <h1>You must be logged in to add content!</h1>
            @endif
            
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
                            <img src="{{asset('images/'.$media->path)}}" class="img-responsive img-centered" alt="">
                            <a href="#">Test</a><p>Just a bunch of text</p>
                            <ul class="list-inline item-details">

                            <!--Add an embeded Youtube Video -->
                            <iframe width="420" height="315"
                                src="http://www.youtube.com/embed/XGSy3_Czz8k?autoplay=0">
                            </iframe>
                            <!-- End of Embeded Youtube Video -->

                                <li>Media ID:
                                    <strong>{{$media->id}}</strong>
                                </li>
                                 <li> Media Table User ID:
                                    <strong>{{$media->userID}}</strong>
                                </li>
                                <li>Description:
                                    <strong>{{$media->description}}</strong>
                                </li>

                                
                            </ul>
                           

                            @if (Auth::id() == $media->userID)
                                 <!-- Form used to edit content -->
                                 <form class="form-horizontal" role="form" method="GET" action="mediacontent/{{$media->id}}/edit">
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
                            @endif
                            
                            
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('.tabs .tab-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');
 
        // Show/Hide Tabs
        jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
 
        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
 
        e.preventDefault();
    });
});
</script>