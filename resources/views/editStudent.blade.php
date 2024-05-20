<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Edit Student</title>
  </head>
<body>
@include('includes.studentNav')
<div class="container" style="margin-left: 20px ">
  <h2>Edit Student</h2>

  <form action="{{ route('updateStudent', $students->id) }}" method="POST">
    @csrf
    @method('put')
    <label for="studentName">Student name:</label><br>
    <p style="color: red">
      @error('studentName')
        {{ $message }}
      @enderror
    </p>
    <input type="text" id="studentName" name="studentName" class="form-control" value="{{ $students->studentName }}"><br>
    <label for="phone">Phone:</label><br>
    <p style="color: red">
      @error('age')
        {{ $message }}
      @enderror
    </p>
    <input type="text" id="age" name="age" class="form-control" value="{{ $students->age }}"><br><br>
    <input type="submit" value="Submit">
  </form> 
</div>

</body>
</html>