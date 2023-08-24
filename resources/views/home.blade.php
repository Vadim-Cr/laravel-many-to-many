@extends("layouts.main-layout")


@section("content")

<div class="container text-center">
    <h1>HOME: Hello, World from Vadim</h1>
    <br>
            <a class="btn btn-primary mx-2 my-2" href="{{route('project.create')}}">CREATE</a>
    <ul class="list-unstyled">
        @foreach ($projects as $project)
        <li>
            @auth
            <a href="{{ route('project.show', $project -> id) }}">
                {{$project->name}}
            </a>
            
            @endauth
        </li>
        @endforeach
    </ul>
</div>


@endsection
