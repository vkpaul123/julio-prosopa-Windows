<?php

namespace App\Http\Controllers;

use App\Featureset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class ImageUploadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showUploadForms()
    {
    	ini_set('upload_max_filesize', '24M');
      	ini_set('post_max_size', '32M');
    	return view('User.uploadImage');
    }

    public function uploadImage(Request $request)
    {
    	$this->validate($request, [
    		'address' => 'required',
    		'districtName' => 'required',
    		'stateName' => 'required'
    	]);
    	$imageType = $request->image_type;
    	$user = Auth::user();
        $imageSampleArr = null;

    	if($imageType == "leaf") {
    		if($request->hasFile('image_leaf')){
    			$imagename = $request->image_leaf->store('public/'.$user->id);
    			$imagename2 = $imagename;

                $imageSampleArr = [
                    'image_id' => $user->id."_".str_replace("public/".$user->id."/", "", $imagename2),
                    'imageType' => $imageType,
                    'address' => $request->address,
                    'districtName' => $request->districtName,
                    'stateName' => $request->stateName,
                    'path' => 'storage/'.str_replace("public/", "", $imagename)
                ];

    			$user->push('images', $imageSampleArr);
                $imagePath = str_replace('/', '\\', $imageSampleArr['path']);
                $imagePath = str_replace('storage\\', 'storage\\app\\public\\', $imagePath);
                $prepareCommand = 'cd "C:\LaravelProject\julio-prosopa\public\matlabScripts";, fea=[1111 testImageValuesFinderFunc(imread(\'C:\\LaravelProject\\julio-prosopa\\'. $imagePath .'\'), \''.Auth::user()->id.'\', \''.$imageSampleArr['image_id'].'\')];, csvwrite(\'C:\\LaravelProject\\julio-prosopa\\storage\\app\\public\\matlabLogFiles\\'.$imageSampleArr['image_id'].'.txt\', fea);, exit';
                // $processMatlab = new Process('start /wait C:\LaravelProject\julio-prosopa\matlabRunner.cmd '. $imageSampleArr['path'] .' '.$imageSampleArr['image_id']);
                $processMatlab = new Process('"C:\Program Files\MATLAB\MATLAB Production Server\R2015a\bin\matlab" -automation -r "'.$prepareCommand.'" -wait');
                $processMatlab->setTimeOut(600);
                $processMatlab->run();

                if(!$processMatlab->isSuccessful())
                    throw new ProcessFailedException($processMatlab);

                $contents = file_get_contents('C:\LaravelProject\julio-prosopa\storage\app\public\matlabLogFiles\\'. $imageSampleArr['image_id'].'.txt');

                $contentsArr = explode(',', $contents);

                $featureset = new Featureset;
                $featureset->image_id = $imageSampleArr['image_id'];
                $featureset->imageClassType = $imageSampleArr['imageType'];
                $featureset->belongsToTrainingSet = false;
                $featureset->autoc = floatval($contentsArr[1]);
                $featureset->contr = floatval($contentsArr[2]);
                $featureset->corrm = floatval($contentsArr[3]);
                $featureset->corrp = floatval($contentsArr[4]);
                $featureset->cprom = floatval($contentsArr[5]);
                $featureset->cshad = floatval($contentsArr[6]);
                $featureset->dissi = floatval($contentsArr[7]);
                $featureset->energ = floatval($contentsArr[8]);
                $featureset->entro = floatval($contentsArr[9]);
                $featureset->homom = floatval($contentsArr[10]);
                $featureset->homop = floatval($contentsArr[11]);
                $featureset->maxpr = floatval($contentsArr[12]);
                $featureset->sosvh = floatval($contentsArr[13]);
                $featureset->savgh = floatval($contentsArr[14]);
                $featureset->svarh = floatval($contentsArr[15]);
                $featureset->senth = floatval($contentsArr[16]);
                $featureset->dvarh = floatval($contentsArr[17]);
                $featureset->denth = floatval($contentsArr[18]);
                $featureset->inf1h = floatval($contentsArr[19]);
                $featureset->inf2h = floatval($contentsArr[20]);
                $featureset->indnc = floatval($contentsArr[21]);
                $featureset->idmnc = floatval($contentsArr[22]);
                $featureset->area = floatval($contentsArr[23]);
                $featureset->majorAxixLength = floatval($contentsArr[24]);
                $featureset->minorAxixLength = floatval($contentsArr[25]);
                $featureset->eccentricity = floatval($contentsArr[26]);
                $featureset->orientation = floatval($contentsArr[27]);
                $featureset->convexArea = floatval($contentsArr[28]);
                $featureset->filledArea = floatval($contentsArr[29]);
                $featureset->equivDiameter = floatval($contentsArr[30]);
                $featureset->solidity = floatval($contentsArr[31]);
                $featureset->extent = floatval($contentsArr[32]);
                $featureset->perimeter = floatval($contentsArr[33]);
                $featureset->perimeterOld = floatval($contentsArr[34]);
                $featureset->result = -1;
                $featureset->save();

    		}
    		else
    			Session::flash('messageFail', '<strong>No Image Uploaded!</strong> Please use <code>Choose file</code> to upload an Image of a Leaf.');
    	} elseif ($imageType == "thorn") {
    		if($request->hasFile('image_thorn')){
    			$imagename = $request->image_thorn->store('public/'.$user->id);
    			$imagename2 = $imagename;

    			$imageSampleArr = [
                    'image_id' => $user->id."_".str_replace("public/".$user->id."/", "", $imagename2),
                    'imageType' => $imageType,
                    'address' => $request->address,
                    'districtName' => $request->districtName,
                    'stateName' => $request->stateName,
                    'path' => 'storage/'.str_replace("public/", "", $imagename)
                ];

                $user->push('images', $imageSampleArr);
                $imagePath = str_replace('/', '\\', $imageSampleArr['path']);
                $imagePath = str_replace('storage\\', 'storage\\app\\public\\', $imagePath);
                $prepareCommand = 'cd "C:\LaravelProject\julio-prosopa\public\matlabScripts";, fea=[1111 testImageValuesFinderFunc(imread(\'C:\\LaravelProject\\julio-prosopa\\'. $imagePath .'\'))];, csvwrite(\'C:\\LaravelProject\\julio-prosopa\\storage\\app\\public\\matlabLogFiles\\'.$imageSampleArr['image_id'].'.txt\', fea);, exit';
                // $processMatlab = new Process('start /wait C:\LaravelProject\julio-prosopa\matlabRunner.cmd '. $imageSampleArr['path'] .' '.$imageSampleArr['image_id']);
                $processMatlab = new Process('"C:\Program Files\MATLAB\MATLAB Production Server\R2015a\bin\matlab" -automation -r "'.$prepareCommand.'" -wait');
                $processMatlab->setTimeOut(600);
                $processMatlab->run();

                if(!$processMatlab->isSuccessful())
                    throw new ProcessFailedException($processMatlab);

                $contents = file_get_contents('C:\LaravelProject\julio-prosopa\storage\app\public\matlabLogFiles\\'. $imageSampleArr['image_id'].'.txt');

                $contentsArr = explode(',', $contents);

                $featureset = new Featureset;
                $featureset->image_id = $imageSampleArr['image_id'];
                $featureset->imageClassType = $imageSampleArr['imageType'];
                $featureset->belongsToTrainingSet = false;
                $featureset->autoc = floatval($contentsArr[1]);
                $featureset->contr = floatval($contentsArr[2]);
                $featureset->corrm = floatval($contentsArr[3]);
                $featureset->corrp = floatval($contentsArr[4]);
                $featureset->cprom = floatval($contentsArr[5]);
                $featureset->cshad = floatval($contentsArr[6]);
                $featureset->dissi = floatval($contentsArr[7]);
                $featureset->energ = floatval($contentsArr[8]);
                $featureset->entro = floatval($contentsArr[9]);
                $featureset->homom = floatval($contentsArr[10]);
                $featureset->homop = floatval($contentsArr[11]);
                $featureset->maxpr = floatval($contentsArr[12]);
                $featureset->sosvh = floatval($contentsArr[13]);
                $featureset->savgh = floatval($contentsArr[14]);
                $featureset->svarh = floatval($contentsArr[15]);
                $featureset->senth = floatval($contentsArr[16]);
                $featureset->dvarh = floatval($contentsArr[17]);
                $featureset->denth = floatval($contentsArr[18]);
                $featureset->inf1h = floatval($contentsArr[19]);
                $featureset->inf2h = floatval($contentsArr[20]);
                $featureset->indnc = floatval($contentsArr[21]);
                $featureset->idmnc = floatval($contentsArr[22]);
                $featureset->area = floatval($contentsArr[23]);
                $featureset->majorAxixLength = floatval($contentsArr[24]);
                $featureset->minorAxixLength = floatval($contentsArr[25]);
                $featureset->eccentricity = floatval($contentsArr[26]);
                $featureset->orientation = floatval($contentsArr[27]);
                $featureset->convexArea = floatval($contentsArr[28]);
                $featureset->filledArea = floatval($contentsArr[29]);
                $featureset->equivDiameter = floatval($contentsArr[30]);
                $featureset->solidity = floatval($contentsArr[31]);
                $featureset->extent = floatval($contentsArr[32]);
                $featureset->perimeter = floatval($contentsArr[33]);
                $featureset->perimeterOld = floatval($contentsArr[34]);
                $featureset->result = -1;
                $featureset->save();
    		}
    		else
    			Session::flash('messageFail', '<strong>No Image Uploaded!</strong> Please use <code>Choose file</code> to upload an Image of a Thorn.');
    	} elseif($imageType == "bud") {
    		if($request->hasFile('image_bud')){
    			$imagename = $request->image_bud->store('public/'.$user->id);
    			$imagename2 = $imagename;

    			$imageSampleArr = [
                    'image_id' => $user->id."_".str_replace("public/".$user->id."/", "", $imagename2),
                    'imageType' => $imageType,
                    'address' => $request->address,
                    'districtName' => $request->districtName,
                    'stateName' => $request->stateName,
                    'path' => 'storage/'.str_replace("public/", "", $imagename)
                ];

                $user->push('images', $imageSampleArr);
                $imagePath = str_replace('/', '\\', $imageSampleArr['path']);
                $imagePath = str_replace('storage\\', 'storage\\app\\public\\', $imagePath);
                $prepareCommand = 'cd "C:\LaravelProject\julio-prosopa\public\matlabScripts";, fea=[1111 testImageValuesFinderFunc(imread(\'C:\\LaravelProject\\julio-prosopa\\'. $imagePath .'\'))];, csvwrite(\'C:\\LaravelProject\\julio-prosopa\\storage\\app\\public\\matlabLogFiles\\'.$imageSampleArr['image_id'].'.txt\', fea);, exit';
                // $processMatlab = new Process('start /wait C:\LaravelProject\julio-prosopa\matlabRunner.cmd '. $imageSampleArr['path'] .' '.$imageSampleArr['image_id']);
                $processMatlab = new Process('"C:\Program Files\MATLAB\MATLAB Production Server\R2015a\bin\matlab" -automation -r "'.$prepareCommand.'" -wait');
                $processMatlab->setTimeOut(600);
                $processMatlab->run();

                if(!$processMatlab->isSuccessful())
                    throw new ProcessFailedException($processMatlab);

                $contents = file_get_contents('C:\LaravelProject\julio-prosopa\storage\app\public\matlabLogFiles\\'. $imageSampleArr['image_id'].'.txt');

                $contentsArr = explode(',', $contents);

                $featureset = new Featureset;
                $featureset->image_id = $imageSampleArr['image_id'];
                $featureset->imageClassType = $imageSampleArr['imageType'];
                $featureset->belongsToTrainingSet = false;
                $featureset->autoc = floatval($contentsArr[1]);
                $featureset->contr = floatval($contentsArr[2]);
                $featureset->corrm = floatval($contentsArr[3]);
                $featureset->corrp = floatval($contentsArr[4]);
                $featureset->cprom = floatval($contentsArr[5]);
                $featureset->cshad = floatval($contentsArr[6]);
                $featureset->dissi = floatval($contentsArr[7]);
                $featureset->energ = floatval($contentsArr[8]);
                $featureset->entro = floatval($contentsArr[9]);
                $featureset->homom = floatval($contentsArr[10]);
                $featureset->homop = floatval($contentsArr[11]);
                $featureset->maxpr = floatval($contentsArr[12]);
                $featureset->sosvh = floatval($contentsArr[13]);
                $featureset->savgh = floatval($contentsArr[14]);
                $featureset->svarh = floatval($contentsArr[15]);
                $featureset->senth = floatval($contentsArr[16]);
                $featureset->dvarh = floatval($contentsArr[17]);
                $featureset->denth = floatval($contentsArr[18]);
                $featureset->inf1h = floatval($contentsArr[19]);
                $featureset->inf2h = floatval($contentsArr[20]);
                $featureset->indnc = floatval($contentsArr[21]);
                $featureset->idmnc = floatval($contentsArr[22]);
                $featureset->area = floatval($contentsArr[23]);
                $featureset->majorAxixLength = floatval($contentsArr[24]);
                $featureset->minorAxixLength = floatval($contentsArr[25]);
                $featureset->eccentricity = floatval($contentsArr[26]);
                $featureset->orientation = floatval($contentsArr[27]);
                $featureset->convexArea = floatval($contentsArr[28]);
                $featureset->filledArea = floatval($contentsArr[29]);
                $featureset->equivDiameter = floatval($contentsArr[30]);
                $featureset->solidity = floatval($contentsArr[31]);
                $featureset->extent = floatval($contentsArr[32]);
                $featureset->perimeter = floatval($contentsArr[33]);
                $featureset->perimeterOld = floatval($contentsArr[34]);
                $featureset->result = -1;
                $featureset->save();
    		}
    		else
    			Session::flash('messageFail', '<strong>No Image Uploaded!</strong> Please use <code>Choose file</code> to upload an Image of a Bud.');
    	}

		return Response::json(['ok'=>'stored', 'imageSampleArr'=>$imageSampleArr], 201);
    }

    public function getImageDetails($image_id)
    {
        $user = Auth::user();
        $images = $user->images;

        $imageToShow = null;

        foreach ($images as $image) {
            if($image['image_id'] == $image_id) {
                $imageToShow = $image;
                break;
            }
        }

        $featuresetVals = Featureset::where('image_id', $image_id)->get()->first();

        return view('User.imageDetails')
        ->with(compact('imageToShow'))
        ->with(compact('featuresetVals'));
    }
}
