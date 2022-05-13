<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        $statuses = [
            [
                'label' => 'Todo',
                'value' => 'Todo',
            ],
            [
                'label' => 'Done',
                'value' => 'Done',
            ]
        ];
        return view('index', ['todos' => $todos, 'statuses' => $statuses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuses = [
            [
                'label' => 'Todo',
                'value' => 'Todo',
            ],
            [
                'label' => 'Done',
                'value' => 'Done',
            ]
        ];
        return view('create', ['statuses' => $statuses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        $todo = new Todo();
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->status = $request->status;
        $todo->user_id = Auth::user()->id;
        $todo->save();

        Toastr::success('Record Added!', 'Title', ["positionClass" => "toast-top-center"]);
        return redirect('/todo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        $todo = Todo::where('id', $id)->where('user_id', Auth::user()->id)->firstOrFail();
        $statuses = [
            [
                'label' => 'Todo',
                'value' => 'Todo',
            ],
            [
                'label' => 'Done',
                'value' => 'Done',
            ]
        ];

        return view('edit', ['statuses' => $statuses, 'todo' => $todo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required'
        ]);

        $todo = Todo::findOrFail($id);
        $todo = Todo::where('id', $id)->where('user_id', Auth::user()->id)->firstOrFail();
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->status = $request->status;
        $todo->save();

        Toastr::info('Record Updated!', 'Alert!', ["positionClass" => "toast-top-center"]);
        return redirect('/todo')->with('update-msg', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todo::where('id', $id)->where('user_id', Auth::user()->id)->firstOrFail();
        $todo = Todo::findorFail($id);
        $todo->delete();


        Toastr::error('Record Deleted!', 'Alert!', ["positionClass" => "toast-top-center"]);
        return redirect('/todo')->with('del-msg', 'Successfully Deleted');
    }
}
