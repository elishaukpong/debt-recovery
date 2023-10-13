<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReminderRequest;
use App\Repository\Eloquent\DebtorRepository;
use App\Repository\Eloquent\ReminderRepository;

class ReminderController extends Controller
{
    public function __construct(private DebtorRepository $debtorRepository, public ReminderRepository $reminderRepository)
    {
        $this->debtorRepository = $debtorRepository;
        $this->reminderRepository = $reminderRepository;
    }

    public function reminderSchedule()
    {
       $debtors =  $this->debtorRepository->index();

       foreach( $debtors as $debtor){

           if(! $this->getReminder($debtor->id))
           {
                return view("reminder-schedule", ["debtors" => $this->debtorRepository->index()]);
           }
           else

           return view("reminder-schedule", ["debtors" => $this->debtorRepository->index(), 'reminders' => $this->getReminders($debtor->id), "debtorReminderId" =>$debtor->id]);
       }


    }

    public function displayForm(int $debtorId)
    {

        return view("reminder-form", ['debtor' => $this->debtorRepository->getId($debtorId)->first()]);
    }


    public function setReminder( ReminderRequest $request )
    {

        if(! $reminder = $this->reminderRepository->setReminder($request->validated()) )
        {
            return redirect()->back()->withErrors("Reminder was not created");
        }

        $this->getReminder($reminder->debtor_id);

       return view('reminder-schedule', ['debtors' => $this->debtorRepository->index(), 'reminders' =>$this->getReminder($reminder->debtor_id), "debtorReminderId" =>$reminder->debtor_id]);
        // return redirect()->route("reminder.schedule")->with('message', "Reminder Successfully Created");
    }

    public function getReminder($debtorId)
    {
        if(! $this->reminderRepository->getReminder($debtorId)){
            return false;
        };

        return view("reminders-view", ["reminders" => $this->reminderRepository->getReminder($debtorId), "debtor" => $this->debtorRepository->getId($debtorId)]);
    }

    public function getReminders(){
        return $this->reminderRepository->getReminders();
    }
}
