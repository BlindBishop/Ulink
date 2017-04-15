<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all(); // gets all users from the database
        return compact('users');  // returns all users in .json format

        // If you don't want to use AngularJS, this is how you would render a view in pure Laravel
        // The following line will send all users to resources/views/users/index.blade.php
        // return view('users.index', compact('users'));
    }

    // store will create an user object.
    // to quickly modify these lines in phpStorm, hold alt, click and drag to edit multiple lines
    public function store(Request $request) {
//        https://laravel.com/docs/5.4/validation
        $this->validate($request, [
            'FirstName' => 'required | string',
            'MI' => '',
            'LastName' => 'required | string',
            'HouseNumber' => 'required',
            'Street' => 'required | string',
            'City' => 'string',
            'County' => 'required | string',
            'UserState' => '',
            'UserCountry' => 'required',
            'Zip' => 'required',
            'DateOfBirth' => 'required',
            'HireDate' => 'required',
            'LicenseDate' => 'required',
            'TerminationDate' => '',
            'Salary' => 'required'
        ]);
        //if validation !successful, laravel will return a JSON response right here
        //else the function will continue
        //validation successful, send the user object to the database
        $user = new User;

        $user->FirstName = $request->input('FirstName');
        $user->MI = $request->input('MI');
        $user->LastName = $request->input('LastName');
        $user->HouseNumber = $request->input('HouseNumber');
        $user->Street = $request->input('Street');
        $user->City = $request->input('City');
        $user->County = $request->input('County');
        $user->UserState = $request->input('UserState');
        $user->UserCountry = $request->input('UserCountry');
        $user->Zip = $request->input('Zip');
        $user->DateOfBirth = $request->input('DateOfBirth');
        $user->HireDate = $request->input('HireDate');
        $user->LicenseDate = $request->input('LicenseDate');
        $user->TerminationDate = $request->input('TerminationDate');
        $user->Salary = $request->input('Salary');
        $user->save();

        return $user->id;
//        return Response::json(array('success' => true, 'last_insert_id' => $user->id), 200);
    }

    // Show only one user
    public function show(User $user)
    {
        return compact('user');
        // using pure Laravel
        // return view('users.show', compact('user'));
    }

    public function custom(Request $request, User $user)
    {
        $login = new User;

        $login->email = $request->input('FirstName');
        $login->pass = $request->input('MI');
        $checked = 1;
        if(count($checked) >0){
            return compact('user');
        }
        else{
            return false;
        }
    }

    public function update(Request $request, $id) {
//        $this->validate($request, [
//            'FirstName' => 'required | between:1,20 | string',
//            'MI' => 'nullable | string | size:1',
//            'LastName' => 'required | string',
//            'HouseNumber' => 'required | numeric',
//            'Street' => 'required | string',
//            'City' => 'required_if:County,==,null | string',
//            'County' => 'required_if:City,==,null | string',
//            'UserState' => 'nullable',
//            'UserCountry' => 'required',
//            'Zip' => 'required | numeric | size:5',
//            'DateOfBirth' => 'required | date',
//            'HireDate' => 'required | date | after:DateOfBirth | before:tomorrow',
//            'LicenseDate' => 'required | date | after:DateOfBirth | before:tomorrow',
//            'TerminationDate' => 'nullable | date | after:HireDate | before:tomorrow',
//            'Salary' => 'required'
//        ]);
        $user = User::find($id);

        $user->FirstName = $request->input('FirstName');
        $user->MI = $request->input('MI');
        $user->LastName = $request->input('LastName');
        $user->HouseNumber = $request->input('HouseNumber');
        $user->Street = $request->input('Street');
        $user->City = $request->input('City');
        $user->County = $request->input('County');
        $user->UserState = $request->input('UserState');
        $user->UserCountry = $request->input('UserCountry');
        $user->Zip = $request->input('Zip');
        $user->DateOfBirth = $request->input('DateOfBirth');
        $user->HireDate = $request->input('HireDate');
        $user->LicenseDate = $request->input('LicenseDate');
        $user->TerminationDate = $request->input('TerminationDate');
        $user->Salary = $request->input('Salary');
        $user->save();

        return $user->id;
    }

    public function destroy(User $user)
    {
        $user->delete();

        // Since we told set our database to cascade on delete,
        // it's going to automatically delete the accidents that depend on an user.
        //  We also set accidents to cascade on delete so the claims will delete as the accidents are deleted.
    }

}
