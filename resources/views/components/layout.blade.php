<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
  >
  <meta
    http-equiv="X-UA-Compatible"
    content="ie=edge"
  >
  <link
    href="{{ asset('css/app.css') }}"
    rel="stylesheet"
  >
  <link
    rel="stylesheet"
    href="/assets/css/posts.css"
  >
  <title>Document</title>
</head>


<body>
  @include("_header")
  <main class="mt-3 max-w-4xl mx-auto">
    {{ $content }}
  </main>
</body>

</html>
