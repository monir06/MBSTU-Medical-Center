<?php

namespace App\Http\Controllers\Admin;

use App\Models\Doctor;
// use App\Mailers\AppMailer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\BaseController;

class DoctorController extends BaseController
{
    public function index()
    {
        $doctors = Doctor::orderBy('id', 'desc')->paginate(10);
        $this->setPageTitle('Doctors', 'List of all Doctors');
        return view('admin.doctors.index', compact('doctors'));
    }
    public function show($id)
    {
        $doctors = Doctor::where('id', $id)->firstOrFail();
        $this->setPageTitle('Doctor Details', $doctors->name);
        return view('admin.doctors.show', compact('doctors'));
    }
    public function create()
    {
        $doctors = Doctor::orderBy('id', 'desc')->get();
    
        $this->setPageTitle('Doctors', 'Create Doctor');
        return view('admin.doctors.create', compact('doctors'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'     => 'required|max:255',
            'name'     => 'required|max:255',
            // 'address'     => 'required|max:255',
            // 'state'     => 'required|max:255',
            // 'city'  => 'required|max:255',
            // 'zipcode'  => 'required|max:255',
            'phone'     => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:255',
            // 'country'  => 'required|max:255',
            'email' => 'required|email|unique:doctors,email',
            // 'password' => 'min:6|required|same:confirm-password',
        ]);
        $input = $request->all();
        // $input['password'] = Hash::make($input['password']);
        $doctor = Doctor::create($input);
        return $this->responseRedirect('admin.doctors.index', 'Doctor added successfully' ,'success',false, false);
    }
    public function mail($id)
    {
        $doctor = Doctor::find($id);
        $this->setPageTitle('Mail Doctor', $doctor->name);
        return view('admin.doctors.mail',compact('doctor'));
    }
    public function SubmitMail($id, Request $request, AppMailer $mailer)
    {
        $this->validate($request, [
            'message'   => 'required',
            'subject'   => 'required|max:255',
        ]);
        $doctors = Doctor::where('id', $id)->firstOrFail();
        $mailDoctor = $doctors;
        $subject = $request->input('subject');
        $bodyMessage = $request->input('message');
        $mailer->sendmailToDoctor($mailDoctor, $subject, $bodyMessage);
        return $this->responseRedirect('admin.doctors.index', 'Mail sent successfully' ,'success',false, false);
    }
    public function edit($id)
    {
        $doctor = Doctor::find($id);
        $this->setPageTitle('doctors', 'Edit Doctor');
        return view('admin.doctors.edit',compact('doctor'));
    }
    public function update($id, Request $request)
    {
        $doctor = Doctor::where('id', $id)->firstOrFail();
        $this->validate($request, [
            'title'     => 'required|max:255',
            'name'     => 'required|max:255',
            'email' => 'required|email|max:255|unique:doctors,id,'.$doctor->id,
            'phone'     => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:255',
        ]);
        
        $doctor->title = $request->title;
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->gender = $request->gender;
        $doctor->degree = $request->degree;
        $doctor->address = $request->address;
        $doctor->district = $request->district;
        $doctor->nid = $request->nid;
        $doctor->regi_no = $request->regi_no;
        // $doctor->state = $request->state;
        // $doctor->city = $request->city;
        // $doctor->zipcode = $request->zipcode;
        $doctor->phone = $request->phone;
        $doctor->type = $request->type;
        $doctor->visit_hour = $request->visit_hour;
        $doctor->more_info = $request->more_info;
        // if($request->password){
        //     $this->validate($request,[
        //         'password' => 'min:6|confirmed',
        //     ]);
        //     $doctor->password = bcrypt($request->password);
        // }
        // dd($doctor);
        $doctor->save();
        return $this->responseRedirect('admin.doctors.index', 'Doctor updated successfully' ,'success',false, false);
    }
    public function updateStatus(Request $request)
    {
        $doctor = Doctor::findOrFail($request->doctor_id);
        $doctor->status = $request->status;
        $doctor->save();

        return response()->json(['message' => 'Doctor status updated successfully.']);
    }
    public function delete($id)
    {
        Doctor::find($id)->delete();
        return $this->responseRedirectBack('Doctor deleted successfully.', 'success');

    }
}