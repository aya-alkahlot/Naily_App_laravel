<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use App\Models\partServices;
use Illuminate\Http\Request;

class PartServicesController extends Controller
{
    public function partTableServices(){
        $service=partServices::get();
        return view('pages.partTableServices',compact('service'));
      }

      public function start(){
        return view("pages.partServices");
      }

    public function create(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'Paragraph' => 'required',
            'banner'=> 'required|image'
        ]);
        $part_services = new partServices();
        $part_services->title = $request->input('title');
        $part_services->Paragraph = $request->input('Paragraph');
        if ($banner = $request->file('banner')) {
            $file_name = Str::slug($request->Title) . '.' . $banner->getClientOriginalExtension();
            $path = public_path('/assets/images/services/' . $file_name);
            Image::make($banner->getRealPath())->resize(202, 182, function ($constraint) {
                $constraint->aspectRatio();
            })->save($path, 100);
            $part_services->banner =  $file_name;
        }
        $part_services->save();
        return redirect()->route('partservice.services.partTableServices');
    }

}
