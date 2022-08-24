@extends ("Layouts/layout")
@section ("content")
<div class="py-4">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form method="POST" action="/posts">
                    @CSRF
                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Title <span class="text-red-500">*</span></label></br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="title" id="title" value="{{ old('title') }}" required>
                    </div>

                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Description</label></br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="description" id="description" value="{{ old('description') }}" placeholder="(Optional)">
                    </div>

                    <div class="mb-8">
                        <label class="text-xl text-gray-600">Content <span class="text-red-500">*</span></label></br>
                        <textarea name="content" value="{{ old('content') }}" class="border-2 border-gray-500">

                        </textarea>
                    </div>
                    @include ("Layouts/formerrors")

                    <div class="p-1">
                        <!-- <select class="border-2 border-gray-300 border-r p-2" name="action">
                                <option>Save and Publish</option>
                                <option>Save Draft</option>
                            </select> -->
                        <button role="submit" class="p-2 bg-blue-500 text-white hover:bg-blue-400">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('content');
</script>
@endsection