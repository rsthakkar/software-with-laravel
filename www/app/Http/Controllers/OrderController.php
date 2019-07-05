<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function insert_q(Request $request)
    {
    	foreach ($request->entities as $entity) {

    	Order::create($entity);

		}
		return redirect('/');
    }
}
