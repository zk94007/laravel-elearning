

    
    <!-- MAIN SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->

    <form id="questionform" >
{{ csrf_field() }}
</form>
      <!-- NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
      <nav data-equalizer>
        <div id="instructions" class="first" data-equalizer-watch>
          <h5 class="text-center"><b>Lesen</b><br> 65 Minuten</h5>
          <p>
            Das Modul <i>Lesen</i> hat fünf Teile.
            Sie lesen mehrere Texte und lösen Aufgaben dazu. Sie können mit jeder Aufgabe beginnen. Für jede Aufgabe gibt es nur eine richtige Lösung.
          </p>
           <p>
            Hilfsmittel wie z. B. Wörterbücher oder Mobiltelefone sind nicht erlaubt.
          </p>
          
        </div>
        <a  href="#" class="nav-button prev" onClick="loadQuestion('zb1','vorwort');" data-equalizer-watch>
          <i class="fa fa-angle-left fa-2x"></i>
        </a>
        <a onClick="loadQuestion('zb1',1);startTesttime(65,1);showProgressIcons();" href="#" class="nav-button next" data-equalizer-watch>
          <i class="fa fa-angle-right fa-2x"></i>
        </a>
      </nav>
      <!-- //NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
    
      <!-- CONTENT SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
      <section id="content" data-equalizer>
    
      </section>
      <!-- //CONTENT SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->

    <!-- //MAIN SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
    

  