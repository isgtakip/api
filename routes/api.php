<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\User;

use App\Http\Resources\UserResource;


use App\Http\Controllers\CustomerMessagesController;
use App\Http\Controllers\SectionsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    $user = $request->user(); 
    return response()->json(new UserResource(User::findOrFail($user->id)));
});

Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'device_name' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }
    $token = $user->createToken($request->device_name)->plainTextToken;
    return response()->json(['token' => $token], 200);

    
});

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::apiResource('customer/messages',CustomerMessagesController::class);
    Route::apiResource('sections', SectionsController::class);
});

