
<!DOCTYPE html>
<html>
<body>

<h2>Insert Client</h2>

<form action="{{ route('insertStudent') }}" method="POST">
  @csrf
  <label for="studentName">student name:</label><br>
  <input type="text" id="studenttName" name="studentName" value="John"><br>
  <label for="age">age:</label><br>
  <input type="text" id="age" name="age"><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>
