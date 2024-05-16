
<!DOCTYPE html>
<html>
<body>
  @include('includes.nav')
  <br>
<h2 style="margin-left:20px">Edit Clients</h2>
<div style="margin-left:20px">
    <form action="editClients/{id}" method="POST">
    @csrf
    @method('put') 
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
</div>

</body>
</html>
