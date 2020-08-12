<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function add()
    {
      return view('admin.Profile.create');
    }

    public function create()
    {
      return redirect('admin.Profile.create');
    }

    public function edit()
    {
      return view('admin.Profile.edit');
    }

    public function update()
    {
      return redirect('admin.Profile.edit');
    }
}
