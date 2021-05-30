<?php

namespace Illuminate\Queue\Events;

use Illuminate\Queue\Worker;

class WorkerException
{
    /**
     * @var
     */
    public $exception;
    /**
     * @var Worker
     */
    public $worker;


    /**
     * Create a new event instance.
     *
     * @param int $status
     * @return void
     */
    public function __construct($exception, Worker  $worker)
    {
        $this->exception = $exception;
        $this->worker = $worker;
    }
}
