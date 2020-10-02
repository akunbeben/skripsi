<?php

namespace App\Http\Controllers;

use App\Asset;
use App\Customer;
use App\Jo;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function index(Request $request) {
        // dd($request->all());
        $jo=Jo::find($request->jo_id);
        $asset = Asset::all();
        return view('asset.index', compact('asset', 'jo'));
    }

    public function show() {

    }

    public function store(Request $request) {
        $asset = Asset::create($request->all());

        // $customer = Customer::find($request->customer);

        // $asset->customer()->associate($customer);
        // $asset->save();

        return redirect()->route('asset.index', ['jo_id'=>$request->jo_id]);
    }

    public function create(Request $request)
    {
        $jo=Jo::find($request->jo_id);
        $customer = Customer::all();
        return view('asset.create', compact('customer', 'jo'));
    }

    public function edit(Asset $asset) {

        $customer = Customer::all();
        return view('asset.edit', compact('asset', 'customer'));
    }

    public function update(Request $request, Location $location) {
        $asset->serial_number = $request->serial_number;
        $asset->produk_id = $request->produk_id;
        $asset->produk_type = $request->produk_type;
        $asset->save();

        return redirect()->route('asset.index')->with('status','Data Asset updated!')->with('success', true);
    }

    public function destroy(Asset $asset) {
        $asset->delete();
        return redirect()->route('asset.index')->with('Data Asset deleted!')->with('success', true);
    }
}