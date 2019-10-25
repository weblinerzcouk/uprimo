<?php

namespace App\Http\Controllers;

use App\Models\Mod_category;
use App\Models\Mod_post_ad;
use http\Env\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        $categories               = Mod_category::orderBy('created_at','desc')
                                                 ->where('status','1')->take(7)->get();
        $categories1              = Mod_category::where('status','1')->take(4)->get();

        $ads                      = Mod_post_ad::where('status',1)->get();
        return view('pages.index',[
            'categories'     => $categories,
            'categories1'    => $categories1,
            'ads'            => $ads
        ]);
    }
    public function all_categories()
    {
        $categories             = Mod_category::all();
        return view('pages.all_categories',[
            'categories'     => $categories,
        ]);
    }
    public function get_category($id)
    {

        $category                = Mod_category::findorfail($id);
        $ads                     = Mod_post_ad::where('status',1)
                                              ->where('category',$id)
                                              ->get();
        switch ($id)
        {
            case  '1':
                return view('pages.realestate',[
                    'ads'      => $ads
                ]);
            break;
            case  '2':
                return view('pages.vehicles',[
                    'ads'      => $ads
                ]);
            break;
            case '3':
                return view('pages.jobs',[
                    'ads'      => $ads
                ]);
            break;
            case '4':
                return view('pages.electronics',[
                    'ads'      => $ads
                ]);
            break;
            case  '5':
                return view('pages.furniture',[
                    'ads'      => $ads
                ]);
            break;
            case  '6':
                return view('pages.clothing',[
                    'ads'      => $ads
                ]);
            break;
            case '7':
                return view('pages.entertainment',[
                    'ads'      => $ads
                ]);
            break;
            case '8':
                return view('pages.services',[
                    'ads'      => $ads
                ]);
            break;
            case '9':
                return view('pages.gardens',[
                    'ads'      => $ads
                ]);
            break;
            case '10':
                return view('pages.community',[
                    'ads'      => $ads
                ]);
            break;
            case  '11':
                return view('pages.pets',[
                    'ads'      => $ads
                ]);
            break;
        }
    }
}
