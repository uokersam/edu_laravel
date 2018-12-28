<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ToDoListController extends Controller
{
    public function create()
    {
//        $content = $_POST['textitem'];
        DB::insert('INSERT INTO todolist(id, content) VALUES(DEFAULT, \'text\')');
        return redirect()->to('/todo');
    }

    public function show()
    {
        $items = DB::select('SELECT * FROM todolist');
        return view('todo', ['items' => $items]);
    }

    public function edit()
    {

    }

    public function delete()
    {

    }


}