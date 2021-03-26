<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::all();
        $handleUser = $expenses->filter(function($user){
            return $user->user_id == Auth::id();
        });
        $handleUser->all();

        return view('expense', [ 'expenses' => $handleUser]);
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

        if($request->hasFile('img') && $request->file('img')->isValid()){
            $requestImg = $request->img;
            $extension = $requestImg->extension();
            $imgName = md5($requestImg->getClientOriginalName() . strtotime("now")) . '.' . $extension;
            $requestImg->move(public_path('img/anexos'), $imgName);
            $requestData['img'] = $imgName;
        }

        Expense::create($requestData);
        return redirect()->route('expense');
    }

    public function show(Expense $expense)
    {
        return view('expenses.show', [ 'expense' => $expense ]);
    }

    public function edit(Expense $expense)
    {
        return view('expenses.edit', [ 'expense' => $expense ]);
    }

    public function update(Request $request, Expense $expense)
    {
        $expense->update($request->all());
        return redirect()->route('expense');
    }

    public function destroy(Expense $expense)
    {
        $expense->delete();
        return redirect()->route('expense');
    }
}
