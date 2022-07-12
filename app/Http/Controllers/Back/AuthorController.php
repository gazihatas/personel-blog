<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Str;
use Flasher\Prime\FlasherInterface;

class AuthorController extends Controller
{
    public function index()
    {
        $author=Author::find(1);
        return view('back.author.index',compact('author'));
    }

    public function update(Request $request, FlasherInterface $flasher)
    {
        $author=Author::find(1);
        $author->name=$request->name;
        $author->hakkimda=$request->hakkimda;
        $author->pozisyon=$request->pozisyon;
        $author->yetenek=$request->yetenek;
        $author->deneyim=$request->youtube;
        $author->egitim=$request->egitim;
        $author->sertifika=$request->sertifika;

        if ($request->hasFile('foto')) :
            $foto=Str::slug($request->name).'-foto.'.$request->foto->getClientOriginalExtension();
            $request->foto->move(public_path('/uploads'),$foto);
            $author->foto='uploads/'.$foto;
        endif;


        $author->save();
        $flasher->addSuccess('Yazar Bilgileri başarıyla Güncellendi.','BAŞARILI');
        return redirect()->back();

    }
}
