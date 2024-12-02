<?php

use App\Http\Controllers\Admin\IpStatic\IpStaticController;
use App\Http\Controllers\Admin\List\ListController;
use App\Http\Controllers\Admin\Phone\PhoneController;
use App\Http\Controllers\Admin\Router\RouterController;
use App\Http\Controllers\Admin\Vlan\VlanController;
use App\Http\Controllers\Auth\loginRegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\CheckLogin;
use App\Models\IpStatic\IpStatic;
use Illuminate\Support\Facades\Route;



Route::get("", [loginRegisterController::class, 'index'])->name("login");
Route::post("loginRegister", [loginRegisterController::class, 'loginRegister'])->name("loginRegister");


Route::middleware([CheckLogin::class])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get("/", [HomeController::class, 'index'])->name("admin.home");

        // list
        Route::resource('list', ListController::class);
        Route::get('list/status/{list}', [ListController::class, 'status'])->name("list.status");
        // single tejari 
        Route::get("single-tejari/{list}", [ListController::class, "singleTejari"])->name("list.single-tejari");
        // end list

        // phone
        Route::resource("phone", PhoneController::class);
        Route::get("phone/status/{phone}", [PhoneController::class, "status"])->name("phone.status");
        // end phone

        // vlan
        Route::resource("vlan", VlanController::class);
        Route::get("vlan/status/{vlan}", [VlanController::class, "status"])->name("vlan.status");
        // end vlan

        // ip static
        Route::resource("ip-static", IpStaticController::class)->names("ip");
        Route::get("ip-statis/status/{ip}", [IpStaticController::class, "status"])->name("ip.status");
        Route::get("ip-statis/getVlan/{tejari}", [IpStaticController::class, "getVlan"])->name("ip.get-vlan");
        // end ip static



        // route
        Route::resource("router", RouterController::class);
        Route::get("router/status/{router}", [RouterController::class, "status"])->name("router.status");

        // end router 


    });
});
