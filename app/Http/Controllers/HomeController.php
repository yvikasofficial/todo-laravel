<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tasks = Task::all(); 
        $tasks_todo = $tasks->filter(function ($item) {
            return $item->status === 'todo';
        })->values();

        $tasks_progress = $tasks->filter(function ($item) {
            return $item->status === 'progress';
        })->values();

        $tasks_complete = $tasks->filter(function ($item) {
            return $item->status === 'complete';
        })->values();
        
        return view('home', [
            'tasks' => Task::all(),
            'tasks_todo' => $tasks_todo,
            'tasks_progress' => $tasks_progress,
            'tasks_complete' => $tasks_complete,
        ]);
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        $tasks = Task::all(); 
        $tasks_todo = $tasks->filter(function ($item) {
            return $item->status === 'todo';
        })->values();

        $tasks_progress = $tasks->filter(function ($item) {
            return $item->status === 'progress';
        })->values();

        $tasks_complete = $tasks->filter(function ($item) {
            return $item->status === 'complete';
        })->values();

        return view('home', [
            'modal' => true,
            'tasks' => Task::all(),
            'tasks_todo' => $tasks_todo,
            'tasks_progress' => $tasks_progress,
            'tasks_complete' => $tasks_complete,
        ]);
    }

    public function edit(Task $task)
    {
        $tasks = Task::all(); 
        $tasks_todo = $tasks->filter(function ($item) {
            return $item->status === 'todo';
        })->values();

        $tasks_progress = $tasks->filter(function ($item) {
            return $item->status === 'progress';
        })->values();

        $tasks_complete = $tasks->filter(function ($item) {
            return $item->status === 'complete';
        })->values();
        
        // GET
        return view('home', [
            'modal' => true,  
            'is_edit' => true, 
            'tasks' => Task::all(),
            'current' => $task,
            'tasks_todo' => $tasks_todo,
            'tasks_progress' => $tasks_progress,
            'tasks_complete' => $tasks_complete,
        ]);
    }
}