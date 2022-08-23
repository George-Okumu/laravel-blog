@extends ('Layouts/layout')

@section ('content')
<div class="flex justify-center mt-5">
    <div class="shadow shadow-2xl">
        <div class="mx-4 pt-6 pb-8">
            <h1 class="font-semibold">More Task Description</h1>
            <h4 class="text-blue-600">Title: {{ $post-> title}}</h4>
            <p class="text-blue-600"> Description: {{ $post-> description }}</p>

            <a class="float-right text-green-700 font-extrabold underline decoration-blue-700" href="/">Go Back</a>
        </div>
    </div>
</div>

@endsection