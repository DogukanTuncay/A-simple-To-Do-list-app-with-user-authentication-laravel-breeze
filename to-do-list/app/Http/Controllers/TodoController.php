<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class TodoController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $todos = todo::where('userId',$user->id)->get();
        
        return view('dashboard',compact('user','todos'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function TodoStore(Request $request)
    {
        $user = Auth::user();
        $todo = new todo();
        $todo->todo = ucfirst($request->todo);
        $todo->isActive = true;
        $todo->userId = $user->id;
        $todo->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(todo $todo)
    {
        //
    }

    public function completeChange(Request $request)
    {
        $todo =todo::where('id',$request->id)->get();
        foreach ($todo as $todo){
            if($todo->isActive == 0){
                $todo->isActive = 1;
            }
            else{
                $todo->isActive = 0;
            }
            $todo->update();
        }
        return redirect()->back();
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, todo $todo)
    {
        $todo = todo::where('id',$request->deleteId)->update(["todo" => $request->newTodo]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        todo::where('id',$request->deleteId)->delete();
        return redirect()->back();
    }
}
