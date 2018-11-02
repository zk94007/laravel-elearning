<!-- NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
<form id="questionform" >
<input name="questionid" type="hidden" value="2" />
<input name="answeredQuestions" type="hidden" id="answeredQuestions" value="<?php echo $viewHelper->getItemsCompleteAnswered('l'); ?>" />

	{{ csrf_field() }}
      <nav data-equalizer>
          
        <div id="instructions" class="" data-equalizer-watch>

          <h5><b>Teil 2</b> <span class="estimated-time">Arbeitszeit: 20 Minuten</span></h5>
          <p>
            Lesen Sie den Text und die Aufgaben 7 bis 9 dazu.<br>
            Wählen Sie bei jeder Aufgabe die richtige Lösung
            <input type='checkbox' name='chkbx' value='' id="chkbx1" disabled/><label class="small" for="chkbx1">a</label>,
            <input type='checkbox' class="small" name='chkbx' value='' id="chkbx2" disabled/><label class="small" for="chkbx2">b</label> oder
            <input type='checkbox' class="small" name='chkbx' value='' id="chkbx3" disabled/><label class="small" for="chkbx3">c</label>
          </p>
        </div>
        <a onClick="loadQuestion('zb1',1);" class="nav-button prev" data-equalizer-watch>
          <i class="fa fa-angle-left fa-2x"></i>
        </a>
        <a onClick="loadQuestion('zb1',3);" class="nav-button next" data-equalizer-watch>
          <i class="fa fa-angle-right fa-2x"></i>
        </a>
      </nav>
      <!-- //NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
    
      <!-- CONTENT SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
      <section id="content" data-equalizer>
        <div class="left" data-equalizer-watch>
        	<div class="section-title"><h5></h5></div>
					<div class="newspaper">
        		<div class="title"><h4>Ein Dorf für grüne Energie</h4></div>
        		<div><b>Das Dorf Feldheim in Brandenburg macht sich unabhängig von Öl und Kohle.</b></div><div style="text-align: justify"><br>Seit Kurzem deckt das Dorf seinen kompletten Strombedarf und drei Viertel des Wärmebedarfs durch moderne Energien. „Das funktioniert mithilfe einer modernen Anlage für Bio-Gas“, erklärt der Diplom-Physiker Eckhard Meier. „Da kommen Abfall von den Tieren, Getreide und Holz rein und werden erwärmt. Ein Motor verbrennt das Gas und erzeugt dabei Wärme. Der Motor treibt dann einen Generator an, der Strom produziert.“ Entstanden ist die Idee des
