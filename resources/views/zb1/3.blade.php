<!-- NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
<form id="questionform" >
<input name="questionid" type="hidden" value="3" />
<input name="answeredQuestions" type="hidden" id="answeredQuestions" value="<?php echo $viewHelper->getItemsCompleteAnswered('l'); ?>" />

	{{ csrf_field() }}
      <nav data-equalizer>
          
        <div id="instructions" class="" data-equalizer-watch>
          <h5>noch Teil 2</h5>
          <p>
            Lesen Sie den Text und die Aufgaben 10 bis 12 dazu.<br>
            Wählen Sie bei jeder Aufgabe die richtige Lösung 
            <input type='checkbox' name='chkbx' value='' id="chkbx1" disabled/><label class="small" for="chkbx1">a</label>, 
            <input type='checkbox' class="small" name='chkbx' value='' id="chkbx2" disabled/><label class="small" for="chkbx2">b</label> oder 
            <input type='checkbox' class="small" name='chkbx' value='' id="chkbx3" disabled/><label class="small" for="chkbx3">c</label>
          </p>
        </div>
        <a onClick="loadQuestion('zb1',2);" class="nav-button prev" data-equalizer-watch>
          <i class="fa fa-angle-left fa-2x"></i>
        </a>
        <a onClick="loadQuestion('zb1',4);" class="nav-button next" data-equalizer-watch>
          <i class="fa fa-angle-right fa-2x"></i>
        </a>
      </nav>
      <!-- //NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
    
      <!-- CONTENT SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
      <section id="content" data-equalizer>
        <div class="left" data-equalizer-watch>
        	<div class="section-title"><h5></h5></div>
        	<div class="newspaper">
        		<div class="title">Tour durch Murtens Geschichte</div>
        		<p class="no-highlight">Mit der Rundfahrt „Zeitreise per Velo*“ können Touristen das Städtchen Murten und seine Geschichte sportlich neu entdecken.</p>
        		<p><div style="text-align: justify">Die Tour startet am Bahnhof von Murten, wo die sportlichen 
Teilnehmer auf das eigene oder ein gemietetes Velo steigen. Die weniger sportlichen und jene, die es schon 
immer ausprobieren wollten, steigen aufs Elektro-Velo. Dieses kann ebenfalls am Bahnhof gemietet werden.<br>
Vom Bahnhof führt der Weg auf den historischen Hügel, wo Karl der Kühne sein Hauptquartier aufbaute, bevor 
sein Heer im Jahr 1476 besiegt wurde. Die Sportlichen kommen bei der Fahrt auf den Hügel ins Schwitzen, 
während die E-Biker ganz einfach den Elektromotor nutzen. <br> <br>Oben angekommen kann man die wunderbare Aussicht 
auf den Murtensee genießen. <br>Nach einer kurzen Pause geht es weiter nach Merlach. Dort steht ein Denkmal für 
Soldaten, die in der Schlacht bei Murten 1476 umgekommen sind. Danach geht die Fahrt zum Hafen und in die 
Altstadt. Unterwegs erfahren die Velofahrer vieles über die Region.<br>„Mit der Velorundfahrt für Gruppen 
wollen wir unser Angebot für aktive Radfahrer erweitern“, sagt der Geschäftsführer von Murten Tourismus. 
Damit soll sowohl das Gebiet für Velo-Touristen interessant gemacht als auch der Trend zum E-Bike unterstützt 
werden.
</div></p><br>
        			<small><i>*Velo = Schweizer Standard für „Fahrrad“</i></small>
        	</div>
        	<cite>aus einer Schweizer Broschüre</cite>
        </div>
        <div class="right" data-equalizer-watch>
				<div class="item item-a-b-c">
        		<div class="number">10</div>
        		<div class="question">In diesem Text geht es darum, dass...</div>
        		<div class="answers">
        			<div class="a">
        				<div class="selector">
        					<input type="checkbox" name='l_10_a' {{ $viewHelper->getCheckedString('l_10_a') }} value='1' id="chkbx10a"/><label for="chkbx10a" class="small">a</label>
        				</div>
        				<div class="answer">
        					<span>die Geschichte von Murten neu erzählt wird.</span>
        				</div>
        			</div>
        			<div class="b">
        				<div class="selector">
        					<input type="checkbox" name='l_10_b' {{ $viewHelper->getCheckedString('l_10_b') }} value='1' id="chkbx10b"/><label for="chkbx10b" class="small">b</label>
        				</div>
        				<div class="answer">
        					<span>es ein neues Tourismus-Angebot gibt.</span>
        				</div>
        			</div>
        			<div class="c">
        				<div class="selector">
								<input type="checkbox" name='l_10_c' {{ $viewHelper->getCheckedString('l_10_c') }} value='1' id="chkbx10c"/><label for="chkbx10c" class="small">c</label>
        				</div>
        				<div class="answer">
        					<span>man in Murten neue Velo-Wege bauen will.</span>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="item item-a-b-c">
        		<div class="number">11</div>
        		<div class="question">Für die Rundfahrt...</div>
        		<div class="answers">
        			<div class="a">
        				<div class="selector">
								<input type="checkbox" name='l_11_a' {{ $viewHelper->getCheckedString('l_11_a') }} value='1' id="chkbx11a"/><label for="chkbx11a" class="small">a</label>
        				</div>
        				<div class="answer">
        					<span>braucht man ein eigenes Velo.</span>
        				</div>
        			</div>
        			<div class="b">
        				<div class="selector">
        					<input type="checkbox" name='l_11_b' {{ $viewHelper->getCheckedString('l_11_b') }} value='1' id="chkbx11b"/><label for="chkbx11b" class="small">b</label>
        				</div>
        				<div class="answer">
        					<span>muss man nicht sportlich sein.</span>
        				</div>
        			</div>
        			<div class="c">
        				<div class="selector">
								<input type="checkbox" name='l_11_c' {{ $viewHelper->getCheckedString('l_11_c') }} value='1' id="chkbx11c"/><label for="chkbx11c" class="small">c</label>
        				</div>
        				<div class="answer">
        					<span>sollte man mit der Bahn anreisen.</span>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="item item-a-b-c">
        		<div class="number">12</div>
        		<div class="question">Der Geschäftsführer von Murten Tourismus will, dass...</div>
        		<div class="answers">
        			<div class="a">
        				<div class="selector">
								<input type="checkbox" name='l_12_a' {{ $viewHelper->getCheckedString('l_12_a') }} value='1' id="chkbx12a"/><label for="chkbx12a" class="small">a</label>
        				</div>
        				<div class="answer">
        					<span>es in Murten mehr Stadtführungen für Gruppen gibt.</span>
        				</div>
        			</div>
        			<div class="b">
        				<div class="selector">
        				<input type="checkbox" name='l_12_b' {{ $viewHelper->getCheckedString('l_12_b') }} value='1' id="chkbx12b"/><label for="chkbx12b" class="small">b</label>
        				</div>
        				<div class="answer">
        					<span>die Leute normale Velos statt Elektro-Velos benutzen.</span>
        				</div>
        			</div>
        			<div class="c">
        				<div class="selector">
							<input type="checkbox" name='l_12_c' {{ $viewHelper->getCheckedString('l_12_c') }} value='1' id="chkbx12c"/><label for="chkbx12c" class="small">c</label>
        				</div>
        				<div class="answer">
        					<span>mehr Velo-Touristen in die Region kommen.</span>
        				</div>
        			</div>
        		</div>
        	</div>
        	</div>        	
        	
        </div>
    
      </section>
 </form>