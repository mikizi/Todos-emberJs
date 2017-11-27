<?php

namespace App;

class Task
{
    public function getTasks($session)
    {
        return $session->get('tasks');
    }
}
