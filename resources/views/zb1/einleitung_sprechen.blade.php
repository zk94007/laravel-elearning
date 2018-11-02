<!-- MAIN SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
    <section id="main">
    <form id="questionform" >
{{ csrf_field() }}
</form>
      <!-- NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
      <nav data-equalizer>
        <div id="instructions" class="first" data-equalizer-watch>
          <h5 class="text-center"><b>Sprechen</b><br> <span class="estimated-time">15 Min. für zwei Teilnehmende</span> </h5>
          <p>
        Das Modul <i>Sprechen</i> besteht aus drei Teilen. <br> <br>
        Ihre Vorbereitungszeit beträgt 15 Minuten.
Sie bereiten sich allein vor.
Sie dürfen sich zu jeder Aufgabe Notizen
machen. In der Prüfung sollen Sie frei
sprechen.
Hilfsmittel wie z. B. Wörterbücher oder
Mobiltelefone sind nicht erlaubt.<br>
      <p>Hilfsmittel wie z. B. Wörterbücher oder Mobiltelefone sind nicht erlaubt.</p>
        </div>
        <a  class="nav-button prev " onClick="loadQuestion('zb1','13_2');$('.title-cnt').html('<h4><b>Zertifikat B1</b> Modellsatz Schreiben</h4>');" data-equalizer-watch>
          <i class="fa fa-angle-left fa-2x"></i>
        </a>
        <a onClick="loadQuestion('zb1',14);" class="nav-button next" data-equalizer-watch>
          <i class="fa fa-angle-right fa-2x"></i>
        </a>
      </nav>
      <!-- //NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
    
      <!-- CONTENT SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
      <section id="content" data-equalizer>
    
      </section>
      <!-- //CONTENT SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
    </section>
    <!-- //MAIN SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
    

    <script src="/assets/js/app.js"></script>
  </body>
</html>
