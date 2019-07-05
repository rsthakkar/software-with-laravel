<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Order;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class CustomerController extends Controller
{
    //
    public function index(){
    	//$customers=Customer::where('available','1')->get();
        // $customers=DB::table('customers')->join('orders','orders.customer_id','=','customers.id')->select('customers.*',
        //     'orders.quantity')->where('available','=','1')->get();
        $customers=DB::table('customers')
        ->select("customers.*",
                  DB::raw('(SELECT SUM(orders.quantity) FROM orders 
                    WHERE orders.customer_id=customers.id AND MONTH(orders.created_at)=MONTH(CURRENT_DATE()) AND YEAR(orders.created_at)=YEAR(CURRENT_DATE()) ) as quantity'))
        ->where('available','=','1')
        ->get();
        return view('customers',['customers'=>$customers,'head'=>'Current Customers','current'=>true,'all'=>false]);
    }

    public function create(){
    	return view('newcustomer');
    }
    public function insert(Request $request){
    	Customer::create($request->all());
    	return redirect()->route('create')->with('success','Customer added');
    }
    public function view_all(){
    	$customers=Customer::where('available','0')->get();
    	return view('customers',['customers'=>$customers,'all'=>true,'current'=>false])->with('head','All customers');
    }
    public function disable_C(Request $request)
    {
    	$id=$request->id;
        Customer::find($id)->update(['available'=>'0']);
        return redirect()->route('index');
    }
    public function enable_C(Request $request)
    {
    	$id=$request->id;
        Customer::find($id)->update(['available'=>'1']);
        return redirect('disabled_C');
    }

     public function edit_C(Request $request)
    {
    	$customer=Customer::where('id',$request->id)->first();
        return view('editcustomer',['customer'=>$customer]);
    }
    public function update_C(Request $request)
    {
        
        Customer::where('id',$request->id)->update(['name'=>$request->name,'mobile'=>$request->mobile,'address'=>$request->address]);
        return redirect()->route('index');
    }
    public function view_qform(){
        $customers=Customer::where('available','1')->get();
        return view('view_qform',['customers'=>$customers]);
    }
    public function view_invoice(Request $request){
        $id=$request->id;
        $customer=Customer::where('id',$id)->first();
        $orders=Order::where('customer_id','=',$id)->whereMonth('created_at','=',date('m'))->whereYear('created_at', '=', Carbon::now()->format('Y'))->get();
        return view('invoice',['customer'=>$customer,'orders'=>$orders]);
    }
    public function view_last_invoice(Request $request){
        $id=$request->id;
        $customer=Customer::where('id',$id)->first();
        $orders=Order::where('customer_id','=',$id)->whereMonth('created_at','=',date('m')-1)->whereYear('created_at', '=', (Carbon::now()->format('Y')))->get();
        return view('invoice',['customer'=>$customer,'orders'=>$orders]);
    }
}
