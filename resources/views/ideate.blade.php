@extends('app')

@section('content')
    <div class="row">
        @foreach($ideate as $idea)
            <div class="col-lg-3 ideateContainer">
                <div class="panel panel-primary">
                    <div class="panel-heading">{{ $idea->title }}</div>
                    <div class="panel-body">
                        <img class="img-responsive center-block" src="{{ $idea->image }}" alt="">
                        <p>{{ $idea->thought }}</p>
                        <div class="btn hvr-grow">
                            buttons
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    <script>
        var seen = {};
        var ideate = <?php echo json_encode($ideate); ?>;
        var projects = ideate
            .map(function(project) { return project.projectId; })
            .filter(function(item) { return seen.hasOwnProperty(item) ? false : (seen[item] = true) } );

        console.log(projects);
    </script>
@endsection