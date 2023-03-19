<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Savings;
use App\Models\Incomes;
use App\Models\Expenses;
use App\Models\User;
class DashboardController extends Controller
{
    public function index()
    {
        $user = User::find(1);
        $incomes = Incomes::where('user_id', 1)->get();
        $expenses = Expenses::where('user_id', 1)->get();
        $savings = Savings::where('user_id', 1)->get();
        $totalIncome = $incomes->sum('amount');
        $totalExpense = $expenses->sum('amount');
        $netIncome = $totalIncome - $totalExpense;

        return view('dashboard', compact('incomes', 'expenses', 'savings', 'totalIncome', 'totalExpense','netIncome' ));
    }
}
