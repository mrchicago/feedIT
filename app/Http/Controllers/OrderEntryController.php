<?php

namespace App\Http\Controllers;

use App\Models\OrderEntry;
use App\Models\Supplier;
use App\Models\Dish;
use Illuminate\Http\Request;

class OrderEntryController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bestellungen.mitbestellen');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $orderEntry = new OrderEntry;
        $orderEntry->name = $request->input('name');
        $orderEntry->order_id = $request->input('s')
        $orderEntry->dish_id = $request->input('dish')
        // $orderEntry->amount = 1;
        // $orderEntry->amount = ;
        dd($orderEntry);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lieferanten $lieferanten)
    {
        //
    }

}
