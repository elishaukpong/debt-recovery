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
}