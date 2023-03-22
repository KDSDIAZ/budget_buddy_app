<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Savings;
class SavingsController extends Controller
{

    public function store(Request $request)
    {

    $request->validate([
    'name' => 'required',
    'amount' => 'required',
    ]);
    $user_id = auth()->user()->id;
    $savings = new Savings;
    $savings->name = $request->name;
    $savings->amount = $request->amount;
    $savings->description = $request->description;
    $savings->user_id = $user_id;
    $savings->save();
    return redirect('/dashboard')
    ->with('success','Successfully added.');
}

public function destroy($id)
    {
    $savings = Savings::findOrFail($id);
    $savings->delete();

    return redirect('/dashboard')
    ->with('success','Successfully deleted.');
}
}
