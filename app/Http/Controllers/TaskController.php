<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use App\Models\Status;

class TaskController extends Controller
{

public function index(Request $request){
    $tasksQuery = Task::query();
    if($request->filled('status_id')){
        $tasksQuery->orWhere('status_id', '=', $request->status_id);
    }
    if($request->filled('user_id')){
        $tasksQuery->orWhere('user_id', '=', $request->user_id);
    }
 
    $tasks = $tasksQuery->get();
    $users = User::all();
    $statuses = Status::all();
    return view('pages.tasks.tasks', compact('tasks', 'users', 'statuses'));
}
public function create(){
    $users = User::all();
    $statuses = Status::all();
    return view('pages.tasks.create-task', compact('users', 'statuses'));
}
public function save(){
    Task::prepareTaskData();
    return redirect()->route('task.index')->with('success', 'The task has been successfully created!');
 }

 public function edit($id)
 {  
    $users = User::all();
     $statuses = Status::all();
     $task = Task::findOrFail($id);
     return view('pages.tasks.edit-task', compact('task', 'users', 'statuses'));
 }

 public function update($id)
 {
     $task = Task::findOrFail($id);
     $data = request()->validate(([
        'title'   => 'required|string|min:3|max:50',
        'description' => 'required|min:3',
        'user_id'   => 'required',
        'status_id'   => 'integer'
 ]));
     $task->update($data);
     return redirect()->route('task.index')->with('success', "The task has been updated successfully!");
 }
 public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('task.index')->with('success', 'The task has been deleted successfully!');
    }

    public function show($id)
    {  
        $task = Task::findOrFail($id);
        return view('pages.tasks.task-info', compact('task'));
    }
}
