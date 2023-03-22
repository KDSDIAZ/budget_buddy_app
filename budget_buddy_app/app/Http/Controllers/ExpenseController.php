<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Expenses;
class ExpenseController extends Controller
{
    public function store(Request $request)
    {

    $request->validate([
    'name' => 'required',
    'amount' => 'required',
    'due_date' => 'required|date|after:start_date',
    ]);
    $user_id = auth()->user()->id;
    $expenses = new Expenses;
    $expenses->name = $request->name;
    $expenses->amount = $request->amount;
    $expenses->due_date = $request->due_date;
    $expenses->user_id = $user_id;
    $expenses->save();
    return redirect('/dashboard')
    ->with('success','Successfully added.');
}
public function destroy($id)
    {
    $expenses = Expenses::findOrFail($id);
    $expenses->delete();

    return redirect('/dashboard')
    ->with('success','Successfully deleted.');
}
}
