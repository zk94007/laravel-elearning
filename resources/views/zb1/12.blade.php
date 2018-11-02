<!-- MAIN SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
    <section id="main">
    <form id="questionform" >
{{ csrf_field() }}
</form>
      <!-- NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
      <nav data-equalizer>
        <div id="instructions" class="first" data-equalizer-watch>
          <h5 class="text-center"><b>Schreiben</b><br> <span class="estimated-time">60 Minuten</span> </h5>
          <p>
        Das Modul <i>Schreiben</i> besteht aus drei Teilen. <br> <br>Auf den folgenden Seiten finden Sie <b>Musterbeispiele</b> zu den üblichen <b>drei Aufgaben</b>.<br> <br>
        In den <b>Aufgaben 1 </b>und <b>3</b> werden E-Mails geschrieben.<br> 
        In <b>Aufgabe 2</b> wird ein Diskussionsbeitrag verfasst.<br>
      <p>Hilfsmittel wie z. B. Wörterbücher oder Mobiltelefone sind nicht erlaubt.</p>
        </div>
        <a  class="nav-button prev disabled" data-equalizer-watch>
          <i class="fa fa-angle-left fa-2x"></i>
        </a>
        <a onClick="loadQuestion('zb1',13);" class="nav-button next" data-equalizer-watch>
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