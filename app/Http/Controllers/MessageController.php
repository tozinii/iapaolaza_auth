<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Message;
use App\User;

class MessageController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth');
    }

    public function index()
    {
        return view('message.index');
    }

    public function create(Request $request)
    {
        return view('message.create');
    }

    public function store(Request $request)
    {
      $user = Auth::user();
      $msg = new Message;
      $array_error=array();
      $userto=User::where('user',$request->input('to'))->first();

      if ($userto) {
        $msg->message = $request->input('message');
        if (empty($msg->message)) {
          $error=true;
          $array_error ['message']="El mensaje es vacio";
        }
        else {
          date_default_timezone_set('Europe/Madrid');
          $msg->to = $userto->id;
          $msg->from = $user->id;
          $msg->datetime = date('Y-m-j H:i:s');
          $msg->save();
          return redirect(route('messages.index'));
        }
      }
      else {
        $error=true;
        $array_error ['to']="El destinatario no existe";
      }

      if ($error) {
        return redirect(route('messages.create'))
               ->withInput()
               ->withErrors($array_error);
      }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
