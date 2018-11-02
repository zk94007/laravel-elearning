<!-- NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
<form id="questionform" >
<input name="questionid" type="hidden" value="13" />
	{{ csrf_field() }}
      <nav data-equalizer>
          
        <div id="instructions" class="" data-equalizer-watch>
          <h5><b>Aufgabe 1</b> <span class="estimated-time">Arbeitszeit: 20 Minuten</span></h5>
          <i>Schreiben Sie eine E-Mail.</i>
		</div>
        <a onClick="loadQuestion('zb1',12);" class="nav-button prev" data-equalizer-watch>
          <i class="fa fa-angle-left fa-2x"></i>
        </a>
        <a onClick="loadQuestion('zb1','13_1');" class="nav-button next" data-equalizer-watch>
          <i class="fa fa-angle-right fa-2x"></i>
        </a>
      </nav>
      <!-- //NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
    	 <section id="content" data-equalizer>
  		<div class="left" data-equalizer-watch>
  			<div style="padding-left:10px;padding-top:10px;">
				<p><i>Sie haben vor einer Woche Ihren Geburtstag gefeiert. <br>Ein Freund/Eine Freundin von Ihnen konnte nicht zu Ihrer Feier kommen, weil er/sie krank war.</i></p>  				
  				
          			<br>- Beschreiben Sie: Wie war die Feier?
          			<br>- Begründen Sie: Welches Geschenk finden Sie besonders toll und warum?
          			<br>- Machen Sie einen Vorschlag für ein Treffen.<br><br>
            		<br> Schreiben Sie eine E-Mail (circa 80 Wörter).
            		<br> Schreiben Sie etwas zu allen drei Punkten.
            		<br> Achten Sie auf den Textaufbau (Anrede, Einleitung, Reihenfolge der Inhaltspunkte, Schluss).
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
    				<p>Das ist ein Beispiel für eine Leistung auf Niveau B1. <br/>
    					Sämtliche Fehler (Lexik, Grammatik, Orthografie etc.) wurden bereinigt.
    				</p>
				<div class="box" id="examplebox">
				<small><b>Liebe Reneta,</b><br/><br/>
				ich bin traurig, dass du nicht zu meinem Geburtstag gekommen bist. Es war eine wirklich
				gute Party mit vielen Freunden. Wir haben viel getanzt und laut Musik gehört. Die Party hat
				um 10 Uhr begonnen und um 6 Uhr geendet. Es war wirklich wunderschön.<br/><br/>
				Meine Freunde haben mir ein Geschenk gemacht – eine Sony Playstation Portable. Es war
				das perfekte Geschenk. Ich bin ein großer Fan von Spielen, aber ich hatte nicht genug Geld,
				um früher eine zu kaufen.<br/><br/>
				Wann treffen wir uns? Wir haben uns schon 3 Monate nicht getroffen. Wir müssen
				uns nächstes Wochenende treffen. Hast du denn freie Zeit? Schreib mir bald.<br/><br/>
				Liebe Grüße<br/>
				B.*</small>
				<cite>* Der Name wurde vom ÖSD-Team abgekürzt.</cite>
				</div>
				</div>
			</div>
  		</div>
	</section>
      <!-- CONTENT SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
      <!-- //CONTENT SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
    
      </section>
 </form>