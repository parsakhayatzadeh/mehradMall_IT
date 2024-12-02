<?php

namespace App\Http\Controllers\Admin\IpStatic;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Statics\StaticsRequest;
use App\Models\IpStatic\IpStatic;
use App\Models\Tejari;
use Illuminate\Http\Request;

class IpStaticController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $statics = IpStatic::all();


        return view("Admin.Static.index", compact("statics"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tejaris = Tejari::all();
        return view("Admin.Static.create", compact('tejaris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StaticsRequest $request)
    {
        //

        try {
            //code...
            $inputs = $request->all();
            IpStatic::create($inputs);
            return redirect()->route("ip.index")->with("swal-success", 'ایپی استاتیک با موفقیت ایجاد شد ');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route("ip.index")->with("swal-error", 'مشکلی در ارتباط با سرور رخ داده است ');
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
    public function edit(IpStatic $ip_static)
    {
        try {


            //code...
            return view("Admin.Static.edit", compact("ip_static"));
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route("ip.index")->with("swal-error", 'مشکلی در ارتباط با سرور رخ داده است ');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StaticsRequest $request, IpStatic $ip_static)
    {
        try {
            //code...
            $inputs = $request->all();
            $ip_static->update($inputs);
            return redirect()->route("ip.index")->with("swal-success", 'ایپی استاتیک مورد نظر با موفقیت ویرایش شد');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('ip.index')->with("swal-error", 'مشکلی در ارتباط با سرور رخ داده است ');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IpStatic $ip_static)
    {
        try {
            //code...
            $ip_static->delete();
            return redirect()->route('ip.index')->with('swal-success', 'ایپی استاتیک مورد نظر حذف گردید');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route("ip.index")->with("swal-error", 'مشکلی در ارتباط با سرور رخ داده است ');
        }
    }

    public function status(IpStatic $ip)
    {
        $ip->status = $ip->status == 0 ? 1 : 0;
        $result  = $ip->save();
        if ($result) {
            if ($ip->status == 0) {
                return response()->json(['status' => true, 'checked' => false]);
            } else {
                return response()->json(['status' => true, 'checked' => true]);
            }
        } else {
            return response()->json(['status' => false]);
        }
    }
    public function getVlan(Tejari $tejari)
    {

        // dd($tejari->vlan);
        return response()->json($tejari->vlan->vlan ?? 0);
    }
}
