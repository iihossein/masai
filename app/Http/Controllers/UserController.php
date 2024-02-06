<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Morilog\Jalali\CalendarUtils;
use Morilog\Jalali\Jalalian;
use Morilog\Jalali\jDateTime;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.users_list',compact('users'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.profile.profile',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.profile.profile',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
        $user = User::find($id);
        // string to miladi
        $miladi = Jalalian::fromFormat('Y/m/d', $request->birthday)->toCarbon()->toDate();
        //miladi to jalali
        // $miladi = Jalalian::fromFormat('Y/m/d', $request->birthday)->toCarbon();
        // $jalali = Jalalian::fromCarbon($miladi)->toDateString();
        // $jalali = Jalalian::fromCarbon($miladi)->toDateTimeString();
        
        $user_data = $request->all();
        $user_data['birthday'] = $miladi;
        $user->update($user_data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        User::destroy($id);
        return redirect()->back();
    }
}
