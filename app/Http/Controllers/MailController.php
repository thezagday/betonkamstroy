<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;



class MailController extends Controller
{
    public function __construct()
    {
        session_start();
    }

    public function mail()
    {
        $subject = "Заказ звонка";
        $name = Input::get('name');
        $phone = Input::get('phone');


        $mailsend = mail(Contact::find(1)->mail, $subject, "Имя: $name\nТелефон: $phone");

        if($mailsend)
        {
            $_SESSION['sended'] = true;
            return redirect('/');
            exit;
        }
    }
    public function calculate_coast()
    {
        Input::get('product') ? $subject = "Заказать продукт" : $subject = "Рассчитать стоимость бетона";

        $name = Input::get('name');
        $phone = Input::get('phone');
        $concrete_mark = Input::get('concrete_mark');
        $numb_cubes = Input::get('numb_cubes');


        $mailsend = mail(Contact::find(1)->mail, $subject, "Имя: $name\nТелефон: $phone\nМарка бетона: $concrete_mark\nКоличество кубов: $numb_cubes");

        if($mailsend)
        {
            $_SESSION['sended'] = true;
            return redirect('/');
            exit;
        }
    }
    public function price_list()
    {
        $subject = "Вышлите мне прайс-лист!";
        $name = Input::get('name');
        $phone = Input::get('phone');
        $mail = Input::get('mail');


        $mailsend = mail(Contact::find(1)->mail, $subject, "Имя: $name\nТелефон: $phone\nПочта: $mail");

        if($mailsend)
        {
            $_SESSION['sended'] = true;
            return redirect('/');
            exit;
        }
    }
}
