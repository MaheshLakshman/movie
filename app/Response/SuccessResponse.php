<?php
namespace App\Response;

use Illuminate\Contracts\Support\Responsable;

class SuccessResponse implements Responsable
{
    public $msg;

    public $status;

    public function __construct($msg, $status = 200)
    {
        $this->msg = $msg;
        $this->status = $status;
    }

    public function toResponse($request)
    {
        return response()->json([
            'success' => true,
            'msg' => $this->msg
        ], $this->status);
    }
}