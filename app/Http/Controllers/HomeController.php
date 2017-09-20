<?php

namespace App\Http\Controllers;

use App\Back;
use App\Cause;
use App\Contact;
use App\Guarantee;
use App\Material;
use App\Menu;
use App\Product;
use App\Slider;
use App\Work;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $contacts = Contact::find(1);
        $slider = Slider::find(1);
        $products = Product::all();
        $causes = Cause::all();
        $works = Work::all();
        $guarantees = Guarantee::all();
        $material = Material::find(1);
        $backs = Back::all();
        $menu = Menu::all();


        return view('home',[
            'contacts'=>$contacts,
            'slider'=>$slider,
            'products'=>$products,
            'causes'=>$causes,
            'works'=>$works,
            'guarantees'=>$guarantees,
            'material'=>$material,
            'backs'=>$backs,
            'menu'=>$menu
        ]);
    }
}
