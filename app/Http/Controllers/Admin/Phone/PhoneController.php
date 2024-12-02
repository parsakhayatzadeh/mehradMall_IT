<?php

namespace App\Http\Controllers\Admin\Phone;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Phone\PhoneRequest;
use App\Models\Phone\Phone;
use App\Models\Tejari;
use Illuminate\Http\Request;

class PhoneController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phones = Phone::all();
        return view("Admin.Phone.index", compact("phones"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $tejaris = Tejari::all();
        return view("Admin.Phone.create", compact("tejaris"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PhoneRequest $request)
    {

        try {
            //code...
            $inputs = $request->all();
            Phone::create($inputs);
            return redirect()->route("phone.index")->with("swal-success", 'تلفن با موفقیت ایجاد  شد');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route("phone.index")->with("swal-error", 'مشکلی در ارتباط با سرور رخ دادها ست لطفا بعدا متحان کنید ');
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
    public function edit(Phone $phone)
    {
        $tejaris = Tejari::all();
        return view("Admin.Phone.edit", compact("tejaris", 'phone'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(PhoneRequest $request, Phone $phone)
    {
        try {
            //code...
            $inputs = $request->all();
            $phone->update($inputs);
            return redirect()->route('phone.index')->with('swal-success', 'تلفن موردنظر با موفقیت ویرایش گردید');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route("phone.index")->with("swal-error", 'مشکلی در ارتباط با سرور رخ داده است');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Phone $phone)
    {
        try {
            //code...
            $phone->delete();
            return redirect()->route("phone.index")->with("swal-success", 'تلفن مورد نظر با موفقیت حذف گردید');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route("phone.index")->with("swal-error", 'مشکلی در ارتباط با سرور رخ داده است ');
        }
    }

    public function status(Phone $phone)
    {
        $phone->status = $phone->status == 0 ? 1 : 0;
        $result  = $phone->save();
        if ($result) {
            if ($phone->status == 0) {
                return response()->json(['status' => true, 'checked' => false]);
            } else {
                return response()->json(['status' => true, 'checked' => true]);
            }
        } else {
            return response()->json(['status' => false]);
        }
    }
}
