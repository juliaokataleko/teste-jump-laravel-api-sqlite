<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/setup", function () {

    $credencials = [
        "email" => "admin@admin.com",
        "password" => "password"
    ];

    if (!Auth::attempt($credencials)) {
        $user = User::create([
            "email" => "admin@admin.com",
            "name" => "Admin",
            "password" => bcrypt("password")
        ]);

        if (Auth::attempt($credencials)) {
            
            $user = Auth::user();
            $adminToken = $user->createToken("admin-token", ["create", "update", "delete"]);
            $updateToken = $user->createToken("update-token", ["create", "update"]);
            $basicToken = $user->createToken("update-token");

            return [
                "admin" => $adminToken->plainTextToken,
                "update" => $updateToken->plainTextToken,
                "basic" => $basicToken->plainTextToken
            ];

        }
    } else {
        $user = Auth::user();
        $adminToken = $user->createToken("admin-token", ["create", "update", "delete"]);
        $updateToken = $user->createToken("update-token", ["create", "update"]);
        $basicToken = $user->createToken("update-token");

        return [
            "admin" => $adminToken->plainTextToken,
            "update" => $updateToken->plainTextToken,
            "basic" => $basicToken->plainTextToken
        ];
    }

});
