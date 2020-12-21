<?php

namespace App\Http\Controllers;

use App\LearnAjax;
use DataTables;
use Illuminate\Http\Request;

class LearnAjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = LearnAjax::all();
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        LearnAjax::create($request->all());
        return redirect()->route('ajax.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LearnAjax  $learnAjax
     * @return \Illuminate\Http\Response
     */
    public function show(LearnAjax $learnAjax)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LearnAjax  $learnAjax
     * @return \Illuminate\Http\Response
     */
    public function edit(LearnAjax $learnAjax)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LearnAjax  $learnAjax
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LearnAjax $learnAjax)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LearnAjax  $learnAjax
     * @return \Illuminate\Http\Response
     */
    public function destroy(LearnAjax $learnAjax)
    {
        //homework - write code to delete the record from database.
        return response()->json(['status' => 'success', 'message' =>'Thama na bang']);
        
    }




    public function indexpagetable(){
       
        $ajaxdata = LearnAjax::all();
       
        return Datatables::of($ajaxdata)
        ->addColumn('action', function ($ajaxdata) {
            $buttons ='<a  href="'.url('/ajax/'.$ajaxdata->id.'/').'">View</a> 
            <a class="far fa-edit btn btn-sm btn-success btn-rounded m-b-1 m-l-5" href="'.url('/ajax/'.$ajaxdata->id.'/edit').'">Edit</a>
            <input type="hidden" id="hiddenID" value="'.$ajaxdata->id.'">
           
            <button data-token="'. csrf_token() .'" class="far fa-trash-alt btn btn-sm btn-danger btn-rounded m-b-1 m-l-5" id="delete">Delete</button>';

           
            return $buttons;
        })

        ->make(true);

    }
}
