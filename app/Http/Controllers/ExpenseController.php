<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    public function index()
    {
        return view('expense');
    }

    public function create()
    {
        return view('expenses.create');
    }

    public function store(Request $request)
    {
        $id = Auth::id();
        $requestData = $request->all();
        $requestData['user_id'] = $id;   
        Expense::create($requestData);
        return redirect()->route('expense');
    }

    public function show(Expense $expense)
    {
        //
    }

    public function edit(Expense $expense)
    {
        //
    }

    public function update(Request $request, Expense $expense)
    {
        //
    }

    public function destroy(Expense $expense)
    {
        //
    }
}
