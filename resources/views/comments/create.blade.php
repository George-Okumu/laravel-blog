<div class="max-w-lg shadow-md bg-blue-100">
    <form action="{{$post->id}}/comments" class="w-full p-4" method="POST">
        @csrf
        <label class="block mb-2">
            <textarea class="block w-full mt-1 rounded outline-none" name="body" id="body" value="{{ old('body') }}" rows="3" placeholder="Add your comment"></textarea>
        </label>
        @include ("Layouts/formerrors")
        <button class="px-3 py-2 text-sm text-blue-100 bg-blue-600 rounded">Comment</button>
    </form>
</div>