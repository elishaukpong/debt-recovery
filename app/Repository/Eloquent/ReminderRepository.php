<?php

namespace App\Repository\Eloquent;

use App\Models\Reminder;
use App\Repository\BaseRepository;

class ReminderRepository extends BaseRepository
{
    public function __construct(private Reminder $reminder)
    {
        $this->reminder = $reminder;
    }

    public function setReminder( array $data)
    {
        return $this->reminder->create($data);

    }

    public function getReminders()
    {
        if(! $reminders = $this->reminder->all()){
            return false;
        }

        return $reminders;
    }

    public function getReminder($debtorId)
    {
        return $this->reminder->where("debtor_id", $debtorId)->get();
    }
}
