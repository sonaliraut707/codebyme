<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){

        $data = Task::get();
        //return $data;
        return view('task-list',compact('data'));
    }

     public function completeTask(){

        $data = Task::where('status',1)->get();
        //return $data;
        return view('complete-task',compact('data'));
    }

     public function pendingTask(){

        $data = Task::where('status',0)->get();
        //return $data;
        return view('pending-task',compact('data'));
    }

    public function addTask(){
        return view('add-task');
    }
   
    public function saveTask(Request $request){

        $request->validate([
            'task' => 'required',
            'description' => 'required'
        ]);

        $task_name = $request->task;
        $description = $request->description;

        $tsk = new Task();
        $tsk->task_name = $task_name;
        $tsk->description = $description;
        $tsk->save();

        return redirect()->back()->with('success','Task Added Successfully');
    }

    public function deleteTask($id)
    {  
       // Task::where('id','=',$id)->delete();
        DB::delete('delete from tasks where id = ?',[$id]);
        return redirect()->back()->with('success','Task Deleted Successfully');
    }
}
