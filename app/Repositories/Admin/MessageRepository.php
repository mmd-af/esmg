<?php

namespace App\Repositories\Admin;

use App\Models\Message\Message;
use Carbon\Carbon;

class MessageRepository extends BaseRepository
{
    public function __construct(Message $model)
    {
        $this->setModel($model);
    }

    public function getMessage()
    {
        return $this->query()
            ->select([
                'id',
                'title',
                'phone',
                'description'
            ])
            ->latest()
            ->get();
    }

    public function checkMessage()
    {
        $messages = $this->query()
            ->select([
                'id'
            ])
            ->where('read_at', null)
            ->get();
        return count($messages);
    }

    public function markMessage()
    {
        $messages = $this->query()
            ->select([
                'id',
                'read_at'
            ])
            ->where('read_at', null)
            ->get();
        foreach ($messages as $message) {
            $message->read_at = Carbon::now();
            $message->save();
        }
    }

    public function deleteMessage($message)
    {
        $messages = $this->query()
            ->find($message);
        $messages->delete();
    }
}
