<?php

namespace App\Http\Controllers\Admin\Message;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\MessageRepository;
use Illuminate\Http\Request;

class MessageAjaxController extends Controller
{
    protected $messageRepository;

    public function __construct(MessageRepository $messageRepository)
    {
        $this->messageRepository = $messageRepository;
    }

    public function getMessage(Request $request)
    {
        if ($request->ajax()) {
            return $this->messageRepository->getMessage();
        }
    }
}
