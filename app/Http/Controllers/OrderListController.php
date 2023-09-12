<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderListController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

    public function orderlist()
    {
        return view('cart_order.order_list');
    }

    public function ordertran()
    {
        return view('cart_order.order_tran');
    }

    public function orderpay()
    {
        return view('cart_order.order_pay');
    }

    public function orderthanks()
    {
        return view('cart_order.order_thanks');
    }
}
