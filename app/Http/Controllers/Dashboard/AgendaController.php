<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Agenda;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Dashboard\AgendaRequest;

class AgendaController extends Controller
{
    public function index()
    {
        return view('dashboard.agenda.index');
    }

    public function data_table(Request $request)
    {
        $agendas = Agenda::orderBy('name','desc');

        return DataTables::of($agendas)
            ->addColumn('action', function ($agendas) {

            })
            ->addIndexColumn()

            ->make(true);
    }

    public function create()
    {
        return view('dashboard.agenda.create');
    }

    public function store(AgendaRequest $request)
    {

        $image = $request->image;

        if($image) {
            $ext = $image->getClientOriginalExtension();
            //upload foto to folder
            $upload_path = public_path('storage/agenda/');
            $picture_name = 'Agenda_'.Str::slug(Str::random(6)).'_'.date('YmdHis').".$ext";
            $image->move($upload_path, $picture_name);
        }

        $agenda = new Agenda();
        $agenda->schedule = $request->schedule;
        $agenda->caption = $request->caption;
        $agenda->description = $request->description;
        $agenda->location = $request->location;
        $agenda->views = $request->views;
        $agenda->image = $picture_name;
        $agenda->times = $request->times;
        $agenda->dihadiri = $request->dihadiri;
        $agenda->save();

        return redirect()->route('dashboard.agenda.index')->with('success','Berhasil Menambahkan Agenda Baru');
    }
}
