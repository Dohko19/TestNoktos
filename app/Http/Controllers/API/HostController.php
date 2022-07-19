<?php

namespace App\Http\Controllers\API;

use App\Models\Host;
use Illuminate\Http\Request;

class HostController extends Controller
{
    public function index()
    {
        $hosts = Host::with('bedrooms')->get();
        return  response()->json(['hosts' => $hosts]);
    }

    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|numeric',
                'rfc' => 'required|max:15',
                'business_name' => 'required',
            ]);
            $host = Host::create($request->all());
            if ($host){
                return response()->json(['message' => 'Host create successfully'], 200);
            }
        }catch (\Exception $exception){
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }
}
