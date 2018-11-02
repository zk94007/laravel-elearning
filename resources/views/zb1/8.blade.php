<!-- NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
<form id="questionform" >



<input name="questionid" type="hidden" value="8" />
<input name="answeredQuestions" type="hidden" id="answeredQuestions" value="<?php echo $viewHelper->getItemsCompleteAnswered('h'); ?>" />

	{{ csrf_field() }}
      <nav data-equalizer>
          
        <div id="instructions" class="" data-equalizer-watch>

          <h5><b>Teil 1</b> <span class="estimated-time"> </span></h5>
          <p>
            Sie hören nun fünf kurze Texte. Sie hören jeden Text <b>zweimal</b>. Zu jedem Text lösen Sie zwei Aufgaben.<br>
            Wählen Sie bei jeder Aufgabe die richtige Lösung. <br> Lesen Sie zuerst das Beispiel. Dazu haben Sie 10 Sekunden Zeit.
          </p>
        </div>
        <a onClick="loadQuestion('zb1',7);" class="nav-button prev" data-equalizer-watch>
          <i class="fa fa-angle-left fa-2x"></i>
        </a>
        <a onClick="loadQuestion('zb1',9);changeMP3(1);" class="nav-button next" data-equalizer-watch>
          <i class="fa fa-angle-right fa-2x"></i>
        </a>
      </nav>
      <!-- //NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
	  <audio id="a1" crossorigin="anonymous"></audio>
      <!-- CONTENT SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
				<section id="content" data-equalizer>
        <div class="bottom" data-equalizer-watch>
        	<div class="section-title"><h5></h5></div>
        	<div class="example">
        		<p class="lead">Beispiel</p>
        		<div class="item item-a-b-c">
        		<div class="example">

  					<div class="item item-true-false item-true-false-hear">
    								<div class="number">01</div>
    					<div class="question">Frank schlägt Jan vor, nach Sizilien zu fliegen.</div>
    						<div class="true">
      						<input type='checkbox' name='chkbx' value='' disabled id="chkbx3" checked/>
      					<label for="chkbx3">Richtig</label>
    						</div>
    						<div class="false">
      						<input type='checkbox' name='chkbx' value='' disabled id="chkbx4"/>
      						<label for="chkbx4">Falsch</label>
    					</div>
  					</div>
						</div>
										<div class="number">02</div>
        			<div class="question">Wo möchte Frank am liebsten übernachten?</div>
        			<div class="answers">
        				<div class="a">
        					<div class="selector">
        						<input id="chkbx4" type='checkbox' name='chkbx' value='' disabled />
        						<label for="chkbx4" class="small">a</label>
        					</div>
        					<div class="answer">
        						<span>bei Verwandten</span>
        					</div>
        				</div>
        				<div class="b">
        					<div class="selector">
        						<input id="chkbx5" type='checkbox' name='chkbx' value='' disabled />
        						<label for="chkbx5" class="small">b</label>
        					</div>
        					<div class="answer">
        						<span>im Hotel</span>
        					</div>
        				</div>
        				<div class="c">
        					<div class="selector">
        						<input id="chkbx6" type='checkbox' name='chkbx' value='' disabled id="chkbx3" checked/>
        						<label for="chkbx6" class="small">c</label>
        					</div>
        					<div class="answer">
        						<span>im Zelt</span>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        	<!--Example end-->
        	<div class="item item-true-false item-true-false-hear">
        	<p class="lead">Text 1</p>
  					<div class="number">1</div>
  					<div class="question">Der Termin von Frau Stein wird verschoben.</div>
  					<div class="true"><input type='checkbox' name='h_1_richtig' {{ $viewHelper->getCheckedString('h_1_richtig') }} value='1' id="chkb1r"/><label for="chkb1r">Richtig</label></div>
        		<div class="false"><input type='checkbox' name='h_1_falsch' {{ $viewHelper->getCheckedString('h_1_falsch') }} value='1' id="chkb1f"/><label for="chkb1f">Falsch</label></div>
					</div>
        	<div class="item item-a-b-c">
        		<div class="number">2</div>
        		<div class="question">Frau Stein soll ...</div>
        		<div class="answers">
        			<div class="a">
        				<div class="selector">
        					<input type="checkbox" name='h_2_a' {{ $viewHelper->getCheckedString('h_2_a') }} 
        					value='1' id="chkbx2a"/><label for="chkbx2a" class="small">a</label>
        				</div>
        				<div class="answer">
        					<span>die Chipkarte mitbringen.</span>
        				</div>
        			</div>
        			<div class="b">
        				<div class="selector">
        				<input type="checkbox" name='h_2_b' {{ $viewHelper->getCheckedString('h_2_b') }} 
        				value='1' id="chkbx2b"/><label for="chkbx2b" class="small">b</label>
        				</div>
        				<div class="answer">
        					<span>zehn Euro bezahlen.</span>
        				</div>
        			</div>
        			<div class="c">
        				<div class="selector">
        					<input type="checkbox" name='h_2_c' {{ $viewHelper->getCheckedString('h_2_c') }} 
        					value='1' id="chkbx2c"/><label for="chkbx2c" class="small">c</label>
        				</div>
        				<div class="answer">
        					<span>zurückrufen.</span>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="item item-true-false item-true-false-hear">
        	<p class="lead">Text 2</p>
  					<div class="number">3</div>
  					<div class="question">Herr Thomas informiert Frau Brahms über neue Versicherungstarife.</div>
  					<div class="true"><input type='checkbox' name='h_3_richtig' {{ $viewHelper->getCheckedString('h_3_richtig') }} value='1' id="chkb3r"/><label for="chkb3r">Richtig</label></div>
        		<div class="false"><input type='checkbox' name='h_3_falsch' {{ $viewHelper->getCheckedString('h_3_falsch') }} value='1' id="chkb3f"/><label for="chkb3f">Falsch</label></div>
					</div>
        	<div class="item item-a-b-c">
        		<div class="number">4</div>
        		<div class="question">Herr Thomas ...</div>
        		<div class="answers">
        			<div class="a">
        				<div class="selector">
        					<input type="checkbox" name='h_4_a' {{ $viewHelper->getCheckedString('h_4_a') }} 
        					value='1' id="chkbx4a"/><label for="chkbx4a" class="small">a</label>
        				</div>
        				<div class="answer">
        					<span>möchte, dass Frau Brahms einen neuen Vertrag abschließt.</span>
        				</div>
        			</div>
        			<div class="b">
        				<div class="selector">
        				<input type="checkbox" name='h_4_b' {{ $viewHelper->getCheckedString('h_4_b') }} 
        				value='1' id="chkbx4b"/><label for="chkbx4b" class="small">b</label>
        				</div>
        				<div class="answer">
        					<span>braucht Zeugnisse von Frau Brahms.</span>
        				</div>
        			</div>
        			<div class="c">
        				<div class="selector">
        					<input type="checkbox" name='h_4_c' {{ $viewHelper->getCheckedString('h_4_c') }} 
        				value='1' id="chkbx4c"/><label for="chkbx4c" class="small">c</label>
        				</div>
        				<div class="answer">
        					<span>ruft später noch einmal an.</span>
        				</div>
        			</div>
        		</div>
        	</div>
        <div class="item item-true-false item-true-false-hear">
        	<p class="lead">Text 3</p>
  					<div class="number">5</div>
  					<div class="question">Sie hören Veranstaltungstipps für München.</div>
  					<div class="true"><input type='checkbox' name='h_5_richtig' {{ $viewHelper->getCheckedString('h_5_richtig') }} value='1' id="chkb5r"/><label for="chkb5r">Richtig</label></div>
        		<div class="false"><input type='checkbox' name='h_5_falsch' {{ $viewHelper->getCheckedString('h_5_falsch') }} value='1' id="chkb5f"/><label for="chkb5f">Falsch</label></div>
					</div>
        	<div class="item item-a-b-c">
        		<div class="number">6</div>
        		<div class="question">Auf der Autobahn gibt es Stau wegen ...</div>
        		<div class="answers">
        			<div class="a">
        				<div class="selector">
        				<input type="checkbox" name='h_6_a' {{ $viewHelper->getCheckedString('h_6_a') }} 
        				value='1' id="chkbx6a"/><label for="chkbx6a" class="small">a</label>
        				</div>
        				<div class="answer">
        					<span>einer Baustelle.</span>
        				</div>
        			</div>
        			<div class="b">
        				<div class="selector">
        				<input type="checkbox" name='h_6_b' {{ $viewHelper->getCheckedString('h_6_b') }} 
        				value='1' id="chkbx6b"/><label for="chkbx6b" class="small">b</label>
        				</div>
        				<div class="answer">
        					<span>des Berufsverkehrs.</span>
        				</div>
        			</div>
        			<div class="c">
        				<div class="selector">
                <input type="checkbox" name='h_6_c' {{ $viewHelper->getCheckedString('h_6_c') }} 
        				value='1' id="chkbx6c"/><label for="chkbx6c" class="small">c</label>
        				</div>
        				<div class="answer">
        					<span>eines Unfalls.</span>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="item item-true-false item-true-false-hear">
        	<p class="lead">Text 4</p>
  					<div class="number">7</div>
  					<div class="question">Sie hören eine Information für eine Reisegruppe</div>
  					<div class="true"><input type='checkbox' name='h_7_richtig' {{ $viewHelper->getCheckedString('h_7_richtig') }} value='1' id="chkb7r"/><label for="chkb7r">Richtig</label></div>
        		<div class="false"><input type='checkbox' name='h_7_falsch' {{ $viewHelper->getCheckedString('h_7_falsch') }} value='1' id="chkb7f"/><label for="chkb7f">Falsch</label></div>
					</div>
        	<div class="item item-a-b-c">
        		<div class="number">8</div>
        		<div class="question">Welcher Zug fällt aus? Der Zug nach ...</div>
        		<div class="answers">
        			<div class="a">
        				<div class="selector">
								<input type="checkbox" name='h_8_a' {{ $viewHelper->getCheckedString('h_8_a') }} 
        				value='1' id="chkbx8a"/><label for="chkbx8a" class="small">a</label>
        				</div>
        				<div class="answer">
        					<span>Bern.</span>
        				</div>
        			</div>
        			<div class="b">
        				<div class="selector">
        				<input type="checkbox" name='h_8_b' {{ $viewHelper->getCheckedString('h_8_b') }} 
        				value='1' id="chkbx8b"/><label for="chkbx8b" class="small">b</label>
        				</div>
        				<div class="answer">
        					<span>Genf.</span>
        				</div>
        			</div>
        			<div class="c">
        				<div class="selector">
        					<input type="checkbox" name='h_8_c' {{ $viewHelper->getCheckedString('h_8_c') }} 
        				value='1' id="chkbx8c"/><label for="chkbx8c" class="small">c</label>
        				</div>
        				<div class="answer">
        					<span>Lausannne.</span>
        				</div>
        			</div>
        		</div>
        	</div>
			<div class="item item-true-false item-true-false-hear">
        	<p class="lead">Text 5</p>
  					<div class="number">9</div>
  					<div class="question">Das Wetter wird im Osten Deutschlands besser</div>
  					<div class="true"><input type='checkbox' name='h_9_richtig' {{ $viewHelper->getCheckedString('h_9_richtig') }} value='1' id="chkb9r"/><label for="chkb9r">Richtig</label></div>
        		<div class="false"><input type='checkbox' name='h_9_falsch' {{ $viewHelper->getCheckedString('h_9_falsch') }} value='1' id="chkb9f"/><label for="chkb9f">Falsch</label></div>
					</div>
        	<div class="item item-a-b-c">
        		<div class="number">10</div>
        		<div class="question">Vorausgesagt werden ...</div>
        		<div class="answers">
        			<div class="a">
        				<div class="selector">
        				<input type="checkbox" name='h_10_a' {{ $viewHelper->getCheckedString('h_9_a') }} 
        				value='1' id="chkbx9a"/><label for="chkbx9a" class="small">a</label>
        				</div>
        				<div class="answer">
        					<span>Gewitter an der Elbe.</span>
        				</div>
        			</div>
        			<div class="b">
        				<div class="selector">
        					<input type="checkbox" name='h_10_b' {{ $viewHelper->getCheckedString('h_9_b') }} 
        				value='1' id="chkbx9b"/><label for="chkbx9b" class="small">b</label>
        				</div>
        				<div class="answer">
        					<span>Temperaturen unter 10 Grad.</span>
        				</div>
        			</div>
        			<div class="c">
        				<div class="selector">
								<input type="checkbox" name='h_10_c' {{ $viewHelper->getCheckedString('h_9_c') }} 
        				value='1' id="chkbx9c"/><label for="chkbx9c" class="small">c</label>
        				</div>
        				<div class="answer">
        					<span>starke Regenfälle im Westen.</span>
        				</div>
        			</div>
        		</div>
        	</div>
      </section> 				
 </form>

 <script>loadMP3();</script>