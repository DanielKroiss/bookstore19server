<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<ul>
    @foreach ($books as $book)
        <li><a href="books/{{$book->id}}">{{$book->title}}</a></li>
        <br>
    @endforeach
</ul>

</body>
</html>
