<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class APIController extends Controller
{
    public function test()
    {
        // we will pass data like this which will get access on JSON format

        return ["name"=>"Roman","id"=>13,"address"=>"Kathmandu"];
    }

    public function getMethod()
    {
        return Student::all();
    }

    public function getWithId($id = null)
    {
        // responding all the data if we didn't get the id, if we get it we will send the specific id
        if ($id==null) {
            return Student::all();
        }
        return Student::where('sid', '=', $id)->get();
    }

    public function postMethod(Request $req)
    {
        // first we will get the body content
        $body = json_decode($req->getContent());

        // Saving new data into database
        $student = new Student();
        $student->sname = $body->sname;
        $student->saddress = $body->saddress;
        $student->sphone = $body->sphone;
        $student->sclass = $body->sclass;
        $saved = $student->save();
        if ($saved) {
            return ["success"=>true,"msg"=>"Saved Data Into database"];
        } else {
            return ["success"=>false,"msg"=>"Some problem occur"];
        }
    }

    public function putMethod(Request $req)
    {
        $body = json_decode($req->getContent());

        $updatedRes = Student::where('sid', '=', $body->sid)->update(
            ['sname'=>$body->sname,'saddress'=>$body->saddress,'sphone'=>$body->sphone,'sclass'=>$body->sclass]
        );
        if ($updatedRes) {
            return ["success"=>true,"msg"=>"Updated Data Into database"];
        } else {
            return ["success"=>false,"msg"=>"Some problem occur"];
        }
    }
}
