<?php

namespace App\Http\Controllers;

use App\Back;
use App\Cause;
use App\Guarantee;
use App\Product;
use App\Slider;
use App\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class UploadController extends Controller
{
    public function update_slider(Request $request)
    {
        $slider = Slider::find(1);
        $img = $slider->img;

        if ($request->hasFile('img'))
        {
            $file = $request->file('img');
            $file->move(public_path() . '/images/slider',$file->getClientOriginalName());

            $slider->update([
                'img' => '/images/slider/'.$file->getClientOriginalName(),
                'title1' => Input::get('title1'),
                'title2' => Input::get('title2'),
            ]);
            if ($img != null)
            {
                if (file_exists(public_path() .$img))
                {
                    unlink(public_path() .$img);
                }
            }
        }
        else
        {
            $slider->update([
                'title1' => Input::get('title1'),
                'title2' => Input::get('title2'),
            ]);
        }
        return redirect()->action('AdminController@read_slider');
    }

    public function update_item_product(Request $request)
    {
        $product = Product::find($request->input('id'));
        $img = $product->img;

        if ($request->hasFile('img'))
        {
            $file = $request->file('img');
            $file->move(public_path() . '/images/products',$file->getClientOriginalName());

            $product->update([
                'img' => '/images/products/'.$file->getClientOriginalName(),
                'title' => Input::get('title'),
            ]);
            if ($img != null)
            {
                if(!DB::table('products')->where('img','like',$img)->first())
                {
                    if (file_exists(public_path() . $img)) {
                        unlink(public_path() . $img);
                    }
                }
            }
        }
        else
        {
            $product->update([
                'title' => Input::get('title'),
            ]);
        }
        return redirect()->action('AdminController@read_products');
    }
    public function add_product(Request $request)
    {
        if (!$request->all())
        {
            return view ('admin.products.add_product');
        }
        elseif ($request->hasFile('img'))
        {
            $file = $request->file('img');
            $file->move(public_path().'/images/products',$file->getClientOriginalName());
            $img = '/images/products/'.$file->getClientOriginalName();
        }
        else
        {
            $img = "";
        }
        DB::table('products')->insert([
            'img' => $img,
            'title' => Input::get('title'),
        ]);
        return redirect()->action('AdminController@read_products');
    }

    public function update_item_cause(Request $request)
    {
        $cause = Cause::find($request->input('id'));
        $img = $cause->img;

        if ($request->hasFile('img'))
        {
            $file = $request->file('img');
            $file->move(public_path() . '/images/causes',$file->getClientOriginalName());

            $cause->update([
                'img' => '/images/causes/'.$file->getClientOriginalName(),
                'title' => Input::get('title'),
            ]);
            if ($img != null)
            {
                if(!DB::table('causes')->where('img','like',$img)->first())
                {
                    if (file_exists(public_path() . $img)) {
                        unlink(public_path() . $img);
                    }
                }
            }
        }
        else
        {
            $cause->update([
                'title' => Input::get('title'),
            ]);
        }
        return redirect()->action('AdminController@read_causes');
    }
    public function add_cause(Request $request)
    {
        if (!$request->all())
        {
            return view ('admin.causes.add_cause');
        }
        elseif ($request->hasFile('img'))
        {
            $file = $request->file('img');
            $file->move(public_path().'/images/causes',$file->getClientOriginalName());
            $img = '/images/causes/'.$file->getClientOriginalName();
        }
        else
        {
            $img = "";
        }
        DB::table('causes')->insert([
            'img' => $img,
            'title' => Input::get('title'),
        ]);
        return redirect()->action('AdminController@read_causes');
    }

    public function update_item_work(Request $request)
    {
        $work = Work::find($request->input('id'));
        $img = $work->img;

        if ($request->hasFile('img'))
        {
            $file = $request->file('img');
            $file->move(public_path() . '/images/works',$file->getClientOriginalName());

            $work->update([
                'img' => '/images/works/'.$file->getClientOriginalName(),
                'title' => Input::get('title'),
            ]);
            if ($img != null)
            {
                if(!DB::table('causes')->where('img','like',$img)->first())
                {
                    if (file_exists(public_path() . $img)) {
                        unlink(public_path() . $img);
                    }
                }
            }
        }
        else
        {
            $work->update([
                'title' => Input::get('title'),
            ]);
        }
        return redirect()->action('AdminController@read_works');
    }
    public function add_work(Request $request)
    {
        if (!$request->all())
        {
            return view ('admin.works.add_work');
        }
        elseif ($request->hasFile('img'))
        {
            $file = $request->file('img');
            $file->move(public_path().'/images/works',$file->getClientOriginalName());
            $img = '/images/works/'.$file->getClientOriginalName();
        }
        else
        {
            $img = "";
        }
        DB::table('works')->insert([
            'img' => $img,
            'title' => Input::get('title'),
        ]);
        return redirect()->action('AdminController@read_works');
    }

    public function update_item_guarantee(Request $request)
    {
        $guarantee = Guarantee::find($request->input('id'));
        $img = $guarantee->img;

        if ($request->hasFile('img'))
        {
            $file = $request->file('img');
            $file->move(public_path() . '/images/guarantees',$file->getClientOriginalName());

            $guarantee->update([
                'img' => '/images/guarantees/'.$file->getClientOriginalName(),
                'title' => Input::get('title'),
            ]);
            if ($img != null)
            {
                if(!DB::table('causes')->where('img','like',$img)->first())
                {
                    if (file_exists(public_path() . $img)) {
                        unlink(public_path() . $img);
                    }
                }
            }
        }
        else
        {
            $guarantee->update([
                'title' => Input::get('title'),
            ]);
        }
        return redirect()->action('AdminController@read_guarantees');
    }
    public function add_guarantee(Request $request)
    {
        if (!$request->all())
        {
            return view ('admin.guarantees.add_guarantee');
        }
        elseif ($request->hasFile('img'))
        {
            $file = $request->file('img');
            $file->move(public_path().'/images/guarantees',$file->getClientOriginalName());
            $img = '/images/guarantees/'.$file->getClientOriginalName();
        }
        else
        {
            $img = "";
        }
        DB::table('guarantees')->insert([
            'img' => $img,
            'title' => Input::get('title'),
        ]);
        return redirect()->action('AdminController@read_guarantees');
    }

    public function update_item_back(Request $request)
    {
        $back = Back::find($request->input('id'));
        $img = $back->img;

        if ($request->hasFile('img'))
        {
            $file = $request->file('img');
            $file->move(public_path() . '/images/backs',$file->getClientOriginalName());

            $back->update([
                'img' => '/images/backs/'.$file->getClientOriginalName(),
                'title' => Input::get('title'),
                'name' => Input::get('name'),
            ]);
            if ($img != null)
            {
                if(!DB::table('backs')->where('img','like',$img)->first())
                {
                    if (file_exists(public_path() . $img)) {
                        unlink(public_path() . $img);
                    }
                }
            }
        }
        else
        {
            $back->update([
                'title' => Input::get('title'),
                'name' => Input::get('name'),
            ]);
        }
        return redirect()->action('AdminController@read_backs');
    }
    public function add_back(Request $request)
    {
        if (!$request->all())
        {
            return view ('admin.backs.add_back');
        }
        elseif ($request->hasFile('img'))
        {
            $file = $request->file('img');
            $file->move(public_path().'/images/backs',$file->getClientOriginalName());
            $img = '/images/backs/'.$file->getClientOriginalName();
        }
        else
        {
            $img = "";
        }
        DB::table('backs')->insert([
            'img' => $img,
            'title' => Input::get('title'),
            'name' => Input::get('name'),
        ]);
        return redirect()->action('AdminController@read_backs');
    }
}
