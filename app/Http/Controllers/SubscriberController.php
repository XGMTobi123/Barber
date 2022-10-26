<?php

namespace App\Http\Controllers;


use App\Mail\Subscribe;
use App\Models\Subscriber;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SubscriberController extends Controller
{
    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
//            'email' => 'required|email|unique:subscribers'
        ]);

        if ($validator->fails()) {
            return new JsonResponse(['success' => false, 'message' => $validator->errors()], 422);
        }

        $email = 'darioterrafan@gmail.com';
        $name = $request->all()['name'];
        $phone = $request->all()['phone'];
//        $subscriber = Subscriber::create([
//                'email' => $email
//            ]
//        );

//        if ($subscriber) {
            Mail::to($email)->send(new Subscribe($email, $name, $phone));
            return new JsonResponse(
                [
                    'success' => true,
                    'message' => "Thank you for subscribing to our email, please check your inbox"
                ],
                200
            );
//        }
    }
}
