<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);
        $this->setPageTitle('Patients', 'List of all Patients');
        return view('admin.users.index', compact('users'));
    }
    public function show($id)
    {
        $users = User::where('id', $id)->firstOrFail();
        $this->setPageTitle('Patient Details', $users->s_id);
        return view('admin.users.show', compact('users'));
    }
    public function create()
    {
        $users = User::orderBy('id', 'desc')->get();
    
        $this->setPageTitle('Patients', 'Create Patient');
        return view('admin.users.create', compact('users'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required|max:255',
            // 'last_name'  => 'required|max:255',
            // 'address'     => 'required|max:255',
            // 'state'     => 'required|max:255',
            // 'city'  => 'required|max:255',
            // 'zipcode'  => 'required|max:255',
            // 'phone'     => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:255',
            // 'country'  => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'min:6|required|same:confirm-password',
            // 'theme'  => 'required',
        ]);
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        return $this->responseRedirect('admin.users.index', 'Patient added successfully' ,'success',false, false);
    }
    public function mail($id)
    {
        $user = User::find($id);
        $this->setPageTitle('Mail Patient', $user->getFullNameAttribute());
        return view('admin.users.mail',compact('user'));
    }
    public function SubmitMail($id, Request $request, AppMailer $mailer)
    {
        $this->validate($request, [
            'message'   => 'required',
            'subject'   => 'required|max:255',
        ]);
        $users = User::where('id', $id)->firstOrFail();
        $mailUser = $users;
        $subject = $request->input('subject');
        $bodyMessage = $request->input('message');
        $mailer->sendmailToUser($mailUser, $subject, $bodyMessage);
        return $this->responseRedirect('admin.users.index', 'Mail sent successfully' ,'success',false, false);
    }
    public function edit($id)
    {
        $user = User::find($id);
        $this->setPageTitle('Patients', 'Edit Patient');
        return view('admin.users.edit',compact('user'));
    }
    public function update($id, Request $request)
    {
        $user = User::where('id', $id)->firstOrFail();
        $this->validate($request, [
            'name'     => 'required|max:255',
            // 'last_name'  => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,id,'.$user->id,
            'phone'     => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:255',
        ]);
    
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->s_id = $request->s_id;
        $user->dept = $request->dept;
        $user->session = $request->session;
        $user->blood_group = $request->blood_group;
        $user->phone = $request->phone;
        $user->dormitory = $request->dormitory;
        $user->birthdate = $request->birthdate;
        $user->more_info = $request->more_info;
        // if($request->password){
        //     $this->validate($request,[
        //         'password' => 'min:6|confirmed',
        //     ]);
        //     $user->password = bcrypt($request->password);
        // }
        // dd($user);
        $user->save();
        return $this->responseRedirect('admin.users.index', 'Patient info updated successfully' ,'success',false, false);
    }
    public function updateStatus(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->status = $request->status;
        $user->save();

        return response()->json(['message' => 'Patient profile status updated successfully.']);
    }
    public function delete($id)
    {
        User::find($id)->delete();
        return $this->responseRedirectBack('Patient profile deleted successfully.', 'success');

    }
}
