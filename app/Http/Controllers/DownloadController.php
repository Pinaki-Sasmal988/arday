<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function downloadFile(Request $request)
    {
        $file= public_path(). "/assets/brochure/".$request->filename;

    $headers = array(
              'Content-Type: application/pdf',
            );

    return response()->download($file, $request->filename, $headers);
    }
}
