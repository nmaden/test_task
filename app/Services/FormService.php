<?php

namespace App\Services;

use App\Models\Form;

class FormService
{
    public function create($data) {
        // $form = new Form();

        $form = Form::create([
            'phone'=> $data->phone,
            'message'=> $data->message,
            'email'=>$data->email
        ]);
        // $form->phone = $data->phone;
        // $form->message = $data->message;
        // $form->email = $data->email;
        // $form->save();

        return $form;
    }
}
