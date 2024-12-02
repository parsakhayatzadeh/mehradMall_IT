<?php

namespace App\Http\Controllers\Admin\Router;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Router\RouterRequest;
use App\Models\Router\Router;
use App\Models\Tejari;
use Illuminate\Http\Request;

class RouterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $routes = Router::all();
        return view("Admin.Router.index", compact("routes"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $tejaris = Tejari::all();
        return view("Admin.Router.create", compact("tejaris"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RouterRequest $request)
    {
        try {
            //code...
            $inputs = $request->all();
            Router::create($inputs);
            return redirect()->route("router.index")->with("swal-success", 'اطلاعات روتر باموفقیت ایجاد شد ');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route("router.index")->with('swal-error', 'مشکلی در ارتباط با سرور رخ داده است ');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Router $router)
    {
        try {
            //code...
            return view("Admin.Router.edit", compact("router"));
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route("router.index")->with('swal-error', 'مشکلی در ارتباط با سرور رخ داده است ');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RouterRequest $request, Router $router)
    {
        try {
            //code...
            $inputs = $request->all();

            $router->update($inputs);
            return redirect()->route("router.index")->with('swal-success', 'روتر مورد نظر ویرایش گردید');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route("router.index")->with("swal-error", 'مشکلی در ارتباط با  سرور رخ داده است');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Router $router)
    {
        try {
            //code...
            $router->delete();

            return redirect()->route("router.index")->with("swal-success", 'روتر مورد نظر حذف گردید');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route("router.index")->with("swal-error", 'مشکلی در ارتباط با  سرور رخ داده است ');
        }
    }

    public function status(Router  $router)
    {
        $router->status = $router->status == 0 ? 1 : 0;
        $result  = $router->save();
        if ($result) {
            if ($router->status == 0) {
                return response()->json(['status' => true, 'checked' => false]);
            } else {
                return response()->json(['status' => true, 'checked' => true]);
            }
        } else {
            return response()->json(['status' => false]);
        }
    }
}
