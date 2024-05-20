
<!DOCTYPE html>
<html>
<body>
@include('includes.studentNav')
<h2>Insert Student</h2>

<form action="{{ route('insertStudent') }}" method="POST">
  @csrf
  <label for="studentName">student name:</label><br>
  <p style="color: red">
  @error('studentName')
    {{ $message }}
  @enderror
  </p>
  <input type="text" id="studenttName" name="studentName" value="John"><br>
  <label for="age">age:</label><br>
  <p style="color: red">
  @error('age')
    {{ $message }}
  @enderror
  </p>
  <input type="text" id="age" name="age"><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>
