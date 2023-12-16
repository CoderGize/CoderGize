<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;


class PartnerController extends Controller
{
    public function show_partner()
    {
        $partner = partner::latest()->paginate(10);

        return view('admin.partner.show_partner', compact('partner'));
    }

    public function add_partner(Request $request)
    {
        $partner = new partner;

        $logo = $request->logo;


        if($logo)
        {
            $logoname = Str::random(20) . '.' . $logo->getClientOriginalExtension();

            //Save the original image
            $request->logo->move('partner', $logoname);

            //change the image quality using Intervention Image
            $logo = Image::make(public_path('partner/' . $logoname));

            $logo->encode($logo->extension, 10)->save(public_path('partner/' . $logoname));

            $partner->logo = $logoname;
        }

        $partner->save();

        return redirect()->back()->with('message', 'Partner Added');
    }

    public function update_partner($id){

        $partner = Partner::find($id);

        return view('admin.partner.update_partner', compact('partner'));

    }

    public function update_partner_confirm(Request $request, $id)
    {
        $partner = Partner::find($id);

        $logo = $request->logo;



        if ($logo)
        {
            $logoname = Str::random(20) . '.' . $logo->getClientOriginalExtension();

            // Save the original image
            $request->logo->move('partner', $logoname);

            // Change the image quality using Intervention Image
            $logo = Image::make(public_path('partner/' . $logoname));
            $logo->encode($logo->extension, 10)->save(public_path('partner/' . $logoname)); // Adjust quality as needed

            $partner->logo = $logoname;
        }

        $partner->save();

        return redirect('/admin/show_partner')->with('message', 'Partner Updated');
    }

    public function delete_partner($id)
    {
        $partner = Partner::find($id);

        $partner->delete();

        return redirect()->back()->with('message', 'Partner Deleted');
    }
}
