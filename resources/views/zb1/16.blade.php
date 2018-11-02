<!-- NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
<form id="questionform" >
<input name="questionid" type="hidden" value="16" />
	{{ csrf_field() }}
<!-- NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
      <nav data-equalizer>

        <div id="instructions" class="" data-equalizer-watch>

          <h5><b>Teil 3 </b> <span class="estimated-time">Dauer: circa zwei Minuten</span></h5>
          <p>
            Über ein Thema sprechen.
          </p>
        </div>
        <a onClick="loadQuestion('zb1',15);" class="nav-button prev" data-equalizer-watch>
          <i class="fa fa-angle-left fa-2x"></i>
        </a>
        <a onClick="loadQuestion('zb1','Abschlusseite');" class="nav-button next" data-equalizer-watch>
          <i class="fa fa-angle-right fa-2x"></i>
        </a>
      </nav>
      <!-- //NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
    
      <!-- CONTENT SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
      <section id="content" data-equalizer>
        <div class="left" data-equalizer-watch>
  			<div style="padding-left:10px;padding-top:10px;">
  				<p>
  				<b>Nach Ihrer Präsentation:</b><br>
			Reagieren Sie auf die Rückmeldung und auf Fragen des Gesprächspartners/der Gesprächspartnerin
			und des Prüfers/der Prüferin.<br/><br/>
    		  		<b>Nach der Präsentation Ihres Partners/Ihrer Partnerin:</b><br>
					a) Geben Sie eine Rückmeldung zur Präsentation Ihres Partners/Ihrer Partnerin
(z. B. wie Ihnen die Präsentation gefallen hat, was für Sie neu oder besonders interessant war usw.). <br/>
b) Stellen Sie auch eine Frage zur Präsentation Ihres Partners/Ihrer Partnerin.
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
 			 			<source src="/assets/mp4/3Teil_Maristela_neu.mp4" type="video/mp4">
  						Ihr Browser unterstützt leider keine Videos!
					</video>
				</div>
			</div>
  		</div>
      </section>
 </form>