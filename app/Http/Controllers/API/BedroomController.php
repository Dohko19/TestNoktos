<?php

namespace App\Http\Controllers\API;

use App\Models\Bedroom;
use Illuminate\Http\Request;

class BedroomController extends Controller
{
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required',
                'description' => 'required|min:3',
                'quantity' => 'required|min:1',
                'price' => 'required|numeric',
                'code' => 'required|string|min:3',
                'host_id' => 'exists:hosts,id',
                'bedrooms_types_id' => 'exists:bedrooms_types,id',
            ]);

            $bedroom = Bedroom::create($data);
            if ($bedroom){
                return response()->json(['message' => 'Bedroom created'], 200);
            }
        }catch (\Exception $exception){
            return response()->json(['error' => $exception->getMessage()], 500);
        }
        return abort(402);
    }
}
