<?php
// This Class reads the expected values for the test from result.csv and compares them
// with the results stored in the session cookie of the user

namespace App\Transformation;
use App\DTO\Question;
use App\DTO\Testdata;
use App\DTO\Item;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ViewHelper
{
	private $questionObject;
	private $allQuestionResults;
	// string input helper
    public function getCheckedString($searchstring) {
    		if (isset($this->questionObject->items[$searchstring])) {
    				echo 'checked';
    		} else {
    				echo '';
    		}
    }
    //string input helper
    public function getSelectedString($searchstring) {
    		if (isset($this->questionObject->items[$searchstring])) {
    				echo 'selected';
    		} else {
    				echo 'aaa';
    		}
    }
    // generates the dropdown list
    public function generateSelectAndSelectIt($itemid) {
    	$returnstring='';
    	$vals=['_','a','b','c','d','e','f','g','h','i','j','0'];
    	foreach($vals as $val) {
    		$selectstring = '';
    		if (isset($this->questionObject->items[$itemid.'_'.$val])) {
    			$selectstring = 'selected';
    		}
    		
    		$returnstring=$returnstring.'<option value="'.$val.'" '.$selectstring.'>'.$val.'</option>';
    	}
    	echo $returnstring;
    }
    
    public function setQuestionObject($qO) {
    	$this->questionObject = $qO;
    }
    public function setAllResults($all){
    	$this->allQuestionResults=$all;
    }
    
    public function calculateAndDisplayTestResult($filtergroup) {

    	$row = 1;
    	$realResults=$this->getResultsClone($filtergroup);
    	//var_dump($realResults);
    	$Data = str_getcsv(Storage::disk('public')->get('results.csv'), "\n"); //parse the rows 
    	
		foreach($Data as &$Row)  {
			$lineArray = str_getcsv($Row, ","); 
			$combinedName=$lineArray[0].'_'.$lineArray[1].'_'.$lineArray[2];
			$rightResults[$combinedName] = 	$lineArray;
		}
		$resultArray=array();
					//go thrue answers add to result array and remove
		
					foreach($realResults as $itemkey => $item) {
						
						foreach((array)$rightResults as $resitemkey => $resitem) {
							if($itemkey == $resitemkey) {
								$resultArray[$item->itemId]=1;
								unset($realResults[$resitemkey]);
							}
						}
					}
	
					//now check the items left and remove from resultArray
					foreach($realResults as $itemkey => $item) {
						
						foreach((array)$resultArray as $resitemkey => $resitem) {
							if( $item->itemId == $resitemkey) {
								unset($resultArray[$item->itemId]);
							}
						}
					}
		
		//Sum Points
		$allpoints=0;
		foreach((array)$resultArray as $resitemkey => $resitem) {
							$allpoints=$allpoints+1;
		}
		
		$points = $this->transformPoints($allpoints);
		// store the result
		$this->storeResultForStatistics($filtergroup,$points,$realResults);
		return $points;
    }
    
    public function getResultsClone($filtergroup){
    	$tempTestData =array();
    	foreach($this->allQuestionResults->questions as $question) {
    		foreach((array)$question->items as $itemkey=>$item)
    			if(isset($item->group) && $item->group == $filtergroup)
    				$tempTestData[$itemkey] = clone $item;
    	}
    	return $tempTestData;
    	
    }
    public function transformPoints($points)
    {
    	return round($points*3.33, 0, PHP_ROUND_HALF_UP);
    }
    
    public function getItemsCompleteAnswered($filter){
    	if (!isset($this->allQuestionResults))
    		return null;
    	
    	if($filter == 'l')
    		return $this->getItemsCompleteAnsweredReading('l');
    	else 
    		return $this->getItemsCompleteAnsweredListening('h');
    }
    
    // get Reading Data for Item boxes
    public function getItemsCompleteAnsweredReading($filter){
    	
    	$realResults=$this->getResultsClone($filter);
    	$answeredQuestionIds=array();
		$answersExpectedCount=$this->getAnswersExpectedCountReading();
    	// got thru all question ids and only check if the questionid is existing
    	// unfortunatly there were 4 excuses in the numbering which needed to be fixed
    	$alreadyCheckedIds=array();
    	foreach($realResults as $itemkey => $item) {
    		$actualQuestionid=$item->itemId;		
    		if($actualQuestionid <= 6 && !isset($alreadyCheckedIds[$actualQuestionid]) ) {
    			$answersExpectedCount[1]=$answersExpectedCount[1]-1;
    		}
    		else if($actualQuestionid <= 12 && !isset($alreadyCheckedIds[$actualQuestionid])) {
    			$answersExpectedCount[2]=$answersExpectedCount[2]-1;
    		}
    		else if($actualQuestionid <= 19 && !isset($alreadyCheckedIds[$actualQuestionid])&& $item->answer != '_') {
    			$answersExpectedCount[3]=$answersExpectedCount[3]-1;
    		}
    		else if($actualQuestionid <= 26 && !isset($alreadyCheckedIds[$actualQuestionid])&& $item->answer != '_') {
    			$answersExpectedCount[4]=$answersExpectedCount[4]-1;
    		}
    		else if($actualQuestionid <= 30 && !isset($alreadyCheckedIds[$actualQuestionid])&& $item->answer != '_') {
    			$answersExpectedCount[5]=$answersExpectedCount[5]-1;
    		}
    		$alreadyCheckedIds[$actualQuestionid]=true;
    	}
    	
    	$questionArrayString="";
    	foreach ($answersExpectedCount as $questionIndex => $questionsOpen) {
    		if($questionsOpen == 0) {
    			$questionArrayString=$questionArrayString.$questionIndex.",";
    		}
    	
    	}
    	return $questionArrayString;
    }
    
    public function getAnswersExpectedCountReading(){
    	$answersExpected=array();
    	$answersExpected[1]=6;
    	$answersExpected[2]=6;
    	$answersExpected[3]=7;
    	$answersExpected[4]=7;
    	$answersExpected[5]=4;
    	return $answersExpected;
    }
    
    // get Reading Data for Item boxes
    public function getItemsCompleteAnsweredListening($filter){
    	
    	$realResults=$this->getResultsClone($filter);
    	$answeredQuestionIds=array();
		$answersExpectedCount=$this->getAnswersExpectedCountListening();
    	// got thru all question ids and only check if the questionid is existing
    	$alreadyCheckedIds=array();
    	foreach($realResults as $itemkey => $item) {
    		$actualQuestionid=$item->itemId;		
    		if($actualQuestionid <= 10 && !isset($alreadyCheckedIds[$actualQuestionid]) ) {
    			$answersExpectedCount[1]=$answersExpectedCount[1]-1;
    		}
    		else if($actualQuestionid <= 15 && !isset($alreadyCheckedIds[$actualQuestionid])) {
    			$answersExpectedCount[2]=$answersExpectedCount[2]-1;
    		}
    		else if($actualQuestionid <= 22 && !isset($alreadyCheckedIds[$actualQuestionid])) {
    			$answersExpectedCount[3]=$answersExpectedCount[3]-1;
    		}
    		else if($actualQuestionid <= 30 && !isset($alreadyCheckedIds[$actualQuestionid])) {
    			$answersExpectedCount[4]=$answersExpectedCount[4]-1;
    		}
    		else if($actualQuestionid <= 30 && !isset($alreadyCheckedIds[$actualQuestionid])) {
    			$answersExpectedCount[5]=$answersExpectedCount[5]-1;
    		}
    		$alreadyCheckedIds[$actualQuestionid]=true;
    	}
    	
    	
    	$questionArrayString="";
    	foreach ($answersExpectedCount as $questionIndex => $questionsOpen) {
    		if($questionsOpen == 0) {
    			$questionArrayString=$questionArrayString.$questionIndex.",";
    		}
    	
    	}
    	return $questionArrayString;
    }
    
    public function getAnswersExpectedCountListening(){
    	$answersExpected=array();
    	$answersExpected[1]=10;
    	$answersExpected[2]=5;
    	$answersExpected[3]=7;
    	$answersExpected[4]=8;
    	return $answersExpected;
    }
    
    public function storeResultForStatistics($filtergroup,$points,$realResults) {
		$StatFile = fopen('./laravel_src/storage/app/public/statistics.csv','a');
		flock($StatFile, LOCK_EX);
			fwrite($StatFile, date('Y-m-d H:i:s').','.$filtergroup.','.$points."\n");
			flock($StatFile, LOCK_UN);
		fclose($StatFile);
	}
    
}

