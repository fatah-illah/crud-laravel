<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddDataRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'date' => 'required|date',
            'type' => 'required|in:Pembelian,Penjualan',
        ];
    }
}
