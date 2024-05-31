<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class Controllers extends Controller
{
    public function index(){
        $data = Event::all();
        return view('index', compact('data'));
    }
    public function add(){
        return view('add');
        
    } 

    public function tambahData(Request $request){
        Event::create($request->all());
        return redirect()->route('index');
    }

    public function showData($id){
        $data = Event::find($id);
        return view('edit', compact('data'));
    }

    public function editData(Request $request, $id){
        $data = Event::find($id);
        $data->update($request->all());
        return redirect()->route('index');
    }

    public function hapusData($id){
        $data = Event::find($id);
        $data->delete();

        return redirect()->route('index');
    }

    public function show($id, $foto, $name, $tahun){
        return view('events.show')
            ->with('id', $id)
            ->with('foto', $foto)
            ->with('name', $name)
            ->with('tahun', $tahun);
        }
    }

    

