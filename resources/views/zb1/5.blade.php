<!-- NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
<form id="questionform" >
<input name="questionid" type="hidden" value="5" />
<input name="answeredQuestions" type="hidden" id="answeredQuestions" value="<?php echo $viewHelper->getItemsCompleteAnswered('l'); ?>" />

	{{ csrf_field() }}
      <nav data-equalizer>
          
        <div id="instructions" class="" data-equalizer-watch>
          <h5><b>Teil 4</b> <span class="estimated-time">Arbeitszeit: 15 Minuten</span></h5>
          <p>
      Lesen Sie die Texte 20 bis 26. Wählen Sie: Ist die Person <b>für ein Verbot</b>,
      <input type='checkbox' name='chkbx' value='' id="chkbx1" disabled/><label for="chkbx1">Ja</label>  oder 
      <input type='checkbox' name='chkbx' value='' id="chkbx2" disabled/><label for="chkbx2">Nein</label>?<br><br>
      <small><i>In einer Zeitschrift lesen Sie Kommentare zu einem Artikel über das Verbot von Videospielen, in denen viel Gewalt vorkommt (sogenannte "Killerspiele").</i></small>
          </p>
        </div>
        <a onClick="loadQuestion('zb1',4);" class="nav-button prev" data-equalizer-watch>
          <i class="fa fa-angle-left fa-2x"></i>
        </a>
        <a onClick="loadQuestion('zb1',6);" class="nav-button next" data-equalizer-watch>
          <i class="fa fa-angle-right fa-2x"></i>
        </a>
      </nav>
      <!-- //NAVIGATION WITH INSTRUCTIONS: SEE STYLEGUIDE FOR FURTHER DOCS -->
    
      <!-- CONTENT SECTION: SEE STYLEGUIDE FOR FURTHER DOCS -->
        <section id="content" data-equalizer>
        <div class="top" data-equalizer-watch>
        	<div class="section-title"><h5></h5></div>
        	<div class="three-cols">
        		<div class="first-col">
        			<div class="example">
        				<p class="lead">Beispiel</p>
        				<div class="item item-true-false">
        					<div class="number">0</div>
        					<div class="question">Niko</div>
        					<div class="true">
        						<input type='checkbox' name='chkbx' value='' disabled id="chkbx3" checked/>
        						<label for="chkbx3">Ja</label>
        					</div>
        					<div class="false">
        						<input type='checkbox' name='chkbx' value='' disabled id="chkbx4"/>
        						<label for="chkbx4">Nein</label>
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class="second-col" >
        			<div class="item item-true-false">
        				<div class="number">20</div>
        				<div class="question">Stefan</div>
        				<div class="true">
        					<input type="checkbox" name='l_20_ja' {{ $viewHelper->getCheckedString('l_20_ja') }} value='1' id="chkbx20j"/><label for="chkbx20j" class="medium">Ja</label>
        				</div>
        				<div class="false">
        					<input type="checkbox" name='l_20_nein' {{ $viewHelper->getCheckedString('l_20_nein') }} value='1' id="chkbx20n"/><label for="chkbx20n" class="medium">Nein</label>
        				</div>
        			</div>
        			<div class="item item-true-false">
        				<div class="number">21</div>
        				<div class="question">Dagmar</div>
        				<div class="true">
        				<input type="checkbox" name='l_21_ja' {{ $viewHelper->getCheckedString('l_21_ja') }} value='1' id="chkbx21j"/><label for="chkbx21j" class="medium">Ja</label>
        				</div>
        				<div class="false">
        					<input type="checkbox" name='l_21_nein' {{ $viewHelper->getCheckedString('l_21_nein') }} value='1' id="chkbx21n"/><label for="chkbx21n" class="medium">Nein</label>
        				</div>
        			</div>
        			<div class="item item-true-false">
        				<div class="number">22</div>
        				<div class="question">Kathleen</div>
        				<div class="true">
        					<input type="checkbox" name='l_22_ja' {{ $viewHelper->getCheckedString('l_22_ja') }} value='1' id="chkbx22j"/><label for="chkbx22j" class="medium">Ja</label>
        				</div>
        				<div class="false">
        					<input type="checkbox" name='l_22_nein' {{ $viewHelper->getCheckedString('l_22_nein') }} value='1' id="chkbx22n"/><label for="chkbx22n" class="medium">Nein</label>
        				</div>
        			</div>
                    <div class="item item-true-false">
                        <div class="number">23</div>
                        <div class="question">Marius</div>
                        <div class="true">
                            <input type="checkbox" name='l_23_ja' {{ $viewHelper->getCheckedString('l_23_ja') }} value='1' id="chkbx23j"/><label for="chkbx23j" class="medium">Ja</label>
                        </div>
                        <div class="false">
                                    <input type="checkbox" name='l_23_nein' {{ $viewHelper->getCheckedString('l_23_nein') }} value='1' id="chkbx23n"/><label for="chkbx23n" class="medium">Nein</label>
                        </div>
                    </div>
        		</div>
        		<div class="third-col" >

        			<div class="item item-true-false" style="border-left: 1px solid #aaa;">
        				<div class="number">24</div>
        				<div class="question">Jonny</div>
        				<div class="true">
   							<input type="checkbox" name='l_24_ja' {{ $viewHelper->getCheckedString('l_24_ja') }} value='1' id="chkbx24j"/><label for="chkbx24j" class="medium">Ja</label>
        				</div>
        				<div class="false">
									<input type="checkbox" name='l_24_nein' {{ $viewHelper->getCheckedString('l_24_nein') }} value='1' id="chkbx24n"/><label for="chkbx24n" class="medium">Nein</label>
        				</div>
        			</div>
        			<div class="item item-true-false" style="border-left: 1px solid #aaa;">
        				<div class="number">25</div>
        				<div class="question">Robert</div>
        				<div class="true">
								<input type="checkbox" name='l_25_ja' {{ $viewHelper->getCheckedString('l_25_ja') }} value='1' id="chkbx25j"/><label for="chkbx25j" class="medium">Ja</label>
        				</div>
        				<div class="false">
        					<input type="checkbox" name='l_25_nein' {{ $viewHelper->getCheckedString('l_25_nein') }} value='1' id="chkbx25n"/><label for="chkbx25n" class="medium">Nein</label>
        				</div>
        			</div>
        			<div class="item item-true-false" style="border-left: 1px solid #aaa;">
        				<div class="number">26</div>
        				<div class="question">Marinette</div>
        				<div class="true">
									<input type="checkbox" name='l_26_ja' {{ $viewHelper->getCheckedString('l_26_ja') }} value='1' id="chkbx26j"/><label for="chkbx26j" class="medium">Ja</label>
        				</div>
        				<div class="false">
        					<input type="checkbox" name='l_26_nein' {{ $viewHelper->getCheckedString('l_26_nein') }} value='1' id="chkbx26n"/><label for="chkbx26n" class="medium">Nein</label>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <div class="bottom">
        	<div class="section-title"><h5></h5></div>
        <div class="newspaper">
        		<div class="title">LESERBRIEFE</div>
        		<p class="no-highlight"><b>Beispiel</b> Man hat bis jetzt nicht wissenschaftlich gezeigt, dass sogenannte Gewaltspiele einen Einfluss auf das Verhalten von Jugendlichen haben? 
        			So ein Blödsinn! Ist doch logisch, dass so massive Bilder die Gedanken beeinflussen! Für mich ist klar: Durch solche Spiele kann viel Unglück und Schaden entstehen, 
        			die müssen weg! <br><cite>Niko, 52, Saarbrücken </cite>
        		<p><b>20</b> Ich könnte mir vorstellen, dass ein Verbot die gegenteilige Wirkung hätte, denn ein verbotenes Spiel ist doch noch interessanter als ein nicht verbotenes! Außerdem ist
