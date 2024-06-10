<!DOCTYPE html>
<html>
<head>
    <title>My Web Page</title>
</head>
<body>
    <h1>Welcome to My Web Page</h1>
    <p>This is a test page.</p>
    <h2>{{ $fname }}</h2>
    <hr>
    <h2>{{ $lname }}</h2>
    <button>sign out</button>
    $users = User::with('roles')->get();

foreach ($users as $user) {
    echo "User: " . $user->name . "\nRoles:\n";
    foreach ($user->roles as $role) {
        echo " - " . $role->name . "\n";
    }
}
</body>
</html>