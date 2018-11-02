<!-- NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
<form id="questionform" >
<input name="questionid" type="hidden" value="6" />
<input name="answeredQuestions" type="hidden" id="answeredQuestions" value="<?php echo $viewHelper->getItemsCompleteAnswered('l'); ?>" />

	{{ csrf_field() }}
      <nav data-equalizer>
          
        <div id="instructions" class="" data-equalizer-watch>

          <h5><b>Teil 5</b> <span class="estimated-time">Arbeitszeit: 10 Minuten</span></h5>
          <p>
            Lesen Sie die Aufgaben 27 bis 30 und den Text dazu.<br>
            Wählen Sie bei jeder Aufgabe die richtige Lösung
            <input type='checkbox' name='chkbx' value='' id="chkbx1" disabled/><label class="small" for="chkbx1">a</label>,
            <input type='checkbox' class="small" name='chkbx' value='' id="chkbx2" disabled/><label class="small" for="chkbx2">b</label> oder
            <input type='checkbox' class="small" name='chkbx' value='' id="chkbx3" disabled/><label class="small" for="chkbx3">c</label>.
            <br> <br>
            <i>Sie informieren sich über die Hausordnung des Dresdner Berufsbildungszentrums BZW, in dem Sie einen Kurs gebucht haben.</i> <br> 
          </p>
        </div>
        <a onClick="loadQuestion('zb1',5);" class="nav-button prev" data-equalizer-watch>
          <i class="fa fa-angle-left fa-2x"></i>
        </a>
        <a onClick="confirmLastQuestion(1);" class="nav-button next" data-equalizer-watch>
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
        	<div class="item item-a-b-c">
        		<div class="number">27</div>
        		<div class="question"><b>Schüler ...</b></div>
        		<div class="answers">
        			<div class="a">
        				<div class="selector">
        					<input type="checkbox" name='l_27_a' {{ $viewHelper->getCheckedString('l_27_a') }} 
        					value='1' id="chkbx27a"/><label for="chkbx27a" class="small">a</label>
        				</div>
        				<div class="answer">
        					<span>dürfen keine Fahrräder mit zur Schule bringen.</span>
        				</div>
        			</div>
        			<div class="b">
        				<div class="selector">
        					<input type="checkbox" name='l_27_b' {{ $viewHelper->getCheckedString('l_27_b') }} 
        					value='1' id="chkbx27b"/><label for="chkbx27b" class="small">b</label>
        				</div>
        				<div class="answer">
        					<span>dürfen ihre Fahrräder auf den Schulhof stellen.</span>
        				</div>
        			</div>
        			<div class="c">
        				<div class="selector">
        					<input type="checkbox" name='l_27_c' {{ $viewHelper->getCheckedString('l_27_c') }} 
        					value='1' id="chkbx27c"/><label for="chkbx27c" class="small">c</label>
        				</div>
        				<div class="answer">
        					<span>müssen ihre Fahrräder in einen speziellen Raum stellen.</span>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="item item-a-b-c">
        		<div class="number">28</div>
        		<div class="question"><b>Für die Klassenräume des BZW gilt:</b></div>
        		<div class="answers">
        			<div class="a">
        				<div class="selector">
        					<input type="checkbox" name='l_28_a' {{ $viewHelper->getCheckedString('l_28_a') }} 
        					value='1' id="chkbx28a"/><label for="chkbx28a" class="small">a</label>
        				</div>
        				<div class="answer">
        					<span>Schüler dürfen keine Poster aufhängen.</span>
        				</div>
        			</div>
        			<div class="b">
        				<div class="selector">
        					<input type="checkbox" name='l_28_b' {{ $viewHelper->getCheckedString('l_28_b') }} 
        					value='1' id="chkbx28b"/><label for="chkbx28b" class="small">b</label>
        				</div>
        				<div class="answer">
        					<span>Schüler müssen dort selber aufräumen.</span>
        				</div>
        			</div>
        			<div class="c">
        				<div class="selector">
        					<input type="checkbox" name='l_28_c' {{ $viewHelper->getCheckedString('l_28_c') }} 
        					value='1' id="chkbx28c"/><label for="chkbx28c" class="small">c</label>
        				</div>
        				<div class="answer">
        					<span>Schüler können dort nach dem Unterricht lernen.</span>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="item item-a-b-c">
        		<div class="number">29</div>
        		<div class="question"><b>Um die verschließbaren Fächer benutzen zu können, muss man ...</b></div>
        		<div class="answers">
        			<div class="a">
        				<div class="selector">
        					<input type="checkbox" name='l_29_a' {{ $viewHelper->getCheckedString('l_29_a') }} 
        					value='1' id="chkbx29a"/><label for="chkbx29a" class="small">a</label>
        				</div>
        				<div class="answer">
        					<span>einen Schlüssel im Sekretariat verlangen.</span>
        				</div>
        			</div>
        			<div class="b">
        				<div class="selector">
        					<input type="checkbox" name='l_29_b' {{ $viewHelper->getCheckedString('l_29_b') }} 
        					value='1' id="chkbx29b"/><label for="chkbx29b" class="small">b</label>
        				</div>
        				<div class="answer">
        					<span>einmalig 50,- Euro zahlen.</span>
        				</div>
        			</div>
        			<div class="c">
        				<div class="selector">
        					<input type="checkbox" name='l_29_c' {{ $viewHelper->getCheckedString('l_29_c') }} 
        					value='1' id="chkbx29c"/><label for="chkbx29c" class="small">c</label>
        				</div>
        				<div class="answer">
        					<span>Schüler sein oder im BZW arbeiten.</span>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="item item-a-b-c">
        		<div class="number">30</div>
        		<div class="question"><b>Das Trinken von Alkohol ...</b></div>
        		<div class="answers">
        			<div class="a">
        				<div class="selector">
        					<input type="checkbox" name='l_30_a' {{ $viewHelper->getCheckedString('l_30_a') }} 
        					value='1' id="chkbx30a"/><label for="chkbx30a" class="small">a</label>
        				</div>
        				<div class="answer">
        					<span>kann von der Schulleitung genehmigt werden.</span>
        				</div>
        			</div>
        			<div class="b">
        				<div class="selector">
        					<input type="checkbox" name='l_30_b' {{ $viewHelper->getCheckedString('l_30_b') }} 
        					value='1' id="chkbx30b"/><label for="chkbx30b" class="small">b</label>
        				</div>
        				<div class="answer">
        					<span>muss der Lehrperson gemeldet werden.</span>
        				</div>
        			</div>
        			<div class="c">
        				<div class="selector">
        					<input type="checkbox" name='l_30_c' {{ $viewHelper->getCheckedString('l_30_c') }} 
        					value='1' id="chkbx30c"/><label for="chkbx30c" class="small">c</label>
        				</div>
        				<div class="answer">
        					<span>ist ohne Ausnahme verboten.</span>
        				</div>
        			</div>
        		</div>
        	</div>
         <div class="bottom" data-equalizer-watch>
        	<div class="section-title"><h5></h5></div>
        	<div class="newspaper">
        		<div class="title"><u>HAUSORDNUNG</u></div>
        		<div><div style="text-align: justify"><p><b>Unterrichtszeiten:</b> Die vereinbarten Unterrichtszeiten sind verbindlich. Ist die Lehrperson zehn Minuten nach
