<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ActionController extends Controller
{
    public function index(){

        $data['title'] = 'Form-Submission';
        return view('index',$data);

    }
// Store Name from request
    public function storeData(Request $request):string{

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone'=> 'required'
        ]);

        $name = $request->name;
        return $name;
    }

    // Retrive and store user agent infor

    public function getUserAgent(Request $request):string{
        $userAgent = $request->header('User-Agent');
        return $userAgent;
    }

    // Retrive Parameter Using query function
    
    public function getQuery(Request $request):JsonResponse{
        $page = $request->query('page', null);

        return response()->json(['page' => $page]);
    }

    // Send JSON Response

    public function sendResponse():JsonResponse{

        $message = "Success";
        $data = ['name'=> 'Jonh Doe', 'age'=> 25];
        $code = 200;
        return response()->json(['message' => $message, 'data' => $data],$code);


    }

    // Upload file web form
    public function uploadForm(){
        $data['title'] = "Upload File";
        return view('upload',$data);
    }

    // Upload a File
    public function upload(Request $request):string{
        $img = $request->file('avatar');
        $fileName = $img->getClientOriginalName();
        $img->move(public_path('upload'), $fileName);
        return response("File Uploaded Successfully!!");
    }

    // Retrive token value from cookie

    public function getCookie(Request $request):JsonResponse{
         $rememberToken = $request->cookie('remember_token', null);
        return response()->json(['remember_token' => $rememberToken]);
    }


}
