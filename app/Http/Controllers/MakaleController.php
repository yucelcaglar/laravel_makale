<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
//use App\Http\Controllers\Controller;
use Validator;
use App\Makale;
class MakaleController extends Controller
{
    
    public function index(){

        $Makaleler = Makale::orderBy('id','DESC')->get();


        return view('makaleler',compact('Makaleler'));
    }

    public function makaleDetay($slug){


        $Makale = Makale::where('slug',$slug)->first();

        return view('makale',compact('Makale') );

    }

    public function makaleDuzenle($id){

        $Makale = Makale::find($id);
        return view('makaleDuzenle',compact('Makale'));
    }


    public function makaleGuncelle(Request $Request ,$id){

        $Validator = Validator::make($Request->all(),[

            'title' => 'required',
            'icerik' => 'required'
        ]);

        if($Validator->fails()){
            return redirect()->back()->withInput()->withErrors($Validator);
        }

        Makale::find($id)->update($Request->all());

        $Request->merge([
            'slug' => str_slug($Request->title)
        ]);


        session()->flash('succes','Blog yazısı güncellendi');
        return redirect()->back();
  
    }


    public function yeniMakale(){
        return view('yeni-makale');
    }

    public function makaleEkle(Request $Request){
        $Validator = Validator::make($Request->all(),[

            'title' => 'required',
            'icerik' => 'required'
        ]);

        if($Validator->fails()){
            return redirect()->back()->withInput()->withErrors($Validator);
        }

        $Request->merge([
            'slug' => str_slug($Request->title)
        ]);

        Makale::create($Request->all());

        return redirect()->back();

    }

}
