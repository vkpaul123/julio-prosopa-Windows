<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class ImageClassifyController extends Controller
{
    public function showClassification($image_id)
    {
    	$prepareCommand = 'cd "C:\LaravelProject\julio-prosopa\public\matlabScripts";, res=myClassify(\''.$image_id.'\');, exit';
		$processMatlab = new Process('"C:\Program Files\MATLAB\MATLAB Production Server\R2015a\bin\matlab" -automation -r "'.$prepareCommand.'" -wait');
		$processMatlab->setTimeOut(600);
        $processMatlab->run();

        if(!$processMatlab->isSuccessful())
            throw new ProcessFailedException($processMatlab);

        $contents = file_get_contents('C:\LaravelProject\julio-prosopa\storage\app\public\matlabLogFiles\\'. $image_id.'_classify.txt');
        // $contents = preg_replace('/[^A-Za-z0-9\-]/', '', $contents);
        $contents = str_replace("\n", "", $contents);
		$contents = str_replace("\r", "", $contents);
        $contentsArr = explode(',', $contents);
        // return $contentsArr;

        for ($i=5; $i < 15; $i++) { 
	        $contentsArr[$i] = $contentsArr[$i]*100;
        }

        $user = Auth::user();
        $images = $user->images;

        $imageToShow = null;

        foreach ($images as $image) {
            if($image['image_id'] == $image_id) {
                $imageToShow = $image;
                break;
            }
        }

        return view('User.imageClassification')
        ->with(compact('imageToShow'))
        ->with(compact('contentsArr'));
    }
}
