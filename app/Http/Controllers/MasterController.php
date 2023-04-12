<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use App\Models\SubItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MasterController extends Controller
{
    public function index(){
        //select * from sub_items where items_id = 1 limit 1
        //cara menggunakan Eloquent
//        $subitem = SubItem::where('items_id',1)->first(); // cara utk nge get data dari database

        //cara menggunakan query builder
//        $subitem = DB::table('sub_items')
//            ->join('items','items.id','sub_items.items_id')
//            ->where('items_id','=',1)->first(); //first() = ambil data pertama
//
//        dd($subitem); // dd = dump and die
        return view('home');
    }

    public function product(){
        //all() / get() = daptin smua data (dalam berupa array)
        //get() dipakai klau ada kondisi (dalam berupa array)
        $data = Item::simplePaginate(3);
        return view('product',compact('data'));
    }

    public function search(Request $req){
        $data = Item::where('name','like',"%$req->search%")->simplePaginate(3);
        return view('product',compact('data'));
    }

    public function productAdd(){
        return view('add');
    }

    public function add(Request $req){
        //validasi
        $rule = [
            'name' => 'required|min:3',
            'qty' => 'required|numeric|min:5|max:50'
        ];

        //kita panggil smua request,kmudian kita validasikan
        $validation = Validator::make($req->all(),$rule);

        //kalau misalnya ad validasi yang gagal,balikin ke page dia semula beserta error2nya
        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        }

        //insert ke db cara 1
        $item = new Item();
        $item->name = $req->name;
        $item->qty = $req->qty;
        $item->save(); // termasuk insert

        //insert ke db cara 2,pake Eloquent,ini perlu set di modelnya utk fillable nya
//        $item = Item::create([
//            'name' => $req->name,
//            'qty' => $req->qty,
//        ]);

        //insert ke db cara 3,pake Query Builder
//        $item = DB::table('items')->create([
//            'name' => $req->name,
//            'qty' => $req->qty,
//        ]);

        return redirect('/product');
    }

    public function productUpdate($id){
        $item = Item::find($id); //searching menggunkan eloquent
        return view('update',compact('item'));
    }

    public function update(Request $req){
        $item = Item::find($req->id);
        $item->name = $req->name;
        $item->qty = $req->qty;
        $item->save(); // termasuk update

        //insert ke db cara 2,pake Eloquent,ini perlu set di modelnya utk fillable nya
//        $item = Item::update([
//            'name' => $req->name,
//            'qty' => $req->qty,
//        ]);

        //insert ke db cara 3,pake Query Builder
//        $item = DB::table('items')->update([
//            'name' => $req->name,
//            'qty' => $req->qty,
//        ]);
        return redirect('/product');
    }

    public function delete($id){
        $item = Item::find($id);
        $item->delete(); // termasuk delete
        return redirect('/product');
    }

}
