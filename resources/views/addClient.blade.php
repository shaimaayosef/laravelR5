
<!DOCTYPE html>
<html>
<body>

<h2>Insert Client</h2>

<form action="{{ route('insertClient') }}" method="POST">
  @csrf
  <label for="clientName">client name:</label><br>
  <input type="text" id="clientName" name="clientName" value="John"><br>
  <label for="phone">Phone:</label><br>
  <input type="text" id="phone" name="phone"><br><br>
  <label for="email">email:</label><br>
  <input type="email" id="email" name="email" ><br><br>
  <label for="website">website:</label><br>
  <input type="text" id="website" name="website"><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>
