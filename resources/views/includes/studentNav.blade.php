<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nav</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Start Nav bar -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Students</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ route('addStudent') }}">Add</a></li>
        <li><a href="{{ route('students') }}">Students</a></li>
        <li><a href="{{ route('trashedStudents') }}">Trashed</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
    </div>
  </nav>
  <!-- End Nav bar -->
</body>
</html>