<script>
$('#grouptitle').html('<b>Zertifikat B1</b> Modellsatz Sprechen</h4>');
</script>
<!-- NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
<form id="questionform" >
<input name="questionid" type="hidden" value="14" />
	{{ csrf_field() }}
      <nav data-equalizer>
        <div id="instructions" class="" data-equalizer-watch>
          <h5><b>Teil 1</b> <span class="estimated-time"> Dauer: circa drei Minuten</span></h5>
          Gemeinsam etwas planen.<br><br>
        </div>
         <a onClick="loadQuestion('zb1','einleitung_sprechen');" class="nav-button prev" data-equalizer-watch>
          <i class="fa fa-angle-left fa-2x"></i>
         </a>
          <a  class="nav-button next" onClick="loadQuestion('zb1','15');" data-equalizer-watch>
          <i class="fa fa-angle-right fa-2x"></i>
          </a>
      </nav>
      <!-- //NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
    
      <!-- CONTENT SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
      
      <section id="content" data-equalizer>
  		<div class="left" data-equalizer-watch>
  			<div style="padding-left:10px;padding-top:10px;">
  				<p>
    		  		 <i>
  Ein Teilnehmer aus dem Deutschkurs hatte einen Unfall und liegt im Krankenhaus.
Diese Woche möchten Sie ihn besuchen und ein Geschenk von der ganzen Gruppe mitbringen.
Nächste Woche kann er das Krankenhaus verlassen. Da er allein lebt, wird er Hilfe brauchen.
Überlegen Sie, wie Sie ihn unterstützen können.</i>
							<br/> <br>
						<b>Besuch im Krankenhaus und Hilfe planen</b>
						<ul>
							<li>Wann besuchen? (Tag, Uhrzeit?)</li>
							<li>Wie hinkommen?</li>
							<li>Was mitnehmen?</li>
							<li>Wie kann man helfen? (vom Krankenhaus abholen, einkaufen ...)</li>
							<li>...</li>
						</ul>
      			</p>      		
      			<p>
      				Die Vorbereitungszeit dazu würde 15 Minuten betragen. Sie würden sich allein vorbereiten.<br><br>Sie dürften sich zu jeder Aufgabe Notizen
					machen. In der Prüfung sollten Sie frei sprechen. Hilfsmittel wie z. B. Wörterbücher oder Mobiltelefone wären nicht erlaubt.</p>
        		</p>
        	</div>
  		</div>
  		<div class="right" data-equalizer-watch>
    		<div style="padding-left:10px;padding-top:10px;">
    			    			<div class="section-title">
            		<h5>Leistungsbeispiel</h5>
    				<a id="showvideobtn" href="#" onClick="$('#examplebox').show();$('#showvideobtn').hide();" class="primary hollow large button">Leistungsbeispiel anzeigen</a>
				</div>
    			<div id="examplebox" style="display:none;">
    				<p>
    					Dieses Video ist ein Beispiel für eine sehr gute Leistung auf Niveau B1.<br/>
						Die mündliche Prüfung wird in der Regel als Paarprüfung durchgeführt. Einzelprüfungen<br/>
						finden nur in Ausnahmefällen statt.<br/>
    				</p>
					<video width="540" height="360" controls>
 			 			<source src="/assets/mp4/zb1.mp4" type="video/mp4">
  						Ihr Browser unterstützt leider keine Videos!
					</video>
				</div>
			</div>
  		</div>
	</section>
 </form>