„Bio-Energiedorfs“ an der Universität Göttingen. Ziel der Wissenschaftler war es zu zeigen, dass es möglich ist, ein Dorf komplett mit erneuerbaren Energien zu versorgen und damit einen Beitrag
zum Klimaschutz zu leisten. Tatsächlich: Die Bio-Gasanlage erzeugt jährlich doppelt so viel Strom wie die Gemeinde verbraucht. Der Rest wird in das Stromnetz abgegeben und kostenlos
anderen Dörfern zur Verfügung gestellt. Passt das Konzept auch für andere Dörfer? „Im Prinzip schon“, meint Eckhard Meier. Die technischen Anlagen könnten an anderen Orten genauso aufgebaut
werden – der Raumbedarf ist gering. Man benötigt allerdings vor allem eines: aktive und begeisterte Einwohner!</div>
				</div>
					<cite class="align-right">aus einer deutschen Zeitung</cite>
        </div>
        <div class="right" data-equalizer-watch>
        	<div class="section-title"><h5></h5></div>
        	<div class="example">
        		<p class="lead">Beispiel</p>
        		<div class="item item-a-b-c">
        			<div class="number">0</div>
        			<div class="question">Die Bio-Gasanlage ...</div>
        			<div class="answers">
        				<div class="a">
        					<div class="selector">
        						<input id="chkbx4" type='checkbox' name='chkbx' value='' disabled />
        						<label for="chkbx4" class="small">a</label>
        					</div>
        					<div class="answer">
        						<span>gehört Eckhard Meier.</span>
        					</div>
        				</div>
        				<div class="b">
        					<div class="selector">
        						<input id="chkbx5" type='checkbox' name='chkbx' value='' disabled />
        						<label for="chkbx5" class="small">b</label>
        					</div>
        					<div class="answer">
        						<span>gibt es seit einem Dreivierteljahr.</span>
        					</div>
        				</div>
        				<div class="c">
        					<div class="selector">
        						<input id="chkbx6" type='checkbox' name='chkbx' value='' disabled id="chkbx3" checked/>
        						<label for="chkbx6" class="small">c</label>
        					</div>
        					<div class="answer">
        						<span>produziert Strom und Wärme.</span>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="item item-a-b-c">
        		<div class="number">7</div>
        		<div class="question">In diesem Text geht es um ...</div>
        		<div class="answers">
        			<div class="a">
        				<div class="selector">
        					<input type="checkbox" name='l_7_a' {{ $viewHelper->getCheckedString('l_7_a') }} value='1' id="chkbx7a"/><label for="chkbx7a" class="small">a</label>
        				</div>
        				<div class="answer">
        					<span>die neue Technologie von Eckhard Meier.</span>
        				</div>
        			</div>
        			<div class="b">
        				  <input type="checkbox" name='l_7_b' {{ $viewHelper->getCheckedString('l_7_b') }} value='1' id="chkbx7b"/><label for="chkbx7b" class="small">b</label>
        					
        				<div class="answer">
        					<span>die umweltfreundliche Stromproduktion in Feldheim.</span>
        				</div>
        			</div>
        			<div class="c">
        				<div class="selector">
								<input type="checkbox" name='l_7_c' {{ $viewHelper->getCheckedString('l_7_c') }} value='1' id="chkbx7c"/><label for="chkbx7c" class="small">c</label>
        				</div>
        				<div class="answer">
        					<span>einen Studiengang an der Universität Göttingen.</span>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="item item-a-b-c">
        		<div class="number">8</div>
        		<div class="question">Die Wissenschaftler wollen zeigen, dass ...</div>
        		<div class="answers">
        			<div class="a">
        				<div class="selector">
        					<input type="checkbox" name='l_8_a' {{ $viewHelper->getCheckedString('l_8_a') }} value='1' id="chkbx8a"/><label for="chkbx8a" class="small">a</label>
        				</div>
        				<div class="answer">
        					<span>ein ganzes Dorf von modernen Energien leben kann.</span>
        				</div>
        			</div>
        			<div class="b">
        				<div class="selector">
        					<input type="checkbox" name='l_8_b' {{ $viewHelper->getCheckedString('l_8_b') }} value='1' id="chkbx8b"/><label for="chkbx8b" class="small">b</label>
        				</div>
        				<div class="answer">
        					<span>eine Bio-Gasanlage mehr Strom produziert, als ein Dorf braucht.</span>
        				</div>
        			</div>
        			<div class="c">
        				<div class="selector">
        					<input type="checkbox" name='l_8_c' {{ $viewHelper->getCheckedString('l_8_c') }} value='1' id="chkbx8c"/><label for="chkbx8c" class="small">c</label>
        				</div>
        				<div class="answer">
        					<span>man größere Mengen Strom sparen kann.</span>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="item item-a-b-c">
        		<div class="number">9</div>
        		<div class="question">Damit die Idee auch in anderen Dörfern funktioniert, ... </div>
        		<div class="answers">
        			<div class="a">
        				<div class="selector">
        					<input type="checkbox" name='l_9_a' {{ $viewHelper->getCheckedString('l_9_a') }} value='1' id="chkbx9a"/><label for="chkbx9a" class="small">a</label>
        				</div>
        				<div class="answer">
        					<span>benötigt man viel Geld.</span>
        				</div>
        			</div>
        			<div class="b">
        				<div class="selector">
									<input type="checkbox" name='l_9_b' {{ $viewHelper->getCheckedString('l_9_b') }} value='1' id="chkbx9b"/><label for="chkbx9b" class="small">b</label>
        				</div>
        				<div class="answer">
        					<span>braucht man genug Platz für die Technik.</span>
        				</div>
        			</div>
        			<div class="c">
        				<div class="selector">
									<input type="checkbox" name='l_9_c' {{ $viewHelper->getCheckedString('l_9_c') }} value='1' id="chkbx9c"/><label for="chkbx9c" class="small">c</label>
        				</div>
        				<div class="answer">
        					<span>muss die Bevölkerung dafür sein.</span>
        				</div>
        			</div>
        		</div>
        	</div>
        	</div>
    
      </section>
 </form>