<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show {{ $students->studentName }}</title>
</head>
<body>
@include('includes.studentNav')
    <h1><strong>Student: </strong>{{ $students->studentName }}</h1>
    <hr>
    <h2><strong>age: </strong>{{ $students->age }}</h2>
</body>
</html>