<!-- NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->

<form id="questionform" >
<input name="questionid" type="hidden" value="1" />
<input name="answeredQuestions" type="hidden" id="answeredQuestions" value="<?php echo $viewHelper->getItemsCompleteAnswered('l'); ?>" />
{{ csrf_field() }}
      <nav data-equalizer>
          
        <div id="instructions" class="" data-equalizer-watch>
          <h5><b>Teil 1</b> <span class="estimated-time">Arbeitszeit: 10 Minuten</span></h5>
          <p>Lesen Sie den Text und die Aufgaben 1 bis 6 dazu.<br>Wählen Sie: Sind die Aussagen <input type='checkbox' name='chkbx' value='' id="chkbx1" disabled/><label for="chkbx1">Richtig</label>  oder <input type='checkbox' name='chkbx' value='' id="chkbx2" disabled/><label for="chkbx2">Falsch</label>?</p>

        </div>
        <a  class="nav-button prev disabled" data-equalizer-watch>
          <i class="fa fa-angle-left fa-2x"></i>
        </a>
        <a onClick="loadQuestion('zb1',2);" class="nav-button next" data-equalizer-watch>
          <i class="fa fa-angle-right fa-2x"></i>
        </a>
      </nav>
<!-- //NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->

    
      <!-- CONTENT SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
      <section id="content" data-equalizer>
        <div class="left" data-equalizer-watch>
        	<div class="section-title"></div>
        	<div class="computer"</b>
        		<div class="title">SusannesAlltagsBlog</div>
        		<div>Donnerstag, den 23. Juni</div><div style="text-align: justify"><br>Was mir heute passiert ist, das glaubt mir keiner: Als ich zu Mittag nichts ahnend in der Küche beim Kochen stand, läutete mein Handy. Eine Frauenstimme erklärte mir, dass meine Brieftasche in der Bankfiliale abgegeben 