es gar nicht möglich, alle Killerspiele abzuschaffen, weil es davon schon viel zu viele gibt. Mein Fazit: Warum „Killerspiele“ verbieten, wenn es im Endeffekt sowieso
alle spielen und das Ganze gerade durch ein Verbot noch interessanter wird? <cite>Stefan, 19, Graz</cite>
        		</p>
        		<p><b>21</b> Wer entscheidet letztlich darüber, welche Spiele man nicht braucht? Dürfen diese Menschen dann auch darüber entscheiden, welche Bücher, Filme oder Musik wir nicht
        		brauchen? Viel wichtiger ist es doch, dass Kinder und Jugendliche lernen, selbst zwischen virtueller und realer Gewalt zu unterscheiden!<cite>Dagmar, 23, Leipzig</cite>
        		</p>
        		<p><b>22</b> „Töten auf Probe“ soll erlaubt sein? Das bedeutet: Mal schnell zu üben, wie man jemanden umbringt, ist eine Freizeitbeschäftigung. Wie zynisch kann man sein? Nicht jeder wird zum Glück zum Monster, der sich mit so viel Gewalt und Zerstörung beschäftigt. 
Die Einstellung dahinter ist aber Ausdruck einer unglaublichen Gleichgültigkeit. Das muss man stoppen, und zwar schnell.<cite>Kathleen, 49, Cuxhaven</cite>
        		</p>
        		<p><b>23</b> Ich spiele sogenannte  Killerspiele wie CaDu seit bald drei Jahren regelmässig. Ich habe eine kleine Tochter, eine Frau und einen Job und spiele für den Ausgleich. Nur weil es mal dazu kommt, dass einer auf dieser Welt das Spiel als Realität sieht und durchdreht, müssen dann all die anderen ein Verbot hinnehmen? Es wäre besser, die
Altersbeschränkung auf 18 Jahre festzulegen und sie auch strikt einzuhalten.<cite>Marius, 34, St. Gallen</cite>
        		</p>
        		<p><b>24</b> „Killerspiele“ machen schnell aggressiv und man wird davon abhängig. Außerdem besteht die Gefahr, dass jemand nicht mit solchen Spielen umgehen kann und zum
Nachahmungstäter wird. Das sind nur zwei Gründe, warum man gegen diese Spiele endlich etwas tun sollte.<cite>Jonny, 21, Berlin</cite>
        		</p>
        		<p><b>25</b> In dieser Diskussion fehlt immer die genaue Kenntnis! Meistens ist es bei sogenannten „Killerspielen“ nämlich so, dass man in einem Team spielt. Ein solches Spiel stärkt
also den Teamgeist. Ausserdem steht die Taktik im Vordergrund und nicht eine bestimmte Methode, jemanden umzubringen. So wird das taktische bzw. logische Denken gefördert!<cite>Robert, 18, Winterthur</cite>
        		</p>
        		<p><b>26</b> Ich denke, dass gewisse Situationen oder Dinge einen Menschen dazu bringen können, etwas zu tun, das er sonst nicht tun würde. 
Das kann gerade bei sogenannten „Killerspielen“ der Fall sein. Deshalb scheint mir ein Verbot sinnvoll zu sein, auch wenn so ein Verbot allein wahrscheinlich nicht 
viel nützt, denn Killerspiele sind ja nur eine ‚Inspirationsquelle‘ für Gewalt.<cite>Marinette, 38, Frankfurt</cite>
        		</p>
        </div>
        </div>
      </section>
 </form>