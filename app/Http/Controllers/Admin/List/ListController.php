<?php

namespace App\Http\Controllers\Admin\List;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tejari\TejariRequest;
use App\Http\Services\Image\ImageService;
use App\Models\IpStatic\IpStatic;
use App\Models\Phone\Phone;
use App\Models\Router\Router;
use App\Models\Tejari;
use App\Models\Vlan\Vlan;
use Illuminate\Http\Request;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $tejaris = Tejari::all();

        return view("Admin.List.index", compact("tejaris"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Admin.List.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TejariRequest $request, ImageService $imageService)
    {

        try {
            $tejari['name'] = $request->name;
            $tejari['unit'] = $request->unit;
            $tejari['floor'] = $request->floor;
            $tejari['status'] = $request->status;
            if ($request->hasFile("image")) {
                $imageService->setExclusiveDirectory("images" . DIRECTORY_SEPARATOR . "tejaris");
                $result =  $imageService->save($request->file("image"));
                if ($result == false) {

                    return redirect()->route("list.index")->with("swal-error", 'مشکلی در اپلود عکس به وجود امده است');
                }
                $tejari['image'] = $result;
            }
            $createTejari =  Tejari::create($tejari);

            // vlan 
            if ($request->vlan) {
                $vlan['vlan'] = $request->vlan;
                $vlan['port_sw'] = $request->port_sw;
                $vlan['sw'] = $request->sw;
                $vlan['tejari_id'] = $createTejari->id;
                Vlan::create($vlan);
            }

            // phone 
            if ($request->phone) {
                $phone['phone'] = $request->phone;
                $phone['tejari_id'] = $createTejari->id;
                Phone::create($phone);
            }

            // router
            if ($request->internet_speed) {
                $router['internet_speed'] = $request->internet_speed;
                $router['tejari_id'] = $createTejari->id;
                Router::create($router);
            }

            // ipStatis 
            if ($request->ip) {
                $static['ip'] =  $request->ip;
                $static['tejari_id'] = $createTejari->id;
                IpStatic::create($static);
            }

            return redirect()->route("list.index")->with("swal-success", 'واحد تجاری با موفقیت ایجاد شد');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->route("list.index")->with('swal-error', 'مشکلی در ارتباط با سرور رخ داده است');
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
    public function edit(Tejari $list)
    {
        try {
            $tejari = $list;
            return view("Admin.List.edit", compact("tejari"));
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route("list.index")->with('swal-error', 'مشکلی در ارتباط با سرور رخ داده است');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TejariRequest $request, Tejari $list, ImageService $imageService)
    {
        try {
            //code...
            $tejari = $request->all();
            if ($request->hasFile("image")) {
                $imageService->deleteImage($request->file("image"));
                $imageService->setExclusiveDirectory("images" . DIRECTORY_SEPARATOR . "tejaris");
                $result = $imageService->save($request->file("image"));
                if ($result === false) {
                    return redirect()->route("list.edit")->with("swal-error", 'مشکلی در اپلود عکس به وجود امده است');
                }
                $tejari['image'] = $result;
            } else {
                if (isset($tejari['currentImage']) && !empty($list->image)) {
                    $image = $list->image;
                    $image['currentImage'] = $tejari['currentImage'];

                    $tejari['image'] = $image;
                }
            }


            $list->update($tejari);


            // vlan 
            if ($request->vlan) {
                $vlan['vlan'] = $request->vlan ? $request->vlan : $list->vlan->vlan;
                $vlan['port_sw'] = $request->port_sw ? $request->port_sw : $list->vlan->port_sw;
                $vlan['sw'] = $request->sw ? $request->sw : $list->vlan->sw;

                $list->vlan->update($vlan);
            }

            // phone 
            if ($request->phone) {
                $phone['phone'] = $request->phone ? $request->phone : $list->phone->phone;
                $list->phone->update($phone);
            }

            // router
            if ($request->internet_speed) {
                $router['internet_speed'] = $request->internet_speed ? $request->internet_speed : $list->routerr->internet_speed;
                $list->routerr->update($router);
            }

            // ipStatis 
            if ($request->ip) {
                $static['ip'] =  $request->ip ? $request->ip : $list->static->ip;
                $list->static->update($static);
            }
            return redirect()->route("list.index")->with("swal-success", 'واحد با موفقیت ویرایش شد');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->route("list.index")->with('swal-error', 'مشکلی در ارتباط با سرور رخ داده است');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tejari $list)
    {
        try {
            //code...
            $list->delete();
            return redirect()->route("list.index")->with("swal-success", ' واحد تجاری مورد نظر با موفقیت حذف گردید');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route("list.index")->with('swal-error', 'مشکلی در ارتباط با سرور رخ داده است');
        }
    }

    public function status(Tejari $list)
    {
        $list->status = $list->status == 0 ? 1 : 0;
        $result  = $list->save();
        if ($result) {
            if ($list->status == 0) {
                return response()->json(['status' => true, 'checked' => false]);
            } else {
                return response()->json(['status' => true, 'checked' => true]);
            }
        } else {
            return response()->json(['status' => false]);
        }
    }

    public function singleTejari(Tejari $list)
    {
        try {
            //code...
            return view("Admin.List.single-tejari" , compact("list"));
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route("list.index")->with('swal-error', 'مشکلی در ارتباط با سرور رخ داده است');
        }
    }
}
