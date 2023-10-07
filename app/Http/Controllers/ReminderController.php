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

        return view("reminder-schedule", ["debtors" => $this->debtorRepository->index()]);
    }

    public function displayForm(int $debtorId)
    {

        return view("reminder-form", ['debtor' => $this->debtorRepository->getId($debtorId)->first()]);
    }


    public function reminder( ReminderRequest $request)
    {
        if(! $this->reminderRepository->setReminder($request->validated()) )
        {
            return redirect()->back()->withErrors("Reminder was not created");
        }

       return view('reminder-schedule', ['debtors' => $this->debtorRepository->index(),'reminder' => $this->reminderRepository->setReminder($request->validated())]);
    }
}
