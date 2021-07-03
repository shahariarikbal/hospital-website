<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Contact;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $data = [
            'banner' => Slider::orderBy('created_at', 'desc')->get(),
            'departments' => Department::orderBy('created_at', 'desc')->get(),
            'doctors' => Doctor::with('department')->orderBy('created_at', 'desc')->get()
        ];
        return view('frontend.home.index', compact('data'));
    }

    public function appointment(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
            'appointment_date' => 'required'
        ]);

        $appointment = new Appointment();
        $appointment->name = $request->name;
        $appointment->doctor_id = $request->doctor_id;
        $appointment->email = $request->email;
        $appointment->phone = $request->phone;
        $appointment->message = $request->message;
        $appointment->appointment_date = $request->appointment_date;
        $appointment->save();
        return response()->json([
            'status' => 200,
            'success' => 'Your appointment has been submitted',
        ]);
    }

    public function about()
    {
        $data = [
            'banner' => Slider::orderBy('created_at', 'desc')->get(),
            'departments' => Department::orderBy('created_at', 'desc')->get(),
            'doctors' => Doctor::with('department')->orderBy('created_at', 'desc')->get()
        ];
        return view('frontend.about.about', compact('data'));
    }

    public function contact()
    {
        $data = [
            'banner' => Slider::orderBy('created_at', 'desc')->get(),
            'departments' => Department::orderBy('created_at', 'desc')->get(),
            'doctors' => Doctor::with('department')->orderBy('created_at', 'desc')->get()
        ];
        return view('frontend.contact.contact', compact('data'));
    }

    public function contactStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return response()->json([
            'status' => 200,
            'success' => 'Your information has been submitted. Thank you for contacting us.'
        ]);
    }

    public function expertList()
    {
        $data = [
            'banner' => Slider::orderBy('created_at', 'desc')->get(),
            'departments' => Department::orderBy('created_at', 'desc')->get(),
            'doctors' => Doctor::with('department')->orderBy('created_at', 'desc')->get()
        ];
        return view('frontend.doctor.list', compact('data'));
    }

    public function career()
    {
        $data = [
            'banner' => Slider::orderBy('created_at', 'desc')->get(),
            'departments' => Department::orderBy('created_at', 'desc')->get(),
            'doctors' => Doctor::with('department')->orderBy('created_at', 'desc')->get()
        ];
        return view('frontend.career.career', compact('data'));
    }
}
