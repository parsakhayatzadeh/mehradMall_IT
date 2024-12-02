<?php

namespace App\Http\Controllers\Admin\Vlan;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Vlan\VlanRequest;
use App\Models\Tejari;
use App\Models\Vlan\Vlan;
use Illuminate\Http\Request;

class VlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vlans = Vlan::all();
        return view("Admin.Vlan.index", compact("vlans"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tejaris = Tejari::all();
        return view("Admin.Vlan.create", compact("tejaris"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VlanRequest $request)
    {
        try {
            //code...
            $inputs = $request->all();
            Vlan::create($inputs);
            return redirect()->route("vlan.index")->with("swal-success", 'ویلن با موفقیت ایجاد شد');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route("vlan.index")->with("swal-error", 'مشکلی در ارتباط با  سرور رخ داده است ');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Vlan $vlan)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vlan $vlan)
    {
        try {
            //code...
            $tejaris = Tejari::all();
            return view("Admin.Vlan.edit" , compact("tejaris" , 'vlan'));
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route("vlan.index")->with("swal-error" , 'مشکلی در ارتباط با سرور رخ داده است');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VlanRequest $request, Vlan $vlan)
    {
        try {
            //code...
            $inputs = $request->all();
            $vlan->update($inputs);
            return redirect()->route("vlan.index")->with("swal-success" , 'ویلن مورد نظر با موفقیت ویرایش گردید');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route("vlan.index")->with("swal-error" , 'مشکلی در ارتباط با سرور رخ داده است');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vlan $vlan)
    {
        //
        try {
            //code...
            $vlan->delete();
            return redirect()->route('vlan.index')->with("swal-success" , 'ویلن مورد نظر با موفقیت حذف گردید');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('vlan.index')->with("swal-error" , 'مشکلی در ارتباط با سرور رخ دادها است');
        }
    }

    public function status(Vlan $vlan)
    {
        $vlan->status = $vlan->status == 0 ? 1 : 0;
        $result  = $vlan->save();
        if ($result) {
            if ($vlan->status == 0) {
                return response()->json(['status' => true, 'checked' => false]);
            } else {
                return response()->json(['status' => true, 'checked' => true]);
            }
        } else {
            return response()->json(['status' => false]);
        }
    }
}
