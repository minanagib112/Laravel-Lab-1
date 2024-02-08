<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view("users.index");
    }
    public function create()
    {
        return view("users.create");
    }
    public function store(Request $request)
    {
    }
    public function show($id)
    {
        return view("users.show", ["id" => $id]);
    }
    public function edit($id)
    {
        return view("users.edit", ["id" => $id]);
    }
    public function update(Request $request, $id)
    {
    }
    public function destroy($id)
    {
    }
}
