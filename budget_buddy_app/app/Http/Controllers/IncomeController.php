<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Incomes;
class IncomeController extends Controller
{
    
    public function store(Request $request)
    {
    $request->validate([
    'name' => 'required',
    'amount' => 'required',
    ]);
    $user_id = auth()->user()->id;
    $income = new Incomes;
    $income->name = $request->name;
    $income->amount = $request->amount;
    $income->user_id = $user_id;
    $income->save();
    return redirect('/dashboard')
    ->with('success','Successfully added.');
}
    public function destroy($id)
    {
    $incomes = Incomes::findOrFail($id);
    $incomes->delete();

    return redirect('/dashboard')
    ->with('success','Successfully deleted.');
}
}
