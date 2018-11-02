<!-- NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
<form id="questionform" >
<input name="questionid" type="hidden" value="4" />
<input name="answeredQuestions" type="hidden" id="answeredQuestions" value="<?php echo $viewHelper->getItemsCompleteAnswered('l'); ?>" />

	{{ csrf_field() }}
 <!-- NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
      <nav data-equalizer>
          
        <div id="instructions" class="" data-equalizer-watch>

          <h5><b>Teil 3</b> <span class="estimated-time">Arbeitszeit: 10 Minuten</span></h5>
          <p>
      Lesen Sie die Situationen 13 bis 19 und die Anzeigen A bis J aus verschiedenen deutschsprachigen Medien. Wählen Sie: Welche Anzeige passt zu welcher Situation? Sie können <b>jede Anzeige nur einmal</b> verwenden. Die Anzeige aus dem Beispiel können Sie nicht mehr verwenden. Für eine Situation gibt es <b>keine passende Anzeige</b>. In diesem Fall wählen Sie <b>0</b>.<br><br>
      
      <small><i>Nach dem Ende Ihres gemeinsamen Deutschkurses möchten einige Ihrer Kolleginnen und Kollegen weiter Deutsch lernen und suchen dafür passende Möglichkeiten.</i></small>
          </p>
        </div>
       <a onClick="loadQuestion('zb1',3);" class="nav-button prev" data-equalizer-watch>
          <i class="fa fa-angle-left fa-2x"></i>
        </a>
        <a onClick="loadQuestion('zb1',5);" class="nav-button next" data-equalizer-watch>
          <i class="fa fa-angle-right fa-2x"></i>
        </a>
      </nav>
      <!-- //NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
    
      <!-- CONTENT SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
      <section id="content" data-equalizer>
        <div class="left one-third" data-equalizer-watch data-sticky-container>
        	<div data-sticky data-anchor="s" data-sticky-on="medium" style="width: 100%;">
        	<div class="section-title"><h5></h5></div>
        	<div class="example">
        		<p class="lead">Beispiel</p>
        		<div class="item item-display">
        			<div class="number">0</div>
        			<div class="question">Mario möchte in Wien einen Sommersprachkurs besuchen.</div>
        			<div class="answer">
        				  <select disabled>
        				  	<option value="_">_</option>
        				    <option value="a">a</option>
        				    <option value="b">b</option>
        				    <option value="c">c</option>
        				    <option value="d">d</option>
        				    <option value="e">e</option>
        				    <option value="f">f</option>
        				    <option value="g">g</option>
        				    <option value="h">h</option>
        				    <option value="i"selected>i</option>
        				    <option value="j">j</option>
        				    <option value="0">0</option>
        				  </select>
        			</div>
        		</div>
        	</div>
        	<div id="item-display" class="" >
        		<div class="item item-display" >
        			<div class="number">13</div>
        			<div class="question">Leon möchte im Sommer im Tourismus-Bereich arbeiten, um sein Deutsch zu verbessern.</div>
        			<div class="answer">
        				  <select name="l_13_select">
        				  	{{ $viewHelper->generateSelectAndSelectIt('l_13') }}
        				  </select>
        			</div>
        		</div>
        	<div class="item item-display" >
        			<div class="number">14</div>
        			<div class="question">Giovanna sucht deutsche Hörbücher, damit sie unterwegs Deutsch lernen kann.</div>
        			<div class="answer">
        				  <select name="l_14_select">
        				  	{{ $viewHelper->generateSelectAndSelectIt('l_14') }}
        				  </select>
        			</div>
        		</div>
        		<div class="item item-display" >
        			<div class="number">15</div>
        			<div class="question">Mirjeta hat keine Zeit für einen Kurs, möchte sich aber regelmäßig über Neuigkeiten aus Deutschland informieren.</div>
        			<div class="answer">
        				  <select name="l_15_select">
        				  	{{ $viewHelper->generateSelectAndSelectIt('l_15') }}
        				  </select>
        			</div>
        		</div>
        		<div class="item item-display" >
        			<div class="number">16</div>
        			<div class="question">Maria möchte am Computer Deutsch lernen.</div>
        			<div class="answer">
        				  <select name="l_16_select">
        				  	{{ $viewHelper->generateSelectAndSelectIt('l_16') }}
        				  </select>
        			</div>
        		</div>
        		<div class="item item-display" >
        			<div class="number">17</div>
        			<div class="question">Susan liest am liebsten Literatur, wenn die Texte nicht zu schwierig sind.</div>
        			<div class="answer">
        				  <select name="l_17_select">
        				  	{{ $viewHelper->generateSelectAndSelectIt('l_17') }}
        				  </select>
        			</div>
        		</div>
						<div class="item item-display" >
        			<div class="number">18</div>
        			<div class="question">Miroslav will den schriftlichen Ausdruck verbessern, weil er im Studium viel schreiben muss.</div>
        			<div class="answer">
        				  <select name="l_18_select">
        				  	{{ $viewHelper->generateSelectAndSelectIt('l_18') }}
        				  </select>
        			</div>
        		</div>
        		<div class="item item-display" >
        			<div class="number">19</div>
        			<div class="question">Juan kann nur am Abend einen Kurs besuchen.</div>
        			<div class="answer">
        				 <select name="l_19_select">
        				  	{{ $viewHelper->generateSelectAndSelectIt('l_19') }}
        				  </select>
        			</div>
        		</div>
        	</div>
        	</div>
        </div>
          <div class="right two-third" data-equalizer-watch id="s">
        	<div class="section-title"><h5></h5></div>
        	<div class="displays" id="displays">
        		<div class="display" id="a" draggable="true">
        			<div class="number">a</div>
        			<p>Neu im Verlagsprogramm:<br><b>Schweizer Autoren, leicht gemacht.</b><br>Nach 100 Lernstunden schon literarische Kurzgeschichten, Romane und Gedichte lesen? Kein Problem!<br> Die Reihe „Schweizer Autoren, leicht gemacht“ bietet Deutschlernern vereinfachte Originalversionen für uneingeschränktes Lesevergnügen.<br><i>www.schweizer-leseverlag.ch</i></p>
        		</div>
        		<div class="display" id="b" draggable="true">
        			<div class="number">b</div>
        			<p><b>Trainingsprogramm Deutsch</b><br> Sie wollen Ihre Sprachkenntnisse verbessern,<br>haben aber keine Zeit für Kurse? <br>Dann lernen Sie Deutsch im Internet!<br>Unser Lernportal bietet Ihnen gratis:<br>– 10 Kurslektionen für Anfänger und Fortgeschrittene<br>– Erklärungen zur Grammatik<br>– alle Übungen online verfügbar <br><i>www.sprachenlernen.de</i></p>
        		</div>
        		<div class="display" id="c" draggable="true">
        			<div class="number">c</div>
        			<p><b>DEUTSCH IN DER SCHWEIZ</b> <br>Unser Angebot: <br>– Intensivkurse mit 20-30 Wochenstunden<br>– Schreibkurse (auch als Fernstudium!) <br>– Sommerkurse für Jugendliche und Erwachsene(mit Freizeitprogramm) <br>– Kurs: Deutsch im Hotel<br>Wir bieten nur Tageskurse an! <i>www.deutschinderschweiz.ch</i></p>
        		</div>
        		<div class="display" id="d" draggable="true">
        			<div class="number">d</div>
        			<p><b>Job & Sprache-Net</b><br>Wir bieten Jobs für Deutschlernende in Deutschland, Österreich und in der Schweiz. Perfektionieren Sie Ihre Sprachkenntnisse und sammeln Sie Erfahrungen in den Arbeitsbereichen Hotel und Restaurant.<br> - Dauer: bis zu 3 Monate (Juni –August) <br>- Kosten für Unterkunft und Verpflegung werden übernommen<br><i>Informationen: </i>www.jobundsprache-net.com</p>
        		</div>
        		<div class="display" id="e" draggable="true">
        			<div class="number">e</div>
        			<p><b>Sprachschule ORION sucht engagierte Trainer und Trainerinnen (Vollzeit) </b><br>- Kurszeiten von 8:00–17:00 h<br>- Niveaus A1–C1<br>- allgemeine und berufsbezogene Sprachkurse <br>(z. B. Deutsch für den Tourismus)<br><b> Bewerbungen an: </b> office@deutschintensiv.de</p>
        		</div>
        		<div class="display" id="f" draggable="true">
        			<div class="number">f</div>
        			<p><b>Deutsch erLesen</b><br>Das Magazin <i>Deutsch erLesen</i> richtet sich an Deutschinteressierte im In- und Ausland. <br>Es erscheint einmal im Monat und enthält aktuelle Originalartikel aus der deutschen Presse. Deutschland erfahren & Deutsch lernen!<br>Bestellen Sie noch heute Ihr Probeexemplar:<br>info@deutsch-erlesen.de</p>
        		</div>
        		<div class="display" id="g" draggable="true">
        			<div class="number">g</div>
        			<p><b>Verlag für deutsche Literatur<br>sucht Lektor/ Lektorin</b><br>für die Auswahl und Korrektur von Werken<br>junger deutscher Autoren. <br>Unser Verlagsprogramm umfasst Romane, <br>Gedichtbände und Hörbücher. <br>Schicken Sie Ihre Bewerbung an: <br>junge-literatur@berlin.de</p>
        		</div>
        		<div class="display" id="h" draggable="true">
        			<div class="number">h</div>
        			<p><b><big>Deutsch in Linz</big><br>Deutsch-Intensivkurse</b><br>Mo bis Fr von 9:30–13h und von 14:00–17h<br><b>Kurse für Berufstätige <br></b>Für Berufstätige und Vielbeschäftigte bieten wir flexible Kurszeiten an (Termine nach Wunsch). Online-Einstufungstest auf <br>www.deutschinlinz.schule.at</p>
        		</div>
        		<div class="display" id="i" draggable="true">
        			<div class="number">i</div>
        			<p><b>Sprache und Kultur in Wien</b><br><br>Deutschkurse ganzjährig! <br>Spezialangebote für den Sommer. <br>Infos unter:<br>www.sprache-kultur@aon.at</center></p>
        		</div>
        		<div class="display" id="j" draggable="true">
        			<div class="number">j</div>
        			<p><b>Neues Computerprogramm<br>von DIGITAL LEARNING</b><br>Für Büromanagement und Buchhaltung in<br>englischer und deutscher Sprache.<br>Ab sofort im Buchhandel erhältlich.<br>Infos: software@digital-learning.net</p>
        		</div>
        	</div>
        	
        </div>
        	
        </div>
    
      </section>
      <!-- //CONTENT SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
 </form>
