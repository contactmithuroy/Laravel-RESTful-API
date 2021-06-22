<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;
use Validator;
class DeviceController extends Controller
{
    
    public function list()
    {
         Return Device::all();
    }

    
    public function addData(Request $request)
    {
        $device = new Device();
        $device->name = $request->name;
        $device->Capital = $request->Capital;
        $device->save();

        if($device){

            return ['massage'=>'your data has been submited'];

        }else{

            return ['massage'=>'your data has been not submited'];
        }
        
    }

    public function update(Request $request, Device $device)
    {
        $device = Device::find($request->id);
        $device->name = $request->name;
        $device->Capital = $request->Capital;
        $device->save();
         if($device){

            return ['massage'=>'your data has been updated'];

        }else{

            return ['massage'=>'your data has been not updated'];
        }
        
    }


    public function delete($id)
    {
        $device = Device::find($id);
        $result = $device->delete();
        if($result){

            return ['massage'=>'your data has been deleted'];

        }else{

            return ['massage'=>'your data has been not deleted'];
        }
    }

   
    public function search($name)
    {
        return Device::where('name','like','%'.$name.'%')->get();

    }

    public function getData(Request $request){

        $rules =array(
            'name'=>'required|min:4',
            'Capital'=>'required|min:3|max:5'
        );

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return $validator->errors();
        }else{

            $device = new Device();
            $device->name = $request->name;
            $device->Capital = $request->Capital;
            $device->save();

            if($device){

                return ['massage'=>'your data has been submited'];

            }else{

                return ['massage'=>'your data has been not submited'];
            }

        }

    }


   
    public function edit(Device $device)
    {
        //
    }


   

    public function destroy(Device $device)
    {
        //
    }
}
