<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\WelcomeSlider;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Dashboard\WelcomeSliderRequest;

class WelcomeSliderController extends Controller
{
    public function __construct()
    {
        // $this->middleware("permission:slider-create|slider-edit|slider-delete|slider-list|slider-show", ['only' => ['index', 'create', 'store']]);
    }

    public function index()
    {
        return view('dashboard.welcome-slider.index');
    }

    public function data_table(Request $request)
    {
        $sliders = WelcomeSlider::orderBy('orders','asc');
        return DataTables::of($sliders)
            ->addColumn('action', function ($row) {
                $actions = '';
                $actions .= '<a href="' . route('dashboard.sliders.show', $row->slug) . '" class="btn btn-sm btn-warning me-2 "><i class="bx bxs-show"></i></a>';

                // if (auth()->user()->can('slider-edit')) {
                    $actions .= '<a href="' . route('dashboard.sliders.edit', $row->slug) . '" class="btn btn-sm btn-primary me-2 "><i class="bx bxs-edit"></i></a>';
                // }
                // if (auth()->user()->can('slider-delete')) {
                    $actions .= '<a href="javascript:void(0)" onclick="deleteData(' . $row->slug . ')" class="btn btn-sm btn-danger me-2 "><i class="bx bxs-trash"></i></a>';
                // }

                return $actions;
            })
            ->addColumn('expired_date', function ($row) {
                return Carbon::parse($row->expired_date)->format('d F Y');
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
    }

    public function create(Request $request)
    {
        return view('dashboard.welcome-slider.create');
    }

    public function store(WelcomeSliderRequest $request)
    {
        $picture_name = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $upload_path = public_path('storage/slider/');
            $picture_name = 'Slider_' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();

            $image->move($upload_path, $picture_name);
        }

        // Create the slider record
        $slider = WelcomeSlider::create([
            'title' => $request->title,
            'expired_date' => $request->expired_date,
            'link' => $request->link,
            'orders' => $request->orders,
            'image' => $picture_name,
        ]);

        return redirect()->route('dashboard.sliders.index')->with('success', 'Berhasil Menambahkan Slider Baru');
    }

    public function show(WelcomeSlider $slider)
    {
        return view('dashboard.welcome-slider.show', compact('slider'));
    }

    public function edit(WelcomeSlider $slider)
    {
        return view('dashboard.welcome-slider.edit', compact('slider'));
    }

    public function update(Request $request, WelcomeSlider $slider)
    {

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $upload_path = public_path('storage/slider/');
            $picture_name = 'Slider_' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($upload_path, $picture_name);
        } else {
            $picture_name = $slider->image;

        }

        $slider->update([
            'title' => $request->title,
            'expired_date' => $request->expired_date,
            'link' => $request->link,
            'orders' => $request->orders,
            'image' => $picture_name,
        ]);

        return redirect()->route('dashboard.sliders.index')->with('success', 'Berhasil Mengedit Slider');
    }
}
