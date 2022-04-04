<html>
    <head>
        <title></title>
</head>
<body>
    <h1>{{ $book_name }}</h1>
    <h2>{{ $bible_version }}</h2>

   @for($i = 1; $i <= $number_of_chapters; $i++)
    <h3>
        <a href="/chapter/{{ $i }}">Chapter 1 {{ $i }}</a>
    </h3>
    @endfor


    <h3>
        <a href="">Read All Chapters</a>
    </h3>
        



</body>
</html>