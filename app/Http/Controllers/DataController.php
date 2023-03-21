<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddDataRequest;
use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $data = Data::orderBy('created_at')->get();

        return view('data.index', compact('data'));
    }

    public function create()
    {
        return view('data.create');
    }

    public function addData(AddDataRequest $request)
    {
        $data = new Data();
        $data->description = $request->type;
        $data->date = $request->date;
        $data->qty = $request->qty;
        $data->cost = $this->getCost($request->price, $request->type);
        $data->price = $request->price;
        $data->total_cost = $request->qty * $data->cost;
        $data->qty_balance = $this->getQtyBalance($request->qty);
        $data->value_balance = $this->getValueBalance($data->total_cost);
        $data->hpp = $data->value_balance / $data->qty_balance;
        $data->save();

        return response()->json([
            'message' => 'Data berhasil ditambahkan',
            'data' => $data,
        ]);

        Data::create($request->except(['_token', 'submit']));
        return redirect()->route('/data');
    }

    private function getCost($price, $type)
    {
        if ($type == 'Pembelian') {
            return $price;
        } else {
            $lastData = Data::where('description', 'Pembelian')->orderBy('created_at', 'desc')->first();
            return $lastData->hpp;
        }
    }

    private function getQtyBalance($qty)
    {
        $lastData = Data::where('description', 'Pembelian')->orderBy('created_at', 'desc')->first();
        return $lastData->qty_balance - $qty;
    }

    private function getValueBalance($total_cost)
    {
        $lastData = Data::where('description', 'Pembelian')->orderBy('created_at', 'desc')->first();
        return $lastData->value_balance + $total_cost;
    }

    public function edit($id)
    {
        $data = Data::find($id);
        return view('data.edit', compact(['data']));
    }

    public function update($id, AddDataRequest $request)
    {
        $data = Data::find($id);
        $data->update($request->except(['_token', 'submit']));
        return redirect('/data');
    }

    public function destroy($id)
    {
        $data = Data::find($id);
        $data->delete();
        return redirect('/data');
    }
}
