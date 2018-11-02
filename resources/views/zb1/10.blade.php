<!-- NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
<form id="questionform" >
<input name="questionid" type="hidden" value="10" />
<input name="answeredQuestions" type="hidden" id="answeredQuestions" value="<?php echo $viewHelper->getItemsCompleteAnswered('h'); ?>" />

	{{ csrf_field() }}
      <nav data-equalizer>
          
        <div id="instructions" class="" data-equalizer-watch>
          <h5><b>Teil 3</b> <span class="estimated-time">Arbeitszeit: 60 Sekunden</span></h5>
          <p>Sie hören nun ein Gespräch. Sie hören das Gespräch <b>einmal</b>. Dazu lösen Sie sieben Aufgaben.<br>Wählen Sind :
      	<input type='checkbox' name='chkbx' value='' id="chkbx1" disabled/><label for="chkbx1">Richtig</label> oder 
      	<input type='checkbox' name='chkbx' value='' id="chkbx2" disabled/><label for="chkbx2">Falsch</label>?<br>
            Lesen Sie jetzt die Aufgaben 16 bis 22. Dazu haben Sie 60 Sekunden Zeit.<br> <br> 
            <small><i>Sie sind an einer Bushaltestelle und hören, wie sich ein Mann und eine Frau über ein Fest unterhalten.</i></small>
          </p>
        </div>
        <a onClick="loadQuestion('zb1',9);" class="nav-button prev" data-equalizer-watch>
          <i class="fa fa-angle-left fa-2x"></i>
        </a>
        <a onClick="loadQuestion('zb1',11);" class="nav-button next" data-equalizer-watch>
          <i class="fa fa-angle-right fa-2x"></i>
        </a>
      </nav>
      <!-- //NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
    
      <!-- CONTENT SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
<section id="content" data-equalizer>
        <div class="top" data-equalizer-watch>
        	<div class="section-title"><h5></h5></div>
        </div>
        <div class="bottom" data-equalizer-watch>
        	<div class="section-title"><h5></h5></div>
            	<div class="item item-true-false">
        		<div class="number">16</div>
        		<div class="question">Bei dem Fest wurde der Geburtstag von Annas Mann gefeiert.</div>
        		<div class="true"><input type='checkbox' name='h_16_richtig' {{ $viewHelper->getCheckedString('h_16_richtig') }} value='1' id="chkbx16r"/><label for="chkbx16r">Richtig</label></div>
        		<div class="false"><input type='checkbox' name='h_16_falsch' {{ $viewHelper->getCheckedString('h_16_falsch') }} value='1' id="chkbx16f"/><label for="chkbx16f">Falsch</label></div>
        	</div>
        	<div class="item item-true-false">
        		<div class="number">17</div>
        		<div class="question">Nadia ist vom Haus der Gastgeber begeistert.</div>
						<div class="true"><input type='checkbox' name='h_17_richtig' {{ $viewHelper->getCheckedString('h_17_richtig') }} value='1' id="chkbx17r"/><label for="chkbx17r">Richtig</label></div>
        		<div class="false"><input type='checkbox' name='h_17_falsch' {{ $viewHelper->getCheckedString('h_17_falsch') }} value='1' id="chkbx17f"/><label for="chkbx17f">Falsch</label></div>
        	</div>
        	<div class="item item-true-false">
        		<div class="number">18</div>
        		<div class="question">Nadia arbeitet beim Fernsehen.</div>
						<div class="true"><input type='checkbox' name='h_18_richtig' {{ $viewHelper->getCheckedString('h_18_richtig') }} value='1' id="chkbx18r"/><label for="chkbx18r">Richtig</label></div>
        		<div class="false"><input type='checkbox' name='h_18_falsch' {{ $viewHelper->getCheckedString('h_18_falsch') }} value='1' id="chkbx18f"/><label for="chkbx18f">Falsch</label></div>
        	</div>
        	<div class="item item-true-false">
        		<div class="number">19</div>
        		<div class="question">Das Essen war ausgezeichnet.</div>
						<div class="true"><input type='checkbox' name='h_19_richtig' {{ $viewHelper->getCheckedString('h_19_richtig') }} value='1' id="chkbx19r"/><label for="chkbx19r">Richtig</label></div>
        		<div class="false"><input type='checkbox' name='h_19_falsch' {{ $viewHelper->getCheckedString('h_19_falsch') }} value='1' id="chkbx19f"/><label for="chkbx19f">Falsch</label></div>
        	</div>
        	<div class="item item-true-false">
        		<div class="number">20</div>
        		<div class="question">Nadia hat zusammen mit dem Musiker gespielt.</div>
						<div class="true"><input type='checkbox' name='h_20_richtig' {{ $viewHelper->getCheckedString('h_20_richtig') }} value='1' id="chkbx20r"/><label for="chkbx20r">Richtig</label></div>
        		<div class="false"><input type='checkbox' name='h_20_falsch' {{ $viewHelper->getCheckedString('h_20_falsch') }} value='1' id="chkbx20f"/><label for="chkbx20f">Falsch</label></div>
        	</div>
        	<div class="item item-true-false">
        		<div class="number">21</div>
        		<div class="question">Nadia hat auch Jazz gespielt.</div>
						<div class="true"><input type='checkbox' name='h_21_richtig' {{ $viewHelper->getCheckedString('h_21_richtig') }} value='1' id="chkbx21r"/><label for="chkbx21r">Richtig</label></div>
        		<div class="false"><input type='checkbox' name='h_21_falsch' {{ $viewHelper->getCheckedString('h_21_falsch') }} value='1' id="chkbx21f"/><label for="chkbx21f">Falsch</label></div>
        	</div>
      		<div class="item item-true-false">
        		<div class="number">22</div>
        		<div class="question">Das Fest dauerte bis nach 12 Uhr nachts.</div>
 						<div class="true"><input type='checkbox' name='h_22_richtig' {{ $viewHelper->getCheckedString('h_22_richtig') }} value='1' id="chkbx22r"/><label for="chkbx22r">Richtig</label></div>
        		<div class="false"><input type='checkbox' name='h_22_falsch' {{ $viewHelper->getCheckedString('h_22_falsch') }} value='1' id="chkbx22f"/><label for="chkbx22f">Falsch</label></div>
        	</div>
      </section>
 </form>