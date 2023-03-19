<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Incomes;
class IncomeController extends Controller
{
    public function showIncomeById($user_id){
        $incomes = DB::select('CALL showUserIncome()',[1]);
        return view('dashboard', ['incomes' => $incomes]);
    }
    public function store(Request $request)
    {
    $request->validate([
    'name' => 'required',
    'amount' => 'required',
    ]);
    $income = new Incomes;
    $income->name = $request->name;
    $income->amount = $request->amount;
    $income->save();
    return redirect('/dashboard')
    ->with('success','Successfully added.');
}
}
