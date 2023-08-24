@extends("layouts.main-layout")


@section("content")

<div class="container text-center pt-5">
   <h1>
       {{$projects->name}}
   </h1>
   <p>
   {{$projects->description}}    
   </p>
   <div class="row">
    <span class="col bg-dark text-light rounded m-3 p-2">
       Start date: {{$projects -> start_date}}
    </span>
    <span class="col bg-dark text-light rounded m-3 p-2">
       End date: {{$projects -> end_date}}
   </span>
    <span class="col bg-dark text-light rounded m-3 p-2">
       Difficulty: {{$projects -> difficulty}}
    </span>
    <span class="col bg-dark text-light rounded m-3 p-2">
       Type: {{$projects -> type -> name}}
    </span>
   </div>

</div>

@endsection