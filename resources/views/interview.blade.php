@extends('app')

@section('content')


    <img src="images/officeCast.jpg" alt="office cast" usemap="#mapDay1">
    <map name="mapDay1" id="mapDay1">
        @foreach( $charVideos as $charVideo )
            <area alt="character{{ $charVideo->charId }}area" title="" href="#" shape="rect" coords="{{ $charVideo->mapCoords }}" data-toggle="modal" data-target="#interview{{ $charVideo->chapter }}char{{ $charVideo->charId }}"/>
        @endforeach
    </map>

    <!-- Interview Modals -->
    @foreach($charVideos as $charVideo)
        <div class="modal fade" id="interview{{ $charVideo->chapter }}char{{ $charVideo->charId }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        <video src="videos/{{ $charVideo->video }}">
                            Sorry, your browser doesn't support embedded videos.
                        </video>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection