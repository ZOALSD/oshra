<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Model\Blog;
use App\Model\Member;
use Illuminate\Http\Request;
use App\Model\About;
use App\Model\Causes;
class Home extends Controller
{
    public function index(){
        $member = Member::all();
        $blogs =Blog::orderBy('id','desc')->take(2)->get();
        $causes =Causes::where('status','done')->orderBy('id', 'desc')->take(3)->get();
        $WellCauses =Causes::where('status','soon')->orderBy('id', 'desc')->take(3)->get();
        $WellCausesCount =Causes::where('status','soon')->orderBy('id', 'desc')->take(3)->count();
        $abouts=About::all();
        return view('front.home',compact('abouts','causes','WellCauses','WellCausesCount','blogs','member'));
    }
    public function AllCauses(){
        $causes= Causes::where('status','done')->orderBy('id','desc')->get();
        return view('front.bage.allcauses',compact('causes'));
    }

    public function WellAllCauses(){
        $causes= Causes::where('status','soon')->orderBy('id','desc')->get();
        return view('front.bage.wellallcauses',compact('causes'));
    }

    public function cause($id){
        $causes =Causes::where('id',$id)->get();
        return view('front.bage.cause',compact('causes'));
    }

    public function blog($id){
        $blogs =Blog::where('id',$id)->get();
        return view('front.bage.blog',compact('blogs'));
    }

    public function allnews(){
        $blogs =Blog::orderBy('id','desc')->get();
        return view('front.bage.allnews',compact('blogs'));
    }





}
