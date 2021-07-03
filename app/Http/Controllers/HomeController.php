<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('backend.home.index');
    }

    public function banner()
    {
        $page = 'index';
        $data = Slider::all();
        return view('backend.banner.index', compact('data', 'page'));
    }

    public function create()
    {
        $page = 'create';
        $data = '';
        return view('backend.banner.index', compact('data', 'page'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required|mimes:png,jpg'
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('banner/' .$name);
        }

        $banner = new Slider();
        $banner->name = $request->name;
        $banner->slug = str_replace(' ', '-', $request->name);
        $banner->image = url('banner/'.$name);
        $banner->save();
        return redirect('/banner/index')->with('success', 'Banner has been successfully inserted');
    }

    public function edit($id)
    {
        $page = 'edit';
        $data = Slider::find($id);
        return view('backend.banner.index', compact('data', 'page'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $slider = Slider::find($id);
        if ($request->hasFile('image')) {
            if ($slider->image) {
                file_exists(public_path('/banner/').$slider->image);
            }

            $imageName = time().'_'.'.'. $request->image->extension();
            $imageUrl = $request->image->move(public_path('banner'), $imageName);
            $slider->image = url('banner/'.$imageName);
        }

        $slider->name = $request->name;
        $slider->slug = str_replace(' ', '-', $request->name);
        $slider->save();
        return redirect('/banner/index')->with('success', 'Banner has been successfully updated');
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect('/banner/index')->with('success', 'Banner has been successfully deleted');
    }

    public function appointmentList()
    {
        $page = 'index';
        $data = Appointment::with('doctor')->get();
        return view('backend.appointments.index', compact('data', 'page'));
    }

    public function appointmentShow($id)
    {
        $page = 'show';
        $data = Appointment::with('doctor')->find($id);
        return view('backend.appointments.index', compact('data', 'page'));
    }

    public function appointmentDelete($id)
    {
        $deleteAppointment = Appointment::find($id);
        $deleteAppointment->delete();
        return redirect()->back()->with('success', 'Appointment has been successfully deleted');
    }

    public function about()
    {
        return 'About us page';
    }

    public function contact()
    {
        return 'Contact us page';
    }

    public function career()
    {
        return 'Career page';
    }

    public function service()
    {
        return 'Service page';
    }

    public function notice()
    {
        return 'Notice board page';
    }
}
