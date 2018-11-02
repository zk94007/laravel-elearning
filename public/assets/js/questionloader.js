var testtimeused=0;
var interval=1;
var timergroupindex = '1';
var runingtimer;
var testtimeSeconds=0;
var actualgroupindex=1;
function loadQuestion(msid,qid)
{
   urli= "/"+msid+"/"+qid;
	$.ajax({
			  type: "post",  
			  url: urli,
			  data: $("#questionform").serialize(),
			  context: document.body
			}).done(function(data) {
				$('#main').html(data);
				new Foundation.Equalizer($('nav'));
				 //OESD.initItemABC();
 				// OESD.initDnD();
				 updateProgressIcon(qid);
				 
				 
		});	
	
}

function startTesttime(timeavailable,groupindex)
{
	//timergroupindex = groupindex;
timergroupindex = 1;
	testtimeSeconds = timeavailable*60;
	realtestime = timeavailable;
	interval = 99/testtimeSeconds;
	testtimeavailable = timeavailable;
	testtimeused=0;
	if (runingtimer == null)
		runingtimer = setInterval(updateTesttime, 1000);

	actualgroupindex=groupindex;
	$('#timer_'+timergroupindex+'_done').addClass('done');
	$('#timer_'+timergroupindex+'_left').addClass('active');
	$('#progressbar').show();
	showProgressIcons();
}

function updateTesttime()
{
	if(testtimeused < 98) {
		//progress bar
		testtimeused = testtimeused+interval;
		testtimeleft= 98-testtimeused;
		$('#timer_'+timergroupindex+'_done').css('width',testtimeused+'%');
		$('#timer_'+timergroupindex+'_left').css('width',testtimeleft+'%');
		// time display
		testtimeSeconds = testtimeSeconds-1;
		testminutes = parseInt(testtimeSeconds/60);
		testseconds = testtimeSeconds-(testminutes*60)
		$('#testtime').html('<b>Testfortschritt:</b> '+testminutes+'min '+testseconds+'s');
	} else { 
		
		clearInterval(runingtimer);
		
		runingtimer=null;
		$('#player')[0].pause();
		//loadQuestion('zb1','result'+actualgroupindex);
		alert('Bei diesem Beispieltest ist die Zeit zum Üben nicht beschränkt. In einer realen Prüfungssituation würde die verfügbare Zeit jetzt ablaufen. D.h., Sie könnten keine Änderungen mehr vornehmen.');

	}
}

function finishTesttime(groupindex)
{
	$('#timer_'+timergroupindex+'_done').css('width',testtimeused+'%');
	$('#timer_'+timergroupindex+'_left').css('width',testtimeleft+'%');
	$('#testtime').html('<b>Testfortschritt:</b> 0 min 0 s');
	runingtimer=null;
}

function confirmLastQuestion(){
	var r = confirm("Das ist die letzte Frage dieses Moduls, wollen Sie dieses Modul abschließen?");
	if (r == true) {
    	window.clearInterval(runingtimer);
    	runingtimer=null;
		//$('#player')[0].pause();
		$('#timer_'+timergroupindex+'_done').css('width','99%');
		$('#timer_'+timergroupindex+'_left').css('width','0%');
		$('#testtime').html('<b>Testfortschritt:</b> 0 min 0 s');
		loadQuestion('zb1','result'+actualgroupindex);
		hideProgressIcons();
	} 
}

function endTest()
{
	var r = confirm("Wenn Sie den Test jetzt Beenden werden keinerlei Daten gespeichert!");
	if (r == true) {
    	location.href="/zb1/end";
	} 
}

function loadMP3()
{
	$(document).ready(function() {
		console.log("hi");
		$('#a1').simpleAudioPlayer({
			title: "jQueryScript.Net: Sample MP3",
			chapters: [
				{
					"title": "Chapter 1",
					"mp3": "/assets/mp3/B1_MH_MS_Teil1_lower.mp3"
				},
				{
					"title": "Chapter 2",
					"mp3": "/assets/mp3/B1_MH_MS_Teil2_lower.mp3"
				},
				{
					"title": "Chapter 3",
					"mp3": "/assets/mp3/B1_MH_MS_Teil3_lower.mp3"
				},
				{
					"title": "Chapter 4",
					"mp3": "/assets/mp3/B1_MH_MS_Teil4_lower.mp3"
				}
			]
		});
	});
}

function startMP3(audiofile)
{
	return;
	//playerstring='<audio loop="loop" autoplay="autoplay" id="player"><source src="/assets/mp3/'+audiofile+'" type="audio/mpeg" /></audio>';

	//$('#audiosrc').attr("src",'/assets/mp3/'+audiofile);
	OESD.initAudioPlayer([
	{
		"name": "Teil 1",
		"url": "/assets/mp3/B1_MH_MS_Teil1_lower.mp3",
	},
	{
		"name": "Teil 2",
		"url": "/assets/mp3/B1_MH_MS_Teil2_lower.mp3",
	},
	{
		"name": "Teil 3",
		"url": "/assets/mp3/B1_MH_MS_Teil3_lower.mp3",
	},
	{
		"name": "Teil 4",
		"url": "/assets/mp3/B1_MH_MS_Teil4_lower.mp3",
	}
	]);
	Amplitude.bindNewElements()
	$('#player').show();
	Amplitude.play();
}
function changeMP3(index)
{
		Amplitude.playNow(Amplitude.getSongAtPlaylistIndex( 0, index ));
}

function showProgressIcons() {
	$('.step-item').removeClass('done');
	$('.steps').show();
	if (actualgroupindex==2) {
		$('#itembox_5').remove();
		$("#itembox_1 > a").attr("onclick","loadQuestion('zb1',8);");
		$("#itembox_2 > a").attr("onclick","loadQuestion('zb1',9);");
		$("#itembox_3 > a").attr("onclick","loadQuestion('zb1',10);");
		$("#itembox_4 > a").attr("onclick","loadQuestion('zb1',11);");
	}
}
function hideProgressIcons(){
	$('.steps').hide();
}
function updateProgressIcon(index) {
	
	
	//$('#itembox_'+index).addClass('done');
	$('.step-item').removeClass('active');
	// korrektur wegen 2mal frage 2
	if (index > 2 && index < 8)
		index = index-1;
	// hören
	if (index > 7)
		index = index -7;
	
	$('#itembox_'+index).addClass('active');
	answerQuestionString=$("#answeredQuestions").val();
	
	
	if(!answerQuestionString)
		return;
	answerQuestionArray=answerQuestionString.split(",");
	$('.step-item').removeClass('done');
	for ( i=0;i < answerQuestionArray.length;i++) 
	{
		$('#itembox_'+answerQuestionArray[i]).addClass('done');
	}
}
