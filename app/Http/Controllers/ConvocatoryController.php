<?php

namespace App\Http\Controllers;

use App\Convocatory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ConvocatoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $convocatories = Convocatory::orderBy('start', "DESC")->get();
        return view('convocatories.convocatoryIndex', compact('convocatories'));
    }

    public function create()
    {
        return view('convocatories.convocatoryForm');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $convocatory = new Convocatory();
        $this->validator($request->all())->validate();
        $checkConvocatory = Convocatory::where('end', ">", $request->start)->first();;
        if($checkConvocatory)
        {
            return back()->with('Error', 'There is already a call');
        }
        else
        {
            $convocatory->user_id =  $request->user()->id;
            $convocatory->start = $request->start;
            $convocatory->end = $request->end;
            $convocatory->written = $request->written;
            $convocatory->save();
            
            return back()->with('success', 'Data inserted Successfully');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Convocatory $convocatory)
    {
        return view('convocatories.convocatoryShow', compact('convocatory'));
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    Public function user_convovatories()
    {
        
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'start' => ['required', 'date', 'date_format:Y-m-d', 'after_or_equal:yesterday'],
            'end' => ['required', 'date', 'date_format:Y-m-d', 'after:start'],
            'written' => ['required', 'string', 'min:10', 'max:255']
        ]);
    }

}
