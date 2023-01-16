<?php

namespace App\Http\Controllers\Site\Message;

use App\Http\Controllers\Controller;
use App\Repositories\Site\MessageRepository;
use Illuminate\Http\Request;

class MessageAjaxController extends Controller
{
    protected $messageRepository;

    public function __construct(MessageRepository $messageRepository)
    {
        $this->messageRepository = $messageRepository;
    }

    public function store(Request $request)
    {
        $this->validate($request, ['phone' => 'required', 'description' => 'required']);
        if ($request->ajax()) {
            $this->messageRepository->store($request);
            return response()->json(['success']);
        }
    }
}
