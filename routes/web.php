<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get( 'marwa/{id?}', function ($id=0) {
//     return  ('welcome to my first website'.$id);

// });

Route::get( 'shaimaa/{id?}', function ($id=0) {
    return  ('welcome to my first website'.$id);
})->where(['id' => '[0-9]+']);

/*Route::get( 'marwa/{id?}', function ($id=0) {
    return  ('welcome to my first website'.$id);
})->whereNumber('id');*/

Route::get('course/{name}', function($name) {
    return 'My name is: '.$name;
})->whereIn('name',['shaimaa','sara']);

Route::prefix('cars')->group(function () {
    Route::get('BMW', function () {
        return 'BMW';
    });
    Route::get('MERCEDES', function () {
        return 'MERCEDES';
    });
});

// Route::fallback(function () {
//     // return '404 Not Found';
//     return redirect('shaimaa');
// });
Route::get('test20', function () {
    return view('test');
});
Route::get('form', function () {
    return view('form');
});
Route::post('form', function (Request $request) {
    $data = "";
    if ($request->isMethod('post')) {
        $firstName = $request->input('fname');
        $lastName = $request->input('lname');
        $data = "first name: $firstName <br> last name: $lastName";
    }
    return "Your input was received as <br>" . $data;
})->name('form');

Route::get('test10',[MyController::class,'my_data']); 