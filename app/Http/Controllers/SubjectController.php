<?php

namespace App\Http\Controllers;

use App\Models\subject;
use Illuminate\Http\Request;
use Validator;
class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subject = Subject::all();
        return response()->json($subject);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'class_name'=>'required',
            'subject'=>'required',
            'subject_code'=> 'required|min:3|max:3'
        );
        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
        return $validator->errors();

        }else{
            
            $subject = new Subject();

            $subject->class_name = $request->class_name;
            $subject->subject = $request->subject;
            $subject->subject_code = $request->subject_code;
            $subject->save();


            if($subject){
                 return ['massage'=>'your data has been submited'];
                // return response()->json($subject);
            }else{
                return ['massage'=>'your data has been not submited'];
            }
        }

    }

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'class_name'=>'required',
            'subject'=>'required',
            'subject_code'=> 'required|min:3|max:3'
        );
        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
        return $validator->errors();

        }else{

            $subject = Subject::findorfail($id);
            $subject->update($request->all());

            if($subject){
                 return ['massage'=>'your data has been Updated'];
                // return response()->json($subject);
            }else{
                return ['massage'=>'your data has been not Updated'];
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(subject $subject)
    {
        //
    }
}
