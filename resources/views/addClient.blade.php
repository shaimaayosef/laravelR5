
<!DOCTYPE html>
<html>
  <head>
   
  </head>
<body>
  @include('includes.nav')
  <br>
<h2 style="margin-left:20px">Insert Client</h2>
<div style="margin-left:20px">
    <form action="{{ route('insertClient') }}" method="POST">
    @csrf
      <label for="clientName">client name:</label><br>
      <p style="color: red">
      @error('clientName')
        {{ $message }}
      @enderror
     </p>
      <input type="text" id="clientName" name="clientName" value="John"><br>
      <label for="phone">Phone:</label><br>
      <p style="color: red">
      @error('phone')
        {{ $message }}
      @enderror
      </p>
      <input type="text" id="phone" name="phone"><br><br>
      <label for="email">email:</label><br>
      <p style="color: red">
      @error('email')
        {{ $message }}
      @enderror
      </p>
      <input type="email" id="email" name="email" ><br><br>
      <label for="website">website:</label><br>
      <p style="color: red">
      @error('website')
        {{ $message }}
      @enderror
      </p>
      <input type="text" id="website" name="website"><br><br>
      <input type="submit" value="Submit">
   </form> 
</div>

</body>
</html>
