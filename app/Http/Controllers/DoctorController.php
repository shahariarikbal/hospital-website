<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DoctorController extends Controller
{
    public function index()
    {
        $page = 'index';
        $data = Doctor::with('department')->get();
        $department = Department::all();
        return view('backend.doctor.index', compact('data', 'page', 'department'));
    }

    public function create()
    {
        $page = 'create';
        $data = '';
        $department = Department::all();
        return view('backend.doctor.index', compact('data', 'page', 'department'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|max:191',
            'last_name' => 'required|max:191',
            'email' => 'required|unique:doctors|email',
            'phone' => 'required|max:13|min:11',
            'experience' => 'required',
            'dept_id' => 'required|integer',
            'expertise' => 'required',
            'board_certification' => 'required',
            'appointment' => 'required',
            'schdule' => 'required',
            'nid' => 'required',
            'price' => 'required',
            'address' => 'required',
            'avatar' => 'required'
        ]);

        try{
            if ($request->hasFile('avatar')) {
                $file = $request->file('avatar');
                $name = time() . '.' . $file->getClientOriginalExtension();
                $file->move('avatar/', $name);
            }

            $doctor = new Doctor();
            $doctor->first_name = $request->first_name;
            $doctor->last_name = $request->last_name;
            $doctor->slug = strtolower($request->first_name . '-' . $request->last_name);
            $doctor->dept_id = $request->dept_id;
            $doctor->email = $request->email;
            $doctor->phone = $request->phone;
            $doctor->experience = $request->experience;
            $doctor->expertise = $request->expertise;
            $doctor->board_certification = $request->board_certification;
            $doctor->appointment = $request->appointment;
            $doctor->schdule = $request->schdule;
            $doctor->nid = $request->nid;
            $doctor->price = $request->price;
            $doctor->address = $request->address;
            $doctor->avatar = url('avatar/'.$name);
            $doctor->save();
            return redirect('/doctor/index')->with('success', 'Doctor has been successfully inserted');
        }catch(ModelNotFoundException $exception){
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    public function edit($id, $slug)
    {
        $page = 'edit';
        $data = Doctor::with('department')->find($id);
        $department = Department::all();
        return view('backend.doctor.index', compact('data', 'page', 'department'));
    }

    public function update(Request $request, $id)
    {

        try{

            $this->validate($request, [
                'first_name' => 'required|max:191',
                'last_name' => 'required|max:191',
                'email' => 'required|email|unique:doctors,email,'.$id,
                'phone' => 'required|max:13|min:11',
                'experience' => 'required',
                'dept_id' => 'required|integer',
                'expertise' => 'required',
                'board_certification' => 'required',
                'appointment' => 'required',
                'schdule' => 'required',
                'nid' => 'required',
                'price' => 'required',
                'address' => 'required',

            ]);

            $doctor = Doctor::find($id);

            if ($request->hasFile('avatar')) {
                if ($doctor->avatar) {
                    file_exists(public_path('/avatar/').$doctor->avatar);
                }else {
                    unlink(public_path('/avatar/').$doctor->avatar);
                }

                $imageName = time().'_'.'.'. $request->avatar->extension();
                $imageUrl = $request->avatar->move(public_path('avatar'), $imageName);
                $doctor->avatar = url('avatar/'.$imageName);
            }

            $doctor->first_name = $request->first_name;
            $doctor->last_name = $request->last_name;
            $doctor->slug = strtolower($request->first_name . '-' . $request->last_name);
            $doctor->dept_id = $request->dept_id;
            $doctor->email = $request->email;
            $doctor->phone = $request->phone;
            $doctor->experience = $request->experience;
            $doctor->expertise = $request->expertise;
            $doctor->board_certification = $request->board_certification;
            $doctor->appointment = $request->appointment;
            $doctor->schdule = $request->schdule;
            $doctor->nid = $request->nid;
            $doctor->price = $request->price;
            $doctor->address = $request->address;
            $doctor->save();
            return redirect('/doctor/index')->with('success', 'Doctor has been successfully inserted');
        }catch(ModelNotFoundException $exception){
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect('/doctor/index')->with('success', 'Doctor has been successfully deleted');
    }
}
