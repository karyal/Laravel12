<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; // For public directories
use Illuminate\Support\Facades\Storage; // For configured disks
use Symfony\Component\Mime\MimeTypes;

class UploadController extends Controller
{
    function showUploadForm(){
        return view('upload');
    }

    function uploadFile(Request $request){
        /*
        $request->validate([
            'file'=>'required | image | mimes: jpge, jpg, png, gif, pdf, csv, xls, doc, xlsx, docx'
        ]);
        */
        $fileName = time().'.'.$request->file->extension();  
        $request->file->move(public_path(), $fileName);
        //$request->file->move(public_path('uploads'), $fileName);
        //return view('display',['path'=>$fileName]);
        return redirect('uploadfiles');
    }

    function getUploadedFiles(){
        //Example-1
        /*
        $publicDirPath = public_path('uploads');
        $publicFiles = File::allFiles($publicDirPath);
        return $publicFiles;
        return view('display');
        */

        //Example-2
        $storageDirPath = public_path('uploads'); // Relative to storage/app
        $storageFiles = Storage::disk('local')->allFiles($storageDirPath);
        return $storageDirPath;
    }
}