worden war und ich sie dort abholen könnte. Mir wurde ganz heiß – mir war noch gar nicht aufgefallen, dass sie fehlte. Und 
ich hatte ja auch noch relativ viel Bargeld eingesteckt! Schnell holte ich meine Handtasche hervor und suchte nach der Brieftasche. 
Es stimmte! Auch nach längerem Kramen in der Tasche konnte ich sie nicht finden. Mein Geld war tatsächlich verschwunden! Ich machte mich 
also auf den Weg zur Bank und überlegte, wo ich meine Brieftasche liegen gelassen hatte: Sicherlich im Supermarkt an der Kassa. Jedenfalls 
kam ich bei der Bank an und war schon gespannt darauf zu erfahren, wo meine Brieftasche gefunden worden war und natürlich, ob etwas fehlte. 
Die Bankangestellte teilte mir mit, dass ein junger Mann die Brieftasche abgegeben hatte. Er hatte sie auf dem Parkplatz vor dem Supermarkt 
gefunden und wollte sie eigentlich ins Fundbüro bringen – wie man es in so einem Fall eben macht. Der Weg dorthin war für ihn zu weit und so 
suchte er nach einer anderen Möglichkeit, mir die Brieftasche zurückzugeben. Das muss man sich einmal vorstellen: Er war so clever, dass er auf 
der Bankomatkarte nach meinem und dem Namen meiner Bank suchte... Die Bank würde ja die Kontaktdaten zu meinem Namen haben und könnte mich so anrufen. 
Er fuhr in die nächste Filiale meiner Bank und dank der Computervernetzung der Filialen konnte meine Telefonnummer schnell herausgefunden werden. Da 
stand ich nun mit meiner Brieftasche, die mir beim Verlassen des Supermarktes aus der Handtasche gerutscht sein muss. Zum Glück war alles noch da! 
Ich bin sooo froh, dass diese Episode so gut ausgegangen ist. Nun weiß ich leider gar nicht, wie ich dem ehrlichen Finder danken kann. Vielleicht 
liest er ja diesen Blogeintrag oder es liest ihn jemand, dem er die Geschichte erzählt hat: 
„Vielen, vielen Dank, lieber Finder!“</div><br>Bis bald,<br>eure Susanne</div>
        </div>
        <div class="right" data-equalizer-watch>
        	<div class="section-title"><h5></h5></div>
        	<div class="example">
        		<p class="lead">Beispiel</p>
        		<div class="item item-true-false">
        			<div class="number">0</div>
        			<div class="question">Zu Mittag klingelte Susannes Telefon.</div>
        			<div class="true">
        				<input type='checkbox' name='chkbxe1' value=''  disabled id="chkbx3" checked/>
        				<label for="chkbx3">Richtig</label>
        			</div>
        			<div class="false">
        				<input type='checkbox' name='chkbxe2' value='' disabled id="chkbx4"/>
        				<label for="chkbx4">Falsch</label>
        			</div>
        		</div>
        	</div>
        	<div class="item item-true-false">
        		<div class="number">1</div>
        		<div class="question">Erst durch den Anruf bemerkte Susanne das Fehlen ihrer Brieftasche.</div>
        		<div class="true"><input type='checkbox' name='l_1_richtig' {{ $viewHelper->getCheckedString('l_1_richtig') }} value='1' id="chkbx51"/><label for="chkbx51">Richtig</label></div>
        		<div class="false"><input type='checkbox' name='l_1_falsch' {{ $viewHelper->getCheckedString('l_1_falsch') }} value='1' id="chkbx61"/><label for="chkbx61">Falsch</label></div>
        	</div>
        	<div class="item item-true-false">
        		<div class="number">2</div>
        		<div class="question">Susanne glaubte, die Brieftasche beim Bezahlen vergessen zu haben.</div>
        		<div class="true"><input type='checkbox' name='l_2_richtig' {{ $viewHelper->getCheckedString('l_2_richtig') }} value='1' id="chkbx52"/><label for="chkbx52">Richtig</label></div>
        		<div class="false"><input type='checkbox' name='l_2_falsch' {{ $viewHelper->getCheckedString('l_2_falsch') }} value='1' id="chkbx62"/><label for="chkbx62">Falsch</label></div>
        	</div>
        	<div class="item item-true-false">
        		<div class="number">3</div>
        		<div class="question">Der Finder hatte die Brieftasche ins Fundbüro gebracht.</div>
        		<div class="true"><input type='checkbox' name='l_3_richtig' {{ $viewHelper->getCheckedString('l_3_richtig') }} value='1' id="chkbx53"/><label for="chkbx53">Richtig</label></div>
        		<div class="false"><input type='checkbox' name='l_3_falsch' {{ $viewHelper->getCheckedString('l_3_falsch') }} value='1' id="chkbx63"/><label for="chkbx63">Falsch</label></div>
        	</div>
        	<div class="item item-true-false">
        		<div class="number">4</div>
        		<div class="question">Die Telefonnummer der Bank war in der Brieftasche.</div>
        		<div class="true"><input type='checkbox' name='l_4_richtig' {{ $viewHelper->getCheckedString('l_4_richtig') }} value='1' id="chkbx54"/><label for="chkbx54">Richtig</label></div>
        		<div class="false"><input type='checkbox' name='l_4_falsch' {{ $viewHelper->getCheckedString('l_4_falsch') }} value='1' id="chkbx64"/><label for="chkbx64">Falsch</label></div>
        	</div>
        	<div class="item item-true-false">
        		<div class="number">5</div>
        		<div class="question">In Susannes Brieftasche fehlte nichts.</div>
        		<div class="true"><input type='checkbox' name='l_5_richtig' {{ $viewHelper->getCheckedString('l_5_richtig') }} value='1' id="chkbx55"/><label for="chkbx55">Richtig</label></div>
        		<div class="false"><input type='checkbox' name='l_5_falsch' {{ $viewHelper->getCheckedString('l_5_falsch') }} value='1' id="chkbx65"/><label for="chkbx65">Falsch</label></div>
        	</div>
        	<div class="item item-true-false">
        		<div class="number">6</div>
        		<div class="question">Susanne konnte dem Finder persönlich für seine Ehrlichkeit danken.</div>
        		<div class="true"><input type='checkbox' name='l_6_richtig' {{ $viewHelper->getCheckedString('l_6_richtig') }} value='1' id="chkbx56"/><label for="chkbx56">Richtig</label></div>
        		<div class="false"><input type='checkbox' name='l_6_falsch' {{ $viewHelper->getCheckedString('l_6_falsch') }} value='1' id="chkbx66"/><label for="chkbx66">Falsch</label></div>
        	</div>
        </div>
    
      </section>
 </form>