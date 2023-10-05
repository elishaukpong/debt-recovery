<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReminderController extends Controller
{
    public function reminderSchedule(){
        return view("reminder-schedule");
    }

    public function displayForm(){
        return view("reminder-form");
    }
}
