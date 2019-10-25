<?php

namespace App\Http\Controllers\admin\dashboard;

use App\Models\Mod_attributes;
use App\Models\Mod_category;
use App\Models\Mod_city;
use App\Models\Mod_packages;
use App\Models\Mod_post_ad;
use App\Models\Mod_sub_category;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\Types\Void_;
use PhpParser\Node\Expr\AssignOp\Mod;

class dashboard_controller extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function profile()
    {
        return view('admin.profile');
    }
    public function category()
    {
        $category                  = Mod_category::all();
        return view('admin.categories.index',[
            'category'  => $category
        ]);
    }
    public function add_category()
    {
        $category                     = Mod_category::orderBy('created_at','desc')->first();
        if ($category!=null)
        {
            $category_id              = $category->id+1;
        }
        else
        {
            $category_id              = 1;
        }
        return view('admin.categories.add',[
            'category_id' => $category_id
        ]);
    }
    public function save_category(Request $request)
    {
        $input                       = $request->all();
        $category                    = new Mod_category();
        $category->id                = $input['category_id'];
        $category->name              = $input['category_name'];
        $category->description       = $input['description'];
        $category->status            = $input['status'];
        if($request->hasFile('file'))
        {
            $image = $request->file->getClientOriginalName();
            $request->file->move(base_path('images/admin/category/icons'),$image);
            $category->icon              = $image;
        }
        $category->save();
        $category1                   = Mod_category::all();
        return response()->json($category1);

    }
    public function edit_category(Request $request,$id)
    {
        $category                   = Mod_category::findorfail($id);
        return view('admin.categories.edit',[
            'category'    => $category
        ]);
    }
    public function update_category(Request $request)
    {
        $input                       = $request->all();
        $category                    =  Mod_category::findorfail($input['category_id']);
        $category->name              = $input['category_name'];
        $category->description       = $input['description'];
        $category->status            = $input['status'];
        $category->icon              = $input['icon'];
        $category->color             = $input['color'];
        $category->btn_color         = $input['btn_color'];
        $category->save();
        $category1                   = Mod_category::all();
        return response()->json($category1);
    }

    public function delete_category($id)
    {
        $category                    = Mod_category::findorfail($id);
        $category->delete();
        $category1                   = Mod_category::all();
        return response()->json($category1);

    }
    public function sub_categories($category)
    {
        $sub_categories             = Mod_sub_category::where('category',$category)->get();
        return response()->json($sub_categories);
    }

    //cities
    public function city()
    {
        $city                  = Mod_city::all();
        return view('admin.cities.index',[
            'city'  => $city
        ]);
    }
    public function add_city()
    {
        $city                     = Mod_city::orderBy('created_at','desc')->first();
        if ($city!=null)
        {
            $city_id              = $city->id+1;
        }
        else
        {
            $city_id              = 1;
        }
        return view('admin.cities.add',[
            'city_id' => $city_id
        ]);
    }
    public function save_city(Request $request)
    {
        $input                       = $request->all();
        $city                    = new Mod_city();
        $city->id                = $input['city_id'];
        $city->name              = $input['city_name'];
        $city->status            = $input['status'];
        $city->save();
        $city1                   = Mod_city::all();
        return response()->json($city1);

    }
    public function edit_city(Request $request,$id)
    {
        $city                   = Mod_city::findorfail($id);
        return view('admin.cities.edit',[
            'city'    => $city
        ]);
    }
    public function update_city(Request $request)
    {
        $input                       = $request->all();
        $city                    =  Mod_city::findorfail($input['city_id']);
        $city->name              = $input['city_name'];
        $city->status            = $input['status'];
        $city->save();
        $city1                   = Mod_city::all();
        return response()->json($city1);
    }

    public function delete_city($id)
    {
        $city                    = Mod_city::findorfail($id);
        $city->delete();
        $city1                   = Mod_city::all();
        return response()->json($city1);

    }
