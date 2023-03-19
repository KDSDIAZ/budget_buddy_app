<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Expenses;
class ExpenseController extends Controller
{
    public function showExpenseById(){
        $expenses = DB::table('expenses')
        ->select('CALL showUserExpense()')
        ->where(1)
        ->get();
        return view('dashboard', ['expenses' => $expenses]);
    }
    public function store(Request $request)
    {

    $request->validate([
    'name' => 'required',
    'amount' => 'required',
    'due_date' => 'required',
    ]);
    $income = new Expenses;
    $income->name = $request->name;
    $income->amount = $request->amount;
    $income->due_date = $request->due_date;
    $income->save();
    return redirect('/dashboard')
    ->with('success','Successfully added.');
}
}
