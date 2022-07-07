<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        return view('back.categories.index',compact('categories'));
    }

    public function create(Request $request,FlasherInterface $flasher)
    {
        $isExist = Category::whereSlug(Str::slug($request->category))->first();
        if ($isExist)
        {
            $flasher->addWarning($request->category.' adında bir kategori zaten mevcut!','UYARI');
            return redirect()->back();
        }
        $category= new Category();
        $category->name=$request->category;
        $category->slug=Str::slug($request->category);
        $category->save();
        $flasher->addSuccess('Kategori Başarıyla Oluşturuldu','İşlem Başarılı');
        return redirect()->back();
    }

    public function switch(Request $request)
    {
        $category=Category::findOrFail($request->id);
        $category->status=$request->statu=="true" ? 1 : 0;
        $category->save();
    }
}
