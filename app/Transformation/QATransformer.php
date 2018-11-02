<?php

namespace App\Transformation;
use App\DTO\Question;
use App\DTO\Testdata;
use App\DTO\Item;

use Illuminate\Http\Request;

class QATransformer 
{
	
    public function transformRequestObjectsToAnswerObjects($requestData) {
    	$question = new Question();
    	
    	$question->id=$requestData['questionid'];
    	foreach ($requestData as $rawKey => $rawAnswer) {
    		//var_dump($rawKey);
    		$item = new Item();
    		$parts= explode("_", $rawKey);
    		if (count($parts) == 3) {
    			$item->group = $parts[0];
    			$item->itemId = $parts[1];
    			if($parts[2] == 'select'){
    				$item->answer = $rawAnswer;
    				
    			}	
    			else{
    				$item->answer = $parts[2];
    				
    			}	
    			$question->items[$item->group.'_'.$item->itemId.'_'.$item->answer] = $item;	
    			
    		}
    	}
    	return $question;
    }
    
    public function addQuestionDataToTestData($testdata,$questionData) {
    	if($testdata) {
    		$testdata->name='zb1';
    		$testdata->questions[$questionData->id] = null;
    		$testdata->questions[$questionData->id] = $questionData;
    		return $testdata;
    	}
    	else {
    		$testdata = new Testdata();
    		$testdata->name='zb1';
    		$testdata->questions[$questionData->id] = $questionData;
    		return $testdata;
    	}
    }
}

