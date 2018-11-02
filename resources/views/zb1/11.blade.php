<!-- NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
<style>
.rotator {

    /* Rotate div 
    -ms-transform: rotate(-50deg);  
    -webkit-transform: rotate(-50deg); 
    transform: rotate(-50deg);
    color:black; */
    
}
</style>
<form id="questionform" >
<input name="questionid" type="hidden" value="11" />
<input name="answeredQuestions" type="hidden" id="answeredQuestions" value="<?php echo $viewHelper->getItemsCompleteAnswered('h'); ?>" />

	{{ csrf_field() }}
      <nav data-equalizer>
          
        <div id="instructions" class="" data-equalizer-watch>
          <h5><b>Teil 4</b> <span class="estimated-time">Arbeitszeit: 60 Sekunden</span></h5>
          <p>Sie hören nun eine Diskussion. Sie hören die Diskussion <b>zweimal</b>. Dazu lösen Sie acht Aufgaben.<br>Ordnen Sie die Aussagen zu:<b> Wer sagt was?</b><br>
            Lesen Sie jetzt die Aufgaben 23 bis 30. Dazu haben Sie 60 Sekunden Zeit.<br><br>
            <small><i>Der Moderator der Radiosendung „Diskussion am Abend“ diskutiert mit den Eltern Dana Schneider und Florian Bader zum Thema „Sollen kleine Kinder in die Kinderkrippe gehen?“</i></small>
          </p>
        </div>
       <a onClick="loadQuestion('zb1',10);" class="nav-button prev" data-equalizer-watch>
          <i class="fa fa-angle-left fa-2x"></i>
        </a>
        <a onClick="confirmLastQuestion(2);$('#player').remove();" class="nav-button next" data-equalizer-watch>
          <i class="fa fa-angle-right fa-2x"></i>
        </a>
      </nav>
      <!-- //NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
    
      <!-- CONTENT SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
				<section id="content" data-equalizer>
        	<div class="top" data-equalizer-watch>
        		<div class="section-title item-a-b-c"><h5></h5>
        		</div> 
        	</div>
        			
        			<div class="example">
        				<div class="item item-a-b-c">
        					<div class="number lead">Beispiel</div>
        					<div class="question">&nbsp;</div>
        					<div class="rotator">Moderator|Dana Schneider|Florian Bader</div>
        				</div>
        				<div class="item item-a-b-c">
        					<div class="number">0</div>
        					<div class="question">Für kleine Kinder sind die ersten drei Jahre sehr wichtig.</div>
        					<input type='checkbox' name='chkbx' value='' id="chkbx1" disabled/><label class="large" for="chkbx1">a</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            				<input type='checkbox' class="large" name='chkbx' value='' id="chkbx2" disabled checked/><label class="large" for="chkbx2">b</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            				<input type='checkbox' class="large" name='chkbx' value='' id="chkbx3" disabled/><label class="large" for="chkbx3">c</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        				</div>
        		</div>
        	<div class="item item-a-b-c">
        		<div class="number">23</div>
        		<div class="question">Kinder lernen soziales Verhalten erst ab einem bestimmten Alter.</div>
						<input type="checkbox" name='h_23_a' {{ $viewHelper->getCheckedString('h_23_a') }} value='1' id="chkbx23a"/><label for="chkbx23a" class="large">a</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            			<input type="checkbox" name='h_23_b' {{ $viewHelper->getCheckedString('h_23_b') }} value='1' id="chkbx23b"/><label for="chkbx23b" class="large">b</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            			<input type="checkbox" name='h_23_c' {{ $viewHelper->getCheckedString('h_23_c') }} value='1' id="chkbx23c"/><label for="chkbx23c" class="large">c</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	</div>
        	<div class="item item-a-b-c">
        		<div class="number">24</div>
        		<div class="question">Für den Erfolg im Beruf ist es wichtig, immer zu arbeiten.</div>
						<input type="checkbox" name='h_24_a' {{ $viewHelper->getCheckedString('h_24_a') }} value='1' id="chkbx24a"/><label for="chkbx24a" class="large">a</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" name='h_24_b' {{ $viewHelper->getCheckedString('h_24_b') }} value='1' id="chkbx24b"/><label for="chkbx24b" class="large">b</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" name='h_24_c' {{ $viewHelper->getCheckedString('h_24_c') }} value='1' id="chkbx24c"/><label for="chkbx24c" class="large">c</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	</div>
        	<div class="item item-a-b-c">
        		<div class="number">25</div>
        		<div class="question">Es ist möglich, Kinder zu haben und auch zu arbeiten.</div>
 						<input type="checkbox" name='h_25_a' {{ $viewHelper->getCheckedString('h_25_a') }} value='1' id="chkbx25a"/><label for="chkbx25a" class="large">a</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" name='h_25_b' {{ $viewHelper->getCheckedString('h_25_b') }} value='1' id="chkbx25b"/><label for="chkbx25b" class="large">b</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" name='h_25_c' {{ $viewHelper->getCheckedString('h_25_c') }} value='1' id="chkbx25c"/><label for="chkbx25c" class="large">c</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	</div>
        	<div class="item item-a-b-c">
        		<div class="number">26</div>
        		<div class="question">In der Krippe lernen Kinder andere Dinge als zu Hause.</div>
						<input type="checkbox" name='h_26_a' {{ $viewHelper->getCheckedString('h_26_a') }} value='1' id="chkbx26a"/><label for="chkbx26a" class="large">a</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" name='h_26_b' {{ $viewHelper->getCheckedString('h_26_b') }} value='1' id="chkbx26b"/><label for="chkbx26b" class="large">b</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" name='h_26_c' {{ $viewHelper->getCheckedString('h_26_c') }} value='1' id="chkbx26c"/><label for="chkbx26c" class="large">c</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	</div>
        	<div class="item item-a-b-c">
        		<div class="number">27</div>
        		<div class="question">In Krippen müssen Erzieherinnen viele Kinder gleichzeitig betreuen.</div>
 						<input type="checkbox" name='h_27_a' {{ $viewHelper->getCheckedString('h_27_a') }} value='1' id="chkbx27a"/><label for="chkbx27a" class="large">a</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" name='h_27_b' {{ $viewHelper->getCheckedString('h_27_b') }} value='1' id="chkbx27b"/><label for="chkbx27b" class="large">b</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" name='h_27_c' {{ $viewHelper->getCheckedString('h_27_c') }} value='1' id="chkbx27c"/><label for="chkbx27c" class="large">c</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	</div>
        	<div class="item item-a-b-c">
        		<div class="number">28</div>
        		<div class="question">Kinder sollen lernen, sich auch mal alleine zu beschäftigen.</div>
						<input type="checkbox" name='h_28_a' {{ $viewHelper->getCheckedString('h_28_a') }} value='1' id="chkbx28a"/><label for="chkbx28a" class="large">a</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" name='h_28_b' {{ $viewHelper->getCheckedString('h_28_b') }} value='1' id="chkbx28b"/><label for="chkbx28b" class="large">b</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" name='h_28_c' {{ $viewHelper->getCheckedString('h_28_c') }} value='1' id="chkbx28c"/><label for="chkbx28c" class="large">c</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	</div>
        <div class="item item-a-b-c">
        		<div class="number">29</div>
        		<div class="question">Manche Kindertagesstätten haben zu wenig Geld.</div>
        		<input type="checkbox" name='h_29_a' {{ $viewHelper->getCheckedString('h_29_a') }} value='1' id="chkbx29a"/><label for="chkbx29a" class="large">a</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" name='h_29_b' {{ $viewHelper->getCheckedString('h_29_b') }} value='1' id="chkbx29b"/><label for="chkbx29b" class="large">b</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" name='h_29_c' {{ $viewHelper->getCheckedString('h_29_c') }} value='1' id="chkbx29c"/><label for="chkbx29c" class="large">c</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	</div>
        		<div class="item item-a-b-c">
        		<div class="number">30</div>
        		<div class="question">Auch Familien mit wenig Geld sollen Kinder haben können.</div>
 						<input type="checkbox" name='h_30_a' {{ $viewHelper->getCheckedString('h_30_a') }} value='1' id="chkbx30a"/><label for="chkbx30a" class="large">a</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" name='h_30_b' {{ $viewHelper->getCheckedString('h_30_b') }} value='1' id="chkbx30b"/><label for="chkbx30b" class="large">b</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" name='h_30_c' {{ $viewHelper->getCheckedString('h_30_c') }} value='1' id="chkbx30c"/><label for="chkbx30c" class="large">c</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	</div>
      </section>
 </form>