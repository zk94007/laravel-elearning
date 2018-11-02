<script>console.log($.fn);</script>
<!-- MAIN SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
    <section id="main">
    <form id="questionform" >
{{ csrf_field() }}
</form>
      <!-- NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
      <nav data-equalizer>
        <div id="instructions" class="first" data-equalizer-watch>
          <h5 class="text-center"><b>Hören</b><br> 40 Minuten</h5>
          <p>
        Das Modul <i>Hören</i> besteht aus vier Teilen.
        Sie hören mehrere Texte und lösen Aufgaben dazu.<br> <br> 
        Lesen Sie jeweils zuerst die Aufgaben und hören Sie dann den Text dazu.<br> 
        Für jede Aufgabe gibt es nur eine richtige Lösung.
      </p>
      <p>
        Hilfsmittel wie z. B. Wörterbücher oder Mobiltelefone sind nicht erlaubt.
      </p>
          
        </div>
      	<a onClick="loadQuestion('zb1','result1');" class="nav-button prev" data-equalizer-watch>
          <i class="fa fa-angle-left fa-2x"></i>
        </a>
        <a onClick="loadQuestion('zb1',8);startTesttime(40,2);" class="nav-button next" data-equalizer-watch>
          <i class="fa fa-angle-right fa-2x"></i>
        </a>
      </nav>
      <!-- //NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
    
      <!-- CONTENT SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
      <section id="content" data-equalizer>
    
      </section>
      <!-- //CONTENT SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
    <!-- //MAIN SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->