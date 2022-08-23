@extends ('Layouts/layout')

@section ('content')
<div>
    <h1>More Task Description</h1>
    <h4>Title: {{ $task-> title}}</h4>
    <p class="underline text-bold"> Description: {{ $task-> description }}</p>

    <a href="/">Go Back</a>
</div>

@endsection