<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Login\LoginRegisterRequest;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginRegisterController extends Controller
{
    //
    public function index()
    {
        return view("user.login");
    }

    public function loginRegister(LoginRegisterRequest $request)
    {
        try {
            //code...
            $inputs = $request->all();
            $user = User::where("name", $inputs['name'])->first();



            if ($user) {
                if ($inputs['password'] == $user->password) {
                    Auth::login($user);
                    return redirect()->route("admin.home");

                } else {
                    return redirect()->route("login")->with("faildPassword", 'نام کاربری یا رمز عبور اشتباه است');
                }
            } else {
                return redirect()->route("login")->with("faildPassword", 'کاربری پیدا نشد');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
