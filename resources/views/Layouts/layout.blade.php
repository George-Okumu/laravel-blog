<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="blog image" href="https://image.shutterstock.com/image-photo/blogging-blog-word-coder-coding-260nw-520314613.jpg" type="image/x-icon"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Blog</title>
</head>
<body>
    @include ("Layouts.nav")

    <div class="mx-auto h-screen">
    @yield ('content')

    <div>
        @include ("Layouts.footer")
    </div>
    </div>
</body>
</html>