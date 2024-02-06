<?php

namespace App\Http\Controllers\StockMonitoring;

use App\Http\Controllers\Controller;
use App\StockItems;
use App\User;
use Illuminate\Http\Request;

class StockitemsController extends Controller
{
    public function __construct(){
        $this->middleware('permission:view posts', ['only' => ['readusertable']]);
        $this->middleware('permission:create posts', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit posts', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete posts', ['only' => ['destroy']]);
        $this->middleware('permission:publish posts', ['only' => ['publish']]);
        $this->middleware('permission:unpublish posts', ['only' => ['unpublish']]);
    }
    public function indexregisteritems(){
        return view ('dashboard.monitoring.additems');
    }
    public function readstocktable(){
        $stockitems=StockItems::get();
        return view ('dashboard.monitoring.stocktooling',['stockitems'=>$stockitems]);
    }
    public function createitems(Request $request)
    {
        $request->validate([
            'product_name' => 'required|max:255',
            'product_code' => 'required',
            'product_type',
            'product_brand',
            'quantity' => 'required',
            'minimum_quantity' => 'required',
            'category' => 'required',
            'product_note'
        ]);
        StockItems::create($request->all());
        return redirect()->route("managestock")->withSuccess('Items added successfully.');
    }
    public function updateitems(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required|max:255',
            'product_code' => 'required',
            'product_type',
            'product_brand',
            'quantity' => 'required',
            'minimum_quantity' => 'required',
            'category' => 'required',
            'product_note'
        ]);
        $stockitems = StockItems::find($id);
        $stockitems->update($request->all());
        return redirect()->route("managestock")->withSuccess('Items updated successfully.');
    }
    public function deleteitem($id)
    {
        StockItems::where('id',$id)->delete();
        return redirect()->route("managestock")->with('success', 'Items deleted successfully');
    }
}
