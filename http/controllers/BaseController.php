<?php

namespace Cmantikweb\Simplecomments\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BaseController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function responsePatron($description,$payload)
    {
      return response()->json(
        [
          'status'      => 200,
          'description' => $description,
          'payload'     => $payload,
        ],
        200
      );
    }

}
