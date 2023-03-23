<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Savings;
use App\Models\Incomes;
use App\Models\Expenses;
use App\Models\User;
class DashboardController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $showincome = DB::select('CALL showIncomeThisMonth(:param)', ['param' => $user_id]);
        $showexpense = DB::select('CALL showExpenseThisMonth(:param)', ['param' => $user_id]);
        $showsavings = DB::select('CALL showSavingsThisMonth(:param)', ['param' => $user_id]);
        $incomes = Incomes::where('user_id', $user_id)->whereMonth('created_at', '=', date('m'))->latest('updated_at')->get();
        $expenses = Expenses::where('user_id', $user_id)->whereMonth('created_at', '=', date('m'))->latest('updated_at')->get();
        $savings = Savings::where('user_id', $user_id)->whereMonth('created_at', '=', date('m'))->latest('updated_at')->get();
        $totalIncome = $incomes->sum('amount');
        $totalExpense = $expenses->sum('amount');
        $netIncome = $totalIncome - $totalExpense;

        
        return view('dashboard', compact('incomes', 'expenses', 'savings', 'totalIncome', 'totalExpense','netIncome','showincome','showexpense','showsavings' ));
    }
    
}
