<?php

namespace App\Http\Controllers\StockMonitoring;

use App\Http\Controllers\Controller;
use App\StockItems;
use Illuminate\Http\Request;

class StockitemsController extends Controller
{
    public function readstocktable(){
        $stockitems=StockItems::get();
        return view ('dashboard.monitoring.stocktooling',['stockitems'=>$stockitems]);
    }
    public function storeitems(Request $request)
    {
      $request->validate([
        'product_name' => 'required|max:255',
        'product_code' => 'required',
        'category' => 'required',
        'status' => 'required',
        'quantity' => 'required',
        'minimum_quantity' => 'required'
      ]);
      StockItems::create($request->all());
      return redirect()->route("home")->withSuccess('Items added successfully.');
    }
    public function updateitems(Request $request, $id)
    {
      $request->validate([
        'product_name' => 'required|max:255',
        'product_code' => 'required',
        'category' => 'required',
        'status' => 'required',
        'quantity' => 'required',
        'minimum_quantity' => 'required'
      ]);
      $stockitems = StockItems::find($id);
      $stockitems->update($request->all());
      return redirect()->route("home")->withSuccess('Items updated successfully.');
    }
    public function destroy($id)
    {
      $stockitems = StockItems::find($id);
      $stockitems->delete();
      return redirect()->route("home")
        ->with('success', 'Items deleted successfully');
    }
}