Unterrichtsbeginn nicht da, informiert die Klassenvertretung das Sekretariat.<br><b>Ordnung:</b> In sämtlichen Räumen und Anlagen unserer Schule ist auf Ordnung und Sauberkeit zu achten.
Schulräume, Einrichtungen und Anlagen sind sorgfältig zu benützen. Außerhalb der Unterrichtszeiten dürfen sich Lernende nicht in den Klassenräumen aufhalten. 
Es ist untersagt, in den Klassenräumen etwas an die Wände zu kleben oder zu schreiben und Schulmöbel in andere Räume zu bringen. Mitarbeitende und Lernende, die
Schäden feststellen, melden diese dem Sekretariat. <br><b>Störungen:</b> Mitarbeitende und Lernende sorgen dafür, dass der Schulbetrieb nicht gestört wird.<br><b>Alkohol- und Drogenkonsum:</b> 
Der Konsum von Alkohol, illegalen Drogen sowie anderen psychoaktiven Substanzen
ist auf dem gesamten Schulareal und während schulischer Veranstaltungen (einschließlich aller Pausen)
verboten. In Ausnahmefällen kann die Schulleitung den Konsum von Alkohol erlauben.<br>
<b>Rauchen:</b> Rauchen ist nur im Freien beziehungsweise in den dafür vorgesehenen Zonen gestattet.
Wir bitten darum, die aufgestellten Aschenbecher zu benutzen.<br>
<b>Diebstahl:</b> Es empfiehlt sich, Wertsachen und Bargeld sorgfältig aufzubewahren. Die Schule stellt den
Lernenden und Mitarbeitenden kostenlos Schließfächer zur Verfügung. Für verlorene Schlüssel wird eine
Gebühr von Euro 50,- erhoben. Die Schule übernimmt für Diebstähle keine Haftung.<br>
<b>Fundgegenstände:</b> Fundgegenstände bitte im Sekretariat abgeben.<br>
<b>Parkplätze:</b> Auf dem Schulareal stehen keine Gratis-Autoparkplätze zur Verfügung. Fahrräder müssen in den
dafür vorgesehenen Fahrradkeller gebracht und abgeschlossen werden. Mopeds und Motorräder sind auf dem
Schulareal nicht erlaubt.</p></div></div>
        	</div>
      </section>
 </form>