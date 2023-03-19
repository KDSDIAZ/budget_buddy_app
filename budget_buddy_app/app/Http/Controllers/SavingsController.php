<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Savings;
class SavingsController extends Controller
{
    public function showIncomeById(){
        $savings = DB::table('savings')
        ->select('CALL showUserSavings()')
        ->where(1)
        ->get();
        return view('dashboard', ['savings' => $savings]);
    }
    public function store(Request $request)
    {

    $request->validate([
    'name' => 'required',
    'amount' => 'required',
    ]);
    $income = new Savings;
    $income->name = $request->name;
    $income->amount = $request->amount;
    $income->description = $request->description;
    $income->save();
    return redirect('/dashboard')
    ->with('success','Successfully added.');
}
}