//Attributes
    //cities
    public function attribute()
    {
        $attribute                  = Mod_attributes::all();

        return view('admin.attributes.index',[
            'attribute'  => $attribute,

        ]);
    }
    public function add_attribute()
    {
        $attribute                     = Mod_attributes::orderBy('created_at','desc')->first();
        $categories                    = Mod_category::where('status',1)->get();
        if ($attribute!=null)
        {
            $attribute_id              = $attribute->id+1;
        }
        else
        {
            $attribute_id              = 1;
        }
        return view('admin.attributes.add',[
            'attribute_id' => $attribute_id,
            'categories' => $categories
        ]);
    }
    public function save_attribute(Request $request)
    {
        $input                       = $request->all();
        $attribute                    = new Mod_attributes();
        $attribute->category          = $input['category'];
        $attribute->sub_category      = $input['sub_category'];
        $attribute->name              = $input['attribute_name'];
        $attribute->status            = $input['status'];
        $attribute->save();
        $attribute1                   = Mod_attributes::all();
        return response()->json($attribute1);

    }
    public function edit_attribute(Request $request,$id)
    {
        $attribute                   = Mod_attributes::findorfail($id);
        $categories                    = Mod_category::where('status',1)->get();
        return view('admin.attributes.edit',[
            'attribute'    => $attribute,
            'categories' => $categories
        ]);
    }
    public function update_attribute(Request $request)
    {
        $input                       = $request->all();
        $attribute                    =  Mod_attributes::findorfail($input['attribute_id']);
        $attribute->category          = $input['category'];
        $attribute->sub_category      = $input['sub_category'];
        $attribute->name              = $input['attribute_name'];
        $attribute->status            = $input['status'];
        $attribute->save();
        $attribute1                   = Mod_attributes::all();
        return response()->json($attribute1);
    }

    public function delete_attribute($id)
    {
        $attribute                    = Mod_attributes::findorfail($id);
        $attribute->delete();
        $attribute1                   = Mod_attributes::all();
        return response()->json($attribute1);

    }


    // Ads
    public function ads()
    {
        $ads                         = Mod_post_ad::all();
        return view('admin.ads.ad',[
            'ads'       => $ads
        ]);
    }
    public function featured_ads()
    {
        $ads                         = Mod_post_ad::where('featured_status',1)
                                                  ->where('status',1)
                                                  ->get();
        return view('admin.ads.featured_ads',[
            'ads'       => $ads
        ]);
    }
    public function view_ad($id)
    {
        $ad                         = Mod_post_ad::whereId($id)->with('adspics')->first();
        return view('admin.ads.view_ad',[
            'ad'       => $ad
        ]);
    }
    public function active_ad($id)
    {
        $ad                         = Mod_post_ad::whereId($id)->first();
        if ($ad->status==1)
        {
            $ad->status             = 0;
        }
        else
        {
            $ad->status             = 1;
        }
        $ad->save();
        $ads                        = Mod_post_ad::with('getcatgacc','useracc')->get();
        return response()->json($ads);
    }
    public function featured($id)
    {
        $ad                         = Mod_post_ad::whereId($id)->first();
        if ($ad->featured_status==1)
        {
            $ad->featured_status             = 0;
        }
        else
        {
            $ad->featured_status             = 1;
        }
        $ad->save();
        $ads                        = Mod_post_ad::where('featured_status',1)->with('getcatgacc','useracc')->get();
        return response()->json($ads);
    }
    public function users()
    {
        $users                      = User::all();
        return view('admin.users.index',[
            'users'  => $users
        ]);
    }
    public function active_user($id)
    {
        $user                         = User::whereId($id)->first();
        if ($user->status==1)
        {
            $user->status             = 0;
        }
        else
        {
            $user->status             = 1;
        }
        $user->save();
      $users                          = User::all();
      return response()->json($users);
    }
    public function package()
    {
        $package                     = Mod_packages::all();
        return view('admin.memberships.index',[
           'package'            => $package
        ]);
    }
    public function add_package()
    {
        return view('admin.memberships.add');
    }
    public function save_package(Request $request)
    {
        $package                    = new Mod_packages();
        $input                      = $request->all();
        $package->name              = $input['name'];
        $package->recurring         = $input['recurring'];
        $package->price             = $input['price'];
        $package->ads               = $input['ads'];
        $package->featured_ads      = $input['featured_ads'];
        $package->status            = 1;
        $package->save();
        $packages                   = Mod_packages::all();
        return response()->json($packages);
    }
    public function edit_package($id)
    {
        $package                    = Mod_packages::whereId($id)->first();
        return view('admin.memberships.edit',[
            'package'           => $package
        ]);
    }
    public function update_package(Request $request)
    {
        $input                      = $request->all();
        $package                    = Mod_packages::findorfail($input['id']);
        $package->name              = $input['name'];
        $package->recurring         = $input['recurring'];
        $package->price             = $input['price'];
        $package->ads               = $input['ads'];
        $package->featured_ads      = $input['featured_ads'];
        $package->status            = $input['status'];
        $package->save();
        $packages                   = Mod_packages::all();
        return response()->json($packages);
    }
    public function delete_package($id)
    {
        $package                    = Mod_packages::findorfail($id);
        $package->delete();
        $packages                  = Mod_packages::all();
        return response()->json($packages);
    }
}
