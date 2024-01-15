<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\support\Facades\DB;
use App\Models\payment;
use App\Models\member;

class MemberController extends Controller
{
    public function addform(){
           return view('form');
    }

    public function added(Request $req){
        $a=DB::table('members')->insert([
            'name'=>$req->username,
            'birth'=>$req->userbirth,
            'address'=>$req->useraddress,
            'email'=>$req->useremail,

        ]);
        
        if($a){
            return redirect()->route('welcome');
        }
    }

    public function display(){
        $a=DB::table('members')->get();

        return view('welcome',['key'=>$a]);

    }

    public function updateform($id){
        $a=DB::table('members')->where('id',$id)->get();

        return view('editform',['key'=>$a]);
    }

    public function updated(Request $req,$id){
        $a=DB::table('members')->where('id',$id)->update([

            'name'=>$req->username,
            'birth'=>$req->userbirth,
            'address'=>$req->useraddress,
            'email'=>$req->useremail,

        ]);

        if($a){
            return redirect()->route('welcome');
        }
    }

    public function delete($id){
        $a=DB::table('members')->where('id',$id)->delete();

        if($a){
            return redirect()->route('welcome');

        }
    }

    //payment

    public function phome(){

        $a=payment::all();
        return view('homepayment',['key'=>$a]);


    }

    public function payadded(Request $req){
        
        $obj=new payment;
        $objm=new member;

        $obj->amount=$req->useramount;
        $obj->member_id=$req->mid;
        $obj->sdate=$req->sdate;
        $obj->edate=$req->edate;

        $obj->save();

        //$objm->payment()->save($obj);

        if($obj){
            return redirect()->route('phome');
        }
    }

    

    public function deletep($id){
        $a=DB::table('payments')->where('id',$id)->delete();

        if($a){
            return redirect()->route('phome');

        }
    }

    public function memberdetails($id){
        $a=DB::table('payments')->where('id',$id)->get()->member;
        return $a;
    }
}
