<?php

namespace App\Http\Controllers;

use App\Models\Debtor;
use App\Http\Requests\ReminderRequest;
use App\Repository\Eloquent\DebtorRepository;
use App\Repository\Eloquent\ReminderRepository;

class ReminderController extends Controller
{
    public function __construct(private DebtorRepository $debtorRepository, public ReminderRepository $reminderRepository, private Debtor $debtor)
    {
        $this->debtorRepository = $debtorRepository;
        $this->reminderRepository = $reminderRepository;
        $this->debtor = $debtor;
    }

    public function reminderSchedule()
    {

       if( !$this->debtor->where("user_id", auth()->id())->first())
       {
            return view("reminder-schedule")->withErrors("NO DEBTOR AVAILABLE");
       }

       foreach( $this->debtorRepository->index() as $debtor)
       {
           if(! $this->getDebtorReminders($debtor->id))
           {
                return view("reminder-schedule", ["debtors" => $this->debtorRepository->index(), 'reminders' => null ]);
           }

           else

           return view("reminder-schedule", ["debtors" => $this->debtorRepository->index(), 'reminders' => $this->getReminders($debtor->id)]);
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

       return view('reminder-schedule', ['debtors' => $this->debtorRepository->index(), 'reminders' => $this->getDebtorReminders($reminder->debtor_id), "debtorReminderId" => $reminder->debtor_id]);
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

    public function getDebtorReminders($debtorId){
        return $this->reminderRepository->getDebtorReminders($debtorId);
    }
}
