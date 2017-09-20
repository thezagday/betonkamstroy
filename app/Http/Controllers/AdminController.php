<?php

namespace App\Http\Controllers;

use App\Back;
use App\Cause;
use App\Contact;
use App\Guarantee;
use App\Material;
use App\Product;
use App\Slider;
use App\User;
use App\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.home');
    }

    public function read_menu()
    {
        $menu = DB::table('menus')->select('id','title')->get();
        return view('admin.menu.read_menu',['menu'=>$menu]);
    }
    public function edit_item_menu(Request $request)
    {
        $item_menu = DB::table('menus')->select('id','title')->where('id',$request->input('id'))->first();

        return view('admin.menu.edit_item_menu',['item_menu' => $item_menu]);
    }
    public function update_item_menu()
    {
        DB::table('menus')
            ->where('id',Input::get('id'))
            ->update([
                'title' => Input::get('title'),
            ]);
        return redirect()->action('AdminController@read_menu');
    }
    
    public function read_contacts()
    {
        $contact = Contact::find(1);
        return view('admin.contacts.read_contacts',['contact'=>$contact]);
    }
    public function update_contacts()
    {
        DB::table('contacts')
            ->where('id',1)
            ->update([
                'code'  => Input::get('code'),
                'phone' => Input::get('phone'),
                'mail'  => Input::get('mail'),
            ]);
        return redirect()->action('AdminController@read_contacts');
    }

    public function read_slider()
    {
        $slider = Slider::find(1);
        return view('admin.slider.read_slider',['slider'=>$slider]);
    }

    public function read_products()
    {
        $products = DB::table('products')->select('id','title')->get();
        return view('admin.products.read_products',['products'=>$products]);
    }
    public function edit_item_product(Request $request)
    {
        $product = Product::find($request->input('id'));
        return view('admin.products.edit_item_product',['product'=>$product]);
    }
    public function delete_item_product()
    {
        $product = Product::find(Input::get('id'));
        $img = $product->img;
        $product->delete();

        if ($img != null)
        {
            if (! DB::table('products')->where('img','like',$img)->first())
            {
                if (file_exists(public_path().$img))
                {
                    unlink(public_path().$img);
                }
            }
        }
        return redirect()->action('AdminController@read_products');
    }

    public function read_causes()
    {
        $causes = DB::table('causes')->select('id','title')->get();
        return view('admin.causes.read_causes',['causes'=>$causes]);
    }
    public function edit_item_cause(Request $request)
    {
        $cause = Cause::find($request->input('id'));
        return view('admin.causes.edit_item_cause',['cause'=>$cause]);
    }
    public function delete_item_cause()
    {
        $cause = Cause::find(Input::get('id'));
        $img = $cause->img;
        $cause->delete();

        if ($img != null)
        {
            if (! DB::table('causes')->where('img','like',$img)->first())
            {
                if (file_exists(public_path().$img))
                {
                    unlink(public_path().$img);
                }
            }
        }
        return redirect()->action('AdminController@read_causes');
    }

    public function read_works()
    {
        $works = DB::table('works')->select('id','title')->get();
        return view('admin.works.read_works',['works'=>$works]);
    }
    public function edit_item_work(Request $request)
    {
        $work = Work::find($request->input('id'));
        return view('admin.works.edit_item_work',['work'=>$work]);
    }
    public function delete_item_work()
    {
        $work = Work::find(Input::get('id'));
        $img = $work->img;
        $work->delete();

        if ($img != null)
        {
            if (! DB::table('works')->where('img','like',$img)->first())
            {
                if (file_exists(public_path().$img))
                {
                    unlink(public_path().$img);
                }
            }
        }
        return redirect()->action('AdminController@read_causes');
    }

    public function read_guarantees()
    {
        $guarantees = DB::table('guarantees')->select('id','title')->get();
        return view('admin.guarantees.read_guarantees',['guarantees'=>$guarantees]);
    }
    public function edit_item_guarantee(Request $request)
    {
        $guarantee = Guarantee::find($request->input('id'));
        return view('admin.guarantees.edit_item_guarantee',['guarantee'=>$guarantee]);
    }
    public function delete_item_guarantee()
    {
        $guarantee = Guarantee::find(Input::get('id'));
        $img = $guarantee->img;
        $guarantee->delete();

        if ($img != null)
        {
            if (! DB::table('guarantees')->where('img','like',$img)->first())
            {
                if (file_exists(public_path().$img))
                {
                    unlink(public_path().$img);
                }
            }
        }
        return redirect()->action('AdminController@read_guarantees');
    }

    public function read_materials()
    {
        $material = Material::find(1);
        return view('admin.materials.read_materials',['material'=>$material]);
    }
    public function update_materials()
    {
        DB::table('materials')
            ->where('id',1)
            ->update([
                'title'  => Input::get('title'),
                'content' => Input::get('content'),
            ]);
        return redirect()->action('AdminController@read_materials');
    }

    public function read_backs()
    {
        $backs = Back::all();
        return view ('admin.backs.read_backs',['backs'=>$backs]);
    }
    public function edit_item_back(Request $request)
    {
        $back = Back::find($request->input('id'));
        return view('admin.back.edit_item_back',['back'=>$back]);
    }
    public function delete_item_back()
    {
        $back = Back::find(Input::get('id'));
        $img = $back->img;
        $back->delete();

        if ($img != null)
        {
            if (! DB::table('backs')->where('img','like',$img)->first())
            {
                if (file_exists(public_path().$img))
                {
                    unlink(public_path().$img);
                }
            }
        }
        return redirect()->action('AdminController@read_backs');
    }

    public function reset(Request $request)
    {
        if (!$request->all())
        {
            return view ('admin.password.reset');
        }
        else
        {
            $user = User::find(1); //в таблице одна запись (один админ) с id = 1

            if (Hash::check((Input::get('old')), $user->password))
            {
                if ( Input::get('new') == Input::get('confirm') )
                {
                    $user->password = Hash::make(Input::get('new'));
                    $user->save();
                    return view('admin.password.reset',['message'=>'Пароль успешно изменен!']);
                }
                else
                {
                    return view('admin.password.reset',['message'=>'Новые пароли не совпадают!']);
                }
            }
            else
            {
                return view('admin.password.reset',['message'=>'Старый пароль был не такой!']);
            }
        }
    }
}
