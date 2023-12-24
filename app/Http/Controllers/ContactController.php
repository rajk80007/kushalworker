<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;

class ContactController extends Controller
{
   public function about()
   {
    return view('about');
   }

   public function services()
   {
    return view('services');
   }
   public function contact()
   {
    return view('contact');
   }
   public function contact_save(Request $request)
   {         
        $data = new work;

        $data->name=$request->input('name');

        $data->email=$request->input('email');

        $data->mobile = $request->input('mobile');

        $data->cat_id=$request->input('category');

        $data->query=$request->input('query');

        $image = $request->file;

        if($image){

            $imagename = time().'.'.$image->getClientOriginalExtension();
            
            $request->file->move('file_image', $imagename);
            
            $data->image_url = $imagename;
            
        }
        $data->save();

        return redirect()->back()->with('message', 'Your details have been saved successfully. We will contact you soon. Thanks for being with us.');

   }
}
