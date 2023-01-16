<?php

namespace App\Repositories\Site;

use App\Models\Message\Message;

class MessageRepository extends BaseRepository
{
    public function __construct(Message $model)
    {
        $this->setModel($model);
    }

    public function store($request)
    {
        $message = new Message();
        $message->title = $request->title;
        $message->phone = $request->phone;
        $message->description = $request->description;
        $message->save();
    }

}
