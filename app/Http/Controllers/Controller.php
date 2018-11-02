<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\DTO\Questions;
use App\DTO\Item;
use App\Transformation\QATransformer;
use App\Transformation\ViewHelper;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function start()
    {
        return view('zb1/start', ['user' => 'test','formdata'=>'empty']);
    }
    
    public function end(Request $request)
    {
    	$request->session()->put('zb1','');

		$request->session()->flush();
        return redirect('/zb1/0');
    }
    
    public function show(Request $request,$msid,$nextid)
    {
    	$viewHelper = new ViewHelper();
    	if( $request->input('questionid')) {
    		//var_dump($request->all());
    		$transformer = new QATransformer();
    		$questionData = $transformer->transformRequestObjectsToAnswerObjects($request->all());
    		$testData = $transformer->addQuestionDataToTestData($request->session()->get('zb1', null),$questionData);
    		
    		//$request->session()->get('key', 'default');
    		$request->session()->put('zb1', $testData);
    		if ($nextid != '0' && isset($testData->questions[$nextid]))
    			$viewHelper->setQuestionObject($testData->questions[$nextid]);

			//var_dump($viewHelper);
		} else if ($nextid != '0' ) {
			if($request->session()->get('zb1')){
				$testData = $request->session()->get('zb1');
				if(isset($testData->questions[$nextid]))
					$viewHelper->setQuestionObject($testData->questions[$nextid]);
			}
			
		}
		if($request->session()->get('zb1')) {
			//var_dump($request->session()->get('zb1'));
			$viewHelper->setAllResults($request->session()->get('zb1'));
		}
        return view($msid.'/'.$nextid, ['user' => 'test','viewHelper'=>$viewHelper]);
    }
}
