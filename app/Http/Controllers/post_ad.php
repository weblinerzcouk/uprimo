<?php

namespace App\Http\Controllers;

use App\Mail\verifyEmail;
use App\Models\Mod_ad_images;
use App\Models\Mod_category;
use App\Models\Mod_messages;
use App\Models\Mod_post_ad;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\AssignOp\Mod;

class post_ad extends Controller
{
    public function post_ad()
    {
        $category                 = Mod_category::where('status',1)->get();
        return view('pages.ads.post_ads',[
            'category'       => $category
        ]);
    }
    public function save_ad(Request $request)
    {
       // dd($request->title);
        $input                  = $request->all();
        $ad                     = Mod_post_ad::orderBy('created_at','desc')->first();
        if ($ad!=null)
        {
            $ad_id              = $ad->id+1;
        }
        else
        {
            $ad_id              = 1;
        }

        // check that user is log in or not
        if (Auth::user())
        {
            $user  = Auth::user();
        }
        else
        {

               /* $this->validate($request,[
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:6',
                ]);*/
                $user                         = User::where('email',$input['email'])->first();
                if ($user==null)
                {
                    $new_user                   = new User();
                    $new_user->name             = $input['name'];
                    $new_user->email            = $input['email'];
                    $new_user->password         = bcrypt($input['phone_no']);
                    $new_user->phone_no         = $input['phone_no'];
                    $new_user->status           = 1;
                    $new_user->save();
                    $user                   = User::latest()->first();
                    Auth::login($user);
                }
                else
                {
                     Auth::login($user);
                }


            }


        $ad                    = new Mod_post_ad();
        $ad->id                = $ad_id;
        $ad->category          = $input['category'];
        $ad->sub_category      = null;
        $ad->user              = $user->id;
        $ad->title             = $input['title'];
        $ad->description       = $input['description'];
        //$ad->type              = $input['type'];
        $ad->price             = $input['price'];
        $ad->currency          = $input['currency'];
        $ad->location          = $input['location'];
        $ad->visibility_status = Input::has('visibility_status') ? Input::get('visibility_status') : null;
        $ad->min_area          = Input::has('min_area') ? Input::get('min_area') : null;
        $ad->max_area          = Input::has('max_area') ? Input::get('max_area') : null;
        $ad->rooms             = Input::has('rooms') ? Input::get('rooms') : null;
        $ad->bathrooms         = Input::has('bathrooms') ? Input::get('bathrooms') : null;
        $ad->city              = Input::has('city') ? Input::get('city') : null;
        $ad->town              = Input::has('town') ? Input::get('town') : null;
        $ad->brand             = Input::has('brand') ? Input::get('brand') : null;
        $ad->model	            = Input::has('model') ? Input::get('model') : null;
        $ad->fuel_type         = Input::has('fuel_type') ? Input::get('fuel_type') : null;
        $ad->job_type          = Input::has('job_type') ? Input::get('job_type') : null;
        $ad->role              = Input::has('role') ? Input::get('role') : null;
        $ad->min_salary       = Input::has('min_salary') ? Input::get('min_salary') : null;
        $ad->max_salary       = Input::has('max_salary') ? Input::get('max_salary') : null;
        $ad->experience       = Input::has('experience') ? Input::get('experience') : null;
        $ad->localities       = Input::has('localities') ? Input::get('localities') : null;
        $ad->product_type     = Input::has('product_type') ? Input::get('product_type') : null;
        $ad->size             = Input::has('size') ? Input::get('size') : null;
        $ad->clothing_type    = Input::has('clothing_type') ? Input::get('clothing_type') : null;
        $ad->clothing_for     = Input::has('clothing_for') ? Input::get('clothing_for') : null;
        $ad->age              = Input::has('age') ? Input::get('age') : null;
        $ad->event            = Input::has('event') ? Input::get('event') : null;
        $ad->start_date       = Input::has('start_date') ? Input::get('start_date') : null;
        $ad->end_date         = Input::has('end_date') ? Input::get('end_date') : null;
        $ad->start_time       = Input::has('start_time') ? Input::get('start_time') : null;
        $ad->end_time        = Input::has('end_time') ? Input::get('end_time') : null;
        $ad->event_category  = Input::has('event_category') ? Input::get('event_category') : null;
        $ad->business_owner  = Input::has('business_owner') ? Input::get('business_owner') : null;
        $ad->established_date = Input::has('established_date') ? Input::get('established_date') : null;
        $ad->no_of_employees  = Input::has('no_of_employees') ? Input::get('no_of_employees') : null;
        $ad->working_days     = Input::has('working_days') ? Input::get('working_days') : null;
        $ad->material         = Input::has('material') ? Input::get('material') : null;
        $ad->ad_type          = Input::has('ad_type') ? Input::get('ad_type') : null;
        $ad->pet_type         = Input::has('pet_type') ? Input::get('pet_type') : null;
        $ad->status           = 1;
        $images1=array();

        if($files=$request->file('images')){
            foreach($files as $file) {
                $name=$file->getClientOriginalName();
                $file->move(base_path('images/ads/'.$ad_id),$name);
                $images1[]=$name;
                $images                = new Mod_ad_images();
                $images->ad             = $ad_id;
                $images->image          = $name;
                $images->save();
            }

            $ad->display_pic            = $images1['0'];
            }
        /*if($request->hasFile('file'))
        {
            $image = $request->file->getClientOriginalName();
            $request->file->move(base_path('images/ads/'.$user->id),$image);
            $images                = new Mod_ad_images();
            $images->id             = $img_id;
            $images->ad             = $ad_id;
            $images->image          = $image;
            $images->save();
        }*/
        $ad->save();
        return redirect('/user/my_ads');
    }
    public function update_ad($id)
    {
        $ad                      = Mod_post_ad::whereId($id)->first();
       // dd($ad);
        $category                = Mod_category::where('status',1)->get();
        return view('pages.ads.edit_ad',[
            'category'       => $category,
            'ad'             => $ad
        ]);
    }
    public function update_ads(Request $request)
    {
        $input                  = $request->all();
        $ad                     = Mod_post_ad::findorfail($input['ad_id']);
        $ad->category          = $input['category'];
        $ad->sub_category      = null;
        $ad->user              = Auth::user()->id;
        $ad->title             = $input['title'];
        $ad->description       = $input['description'];
        //$ad->type              = $input['type'];
        $ad->price             = $input['price'];
        $ad->location          = $input['location'];
        $ad->visibility_status = Input::has('visibility_status') ? Input::get('visibility_status') : null;
        $ad->min_area          = Input::has('min_area') ? Input::get('min_area') : null;
        $ad->max_area          = Input::has('max_area') ? Input::get('max_area') : null;
        $ad->rooms             = Input::has('rooms') ? Input::get('rooms') : null;
        $ad->bathrooms         = Input::has('bathrooms') ? Input::get('bathrooms') : null;
        $ad->city              = Input::has('city') ? Input::get('city') : null;
        $ad->town              = Input::has('town') ? Input::get('town') : null;
        $ad->brand             = Input::has('brand') ? Input::get('brand') : null;
        $ad->model	            = Input::has('model') ? Input::get('model') : null;
        $ad->fuel_type         = Input::has('fuel_type') ? Input::get('fuel_type') : null;
        $ad->job_type          = Input::has('job_type') ? Input::get('job_type') : null;
        $ad->role              = Input::has('role') ? Input::get('role') : null;
        $ad->min_salary       = Input::has('min_salary') ? Input::get('min_salary') : null;
        $ad->max_salary       = Input::has('max_salary') ? Input::get('max_salary') : null;
        $ad->experience       = Input::has('experience') ? Input::get('experience') : null;
        $ad->localities       = Input::has('localities') ? Input::get('localities') : null;
        $ad->product_type     = Input::has('product_type') ? Input::get('product_type') : null;
        $ad->size             = Input::has('size') ? Input::get('size') : null;
        $ad->clothing_type    = Input::has('clothing_type') ? Input::get('clothing_type') : null;
        $ad->clothing_for     = Input::has('clothing_for') ? Input::get('clothing_for') : null;
        $ad->age              = Input::has('age') ? Input::get('age') : null;
        $ad->event            = Input::has('event') ? Input::get('event') : null;
        $ad->start_date       = Input::has('start_date') ? Input::get('start_date') : null;
        $ad->end_date         = Input::has('end_date') ? Input::get('end_date') : null;
        $ad->start_time       = Input::has('start_time') ? Input::get('start_time') : null;
        $ad->end_time        = Input::has('end_time') ? Input::get('end_time') : null;
        $ad->event_category  = Input::has('event_category') ? Input::get('event_category') : null;
        $ad->business_owner  = Input::has('business_owner') ? Input::get('business_owner') : null;
        $ad->established_date = Input::has('established_date') ? Input::get('established_date') : null;
        $ad->no_of_employees  = Input::has('no_of_employees') ? Input::get('no_of_employees') : null;
        $ad->working_days     = Input::has('working_days') ? Input::get('working_days') : null;
        $ad->material         = Input::has('material') ? Input::get('material') : null;
        $ad->ad_type          = Input::has('ad_type') ? Input::get('ad_type') : null;
        $ad->pet_type         = Input::has('pet_type') ? Input::get('pet_type') : null;
        $ad->status           = 1;
        $images1=array();

        if($files=$request->file('images')){
            foreach($files as $file) {
                $name=$file->getClientOriginalName();
                $file->move(base_path('images/ads/'.$ad->id),$name);
                $images1[]=$name;
                $images                = new Mod_ad_images();
                $images->ad             = $ad->id;
                $images->image          = $name;
                $images->save();
            }

            $ad->display_pic            = $images1['0'];
        }
        /*if($request->hasFile('file'))
        {
            $image = $request->file->getClientOriginalName();
            $request->file->move(base_path('images/ads/'.$user->id),$image);
            $images                = new Mod_ad_images();
            $images->id             = $img_id;
            $images->ad             = $ad_id;
            $images->image          = $image;
            $images->save();
        }*/
        $ad->save();
        return redirect('/user/my_ads');
    }
    public function view_ad($id)
    {
        $ad                     = Mod_post_ad::whereId($id)->with('adspics')->first();
        $related_products       = Mod_post_ad::where('category',$ad->category)
                                              ->get();
        /*if (count($related_products->get())<10)
        {
            $related_products1       = Mod_post_ad::where('type',$ad->type)
                                                 ->orwhere('location',$ad->location);
            $final_products          = $related_products->union($related_products1);
        }
        else
        {
            $final_products         = $related_products;
        }*/
       //dd($ad);
        return view('pages.ads.ad_detail',[
            'ad'                   => $ad,
            'related_products'     => $related_products
        ]);
    }
    public function featured_ad($id)
    {
        $ad                        = Mod_post_ad::findorfail($id);
        if ($ad->featured_status==0 || $ad->featured_status==null)
        {
            $ad->featured_status       = 1;
        }
        else{
            $ad->featured_status       = 0;
        }
        $ad->save();
        $ads                           = Mod_post_ad::where('user',Auth::user()->id)->with('getcatgacc')->get();
        return response()->json($ads);

    }
    public function send_message(Request $request)
    {
        $input                         = $request->all();
        if (Auth::user())
        {
            $user  = Auth::user();
        }
        else
        {
            $user                       = User::where('email',$input['email'])->first();
            if ($user==null)
            {
                $new_user                   = new User();
                $new_user->name             = $input['name'];
                $new_user->email            = $input['email'];
                $new_user->password         = bcrypt('ad737dhdwwk');
                $new_user->phone_no         = 123;
                $new_user->status           = 1;
                $new_user->save();
                $user                       = User::latest()->first();
            }
        }
        $message                            = new Mod_messages();
        $message->user_id                   = $user->id;
        $message->receiver_id               = $input['receiver'];
        $message->message                   = $input['message'];
        $message->save();
        return response()->json('success');

    }
}
