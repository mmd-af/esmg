<?php

namespace App\Repositories\Admin;

use App\Models\Message\Message;

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
}
