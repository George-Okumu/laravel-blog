@extends ('Layouts/layout')

@section ('content')
<div class="flex justify-center mt-5 mb-6">
    <div class="shadow shadow-2xl grid grid-cols-1 md:grid-cols-3">
        <div class="mx-4 p-8 md:border-r-2 md:border-green-700">
            <h1 class="font-semibold">More Task Description</h1>
            <h4 class="text-blue-600">Title: {{ $post-> title}}</h4>
            <p class="text-blue-600"> Description: {{ $post-> description }}</p>
            <p class=""> {{ $post-> content }}</p>
            <a class="float-right text-green-700 font-extrabold underline decoration-blue-700" href="/">Go Back</a>
        </div>

        <div class="mx-4 md:mx-0 pt-6 pb-8">
            <h1 class="font-semibold">Comments</h1>
            @if ($post->comments->count() > 0)

            @foreach($post->comments as $comment)
            <h4 class="text-gray-600">{{$comment-> body}} | <span class="">{{$comment->created_at->diffForHumans()}}</span></h4>
            @endforeach

            @else
            <p>No comments available for this post.</p>
            @endif
        </div>

    </div>
</div>

@endsection