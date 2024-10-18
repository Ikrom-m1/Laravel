<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function phpInfo()
    {
        return response()->json([
            'php_version' => phpversion(),
            'php_info' => phpinfo()
        ]);
    }

    public function clientInfo(Request $request)
    {
        return response()->json([
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent()
        ]);
    }

    public function dbInfo()
    {
        $dbInfo = [
            'database' => env('DB_DATABASE'),
            'username' => env('DB_USERNAME'),
            'host' => env('DB_HOST')
        ];
        return response()->json($dbInfo);
    }
}
