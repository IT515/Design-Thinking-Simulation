@extends('app')

@section('content')

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="row ideateFormRow">
        {{--<div class="container">--}}
            {{--<form id="ideaForm" action="/ideate" method="POST">--}}
                {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                {{--<div class="form-group">--}}
                    {{--<label for="title">Title</label>--}}
                    {{--<input type="text" class="form-control" id="title" name="title" placeholder="Title">--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label for="thought">Thought</label>--}}
                    {{--<input type="text" class="form-control" id="thought" name="thought" placeholder="Thought">--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label for="image">Picture</label>--}}
                    {{--<input type="file" id="image" name="image" >--}}
                    {{--<p class="help-block">Upload an inspirational image.</p>--}}
                {{--</div>--}}
                {{--<buttion type="button" onclick="submitThought()">Test</buttion>--}}
                {{--<button type="submit" class="btn btn-default">Done</button>--}}
            {{--</form>--}}
        {{--</div>--}}
    </div>
    <div class="row ideas">
        @foreach($projectNames as $project)
            <div class="col-lg-3">
                <div class="panel panel-primary" onclick="thoughts({{ $project->id }})">
                    <div class="panel-heading">{{ $project->projectName }}</div>
                    <div class="panel-body">
                        <div class="btn hvr-grow">{{ $groupName[0]->groupName }}</div>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="col-lg-3">
            <div class="panel panel-primary">
                <div class="panel-heading">New project</div>
                <div class="panel-body">
                    <div class="text-center"><i class="fa fa-plus fa-4x white"></i></div>
                </div>
            </div>
        </div>

    </div>


    <script>
        var seen = {};
        var ideate = <?php echo json_encode($ideate); ?>;
        var projectInfo = <?php echo json_encode($projectNames); ?>;
        var groupName = <?php echo json_encode($groupName[0]->groupName); ?>;
        var project = 0;

        console.log(projectInfo);

        function thoughts (projectId) {
            console.log("thoughts");

            // add the idea form
            $(".ideateFormRow")
                    .empty()
                    .append("<div class='container'> " +
                            "<form id='ideaForm' action='/ideate'> " +
                            "<input type='hidden' name='_token' value='" + $('meta[name="csrf-token"]').attr('content') + "'> " +
                            "<div class='form-group'> <label for='title'>Title</label> " +
                            "<input type='text' class='form-control' id='title' name='title' placeholder='Title'> </div> " +
                            "<div class='form-group'> " +
                            "<label for='thought'>Thought</label> " +
                            "<input type='text' class='form-control' id='thought' name='thought' placeholder='Thought'> </div> " +
                            "<div class='form-group'> <label for='image'>Picture</label> " +
                            "<input type='file' id='image' name='image'>" +
                            "<p class='help-block'>Upload an inspirational image.</p> " +
                            "</div><button type='button' class='btn btn-default' onclick='submitThought()'>Done</button> </form> " +
                            "</div><br><br><br>");

            // Set the project depending on what the user selected
            project = projectId;

            var ideas = ideate.filter(function(project){ if (project.projectId == projectId) return project });

            $(".ideas").empty().append("<div class='row'><button class='btn btn-default' onclick='projects()'>Back to projects</button></div>");

            ideas.forEach(function (idea) {
                if(idea.title) {
                    $(".ideas").append("<div class='col-lg-3'>" +
                            "<div class='panel panel-primary'>" +
                            "<div class='panel-heading'>" +
                            idea.title +
                            "</div>" +
                            "<div class='panel-body'>" +
                            "<p>" + idea.thought + "</p>" +
                            "</div>" +
                            "</div>" +
                            "</div>");
                } else {
                    $(".ideas").append("<div class='col-lg-3'>" +
                            "<div class='panel panel-primary'>" +
                            "<div class='panel-body'>" +
                            "<p>" + idea.thought + "</p>" +
                            "</div>" +
                            "</div>" +
                            "</div>");
                }
            });
        }

        function projects () {
            // Reset the project variable
            project = 0;

            console.log("Projects");

            // Killing the idea form
            $(".ideateFormRow").empty();

            // Empty the ideas and fill it with projects
            $(".ideas").empty();
            projectInfo.forEach(function (project) {
                $(".ideas").append('<div class="col-lg-3">' +
                        '<div class="panel panel-primary" onclick="thoughts(' + project.id + ')">' +
                        '<div class="panel-heading">' + project.projectName + '</div>' +
                        '<div class="panel-body">' +
                        '<div class="btn hvr-grow">' + groupName + '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>')
            });

            $(".ideas").append('<div class="col-lg-3">' +
                    '<div class="panel panel-primary">' +
                    '<div class="panel-heading">New project</div>' +
                    '<div class="panel-body"><div class="text-center"><i class="fa fa-plus fa-4x white"></i></div></div>' +
                    '</div>' +
                    '</div>')

        }

//        $("#ideaForm").submit(function( event )
        function submitThought() {
            console.log("Here we go");

            //event.preventDefault();

            var title = $( "#title" ).val(),
                    thought = $( "#thought" ).val(),
                    url = $("#ideaForm").attr( "action"),
                    file = $("#image")[0].files[0];

            var data = { title: title, thought: thought, file : file };



            var serial = $( "#ideaForm" ).serialize();

            // Add the project variable to input string
            if (project){
                serial = serial + "&project=" + project;
                console.log(serial);
            } else {
                return alert('You must enter a project!');
            }



            $.ajax({
                type: 'POST',
                url: url,
                headers: {
                    'X-CSRF-Token' : $('meta[name="csrf-token"]').attr('content')
                },
                processData: false,  // tell jQuery not to process the data
                data: serial,
                success: function(data, textStatus, request){
                    console.log(textStatus);
                    if(title) {
                        $(".ideas").append("<div class='col-lg-3'>" +
                                "<div class='panel panel-primary'>" +
                                "<div class='panel-heading'>" +
                                title +
                                "</div>" +
                                "<div class='panel-body'>" +
                                "<p>" + thought + "</p>" +
                                "</div>" +
                                "</div>" +
                                "</div>");
                    } else {
                        $(".ideas").append("<div class='col-lg-3'>" +
                                "<div class='panel panel-primary'>" +
                                "<div class='panel-body'>" +
                                "<p>" + thought + "</p>" +
                                "</div>" +
                                "</div>" +
                                "</div>");
                    }

                    $( "#ideaForm")[0].reset();
                },
                error: function (request, textStatus, errorThrown) {
                    alert(request.getResponseHeader('some_header'));
                }
            });

        };

        function newProject() {

        };

    </script>
@endsection