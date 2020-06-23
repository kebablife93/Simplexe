 <?php include("views/menu.php"); ?>



    <div class="container">
		<div class="jumbotron">
			<h3 class="mtitre">Modélisation de problèmes</h3>
			<p>
				Pour pouvoir résoudre un problème par le moyen d'un algorithme on doit d'abord extraire toute la information qui l'énoncé apporte et préparer le problème selon les besoins de la méthode résolutif.
			</p>
      		<p>Les étapes pour modeler un problème sont les suivants: </p>
			<ul>
				<li>
					Etape 1: Déterminer les variables de décision et les formuler de façon algébrique.<br/><br/>
					<ul style="list-style:none;">
						<li>	
							X<span class="subindice">1</span>,..., X<span class="subindice">n</span>
						</li>
					</ul>
					<br/>
				</li>
				<li>
					Etape 2: Déterminer les variables de décision et les formuler de façon algébrique.<br/><br/>
					<ul style="list-style:none;">
						<li>
							A<span class="subindice">11</span>&middot;X<span class="subindice">1</span> + A<span class="subindice">12</span>&middot;X<span class="subindice">2</span> + ... + A<span class="subindice">1n</span>&middot;X<span class="subindice">n</span> &ge;, &le;, &oacute; = b<span class="subindice">1</span>
						</li>
						<li>
							A<span class="subindice">21</span>&middot;X<span class="subindice">1</span> + A<span class="subindice">22</span>&middot;X<span class="subindice">2</span> + ... + A <span class="subindice">2n</span>&middot;X<span class="subindice">n</span> &ge;, &le;, &oacute;  = b<span class="subindice">2</span>
						</li>
						<li>...</li>
						<li>
							A<span class="subindice">m1</span>&middot;X<span class="subindice">1</span> + A<span class="subindice">m2</span>&middot;X<span class="subindice">2</span> + ... + A<span class="subindice">mn</span>&middot;X<span class="subindice">n</span> &ge;, &le;, &oacute; = b<span class="subindice">m</span>
						</li>
					</ul>
          			<br/>
        		</li>

        		<li>
        			Présenter toutes les conditions implicitement établies conformément à la nature des variables: qu'elles ne peuvent pas être négatives, qu'elles soient entières, qu'elles ne peuvent que prendre valeurs déterminées, ...<br /><br />
          			<ul style="list-style:none;">
		            	<li>
		            		X<span class="subindice">1</span>,..., X<span class="subindice">n</span> &ge; 0
		            	</li>
		            	<li>
		            		X<span class="subindice">1</span>,..., X<span class="subindice">n</span> sont des num&eacute;ros entiers, ou sont bool&eacute;enne,...
		            	</li>
		          	</ul>
          			<br/>
        		</li>

        		<li>
        			Etape 4: Déterminer la fonction objectif.<br/><br/>
          			<ul style="list-style:none;">
            			<li>
            				Maximiser ou minimiser Z = C<span class="subindice">1</span>&middot;X<span class="subindice">1</span> + C<span class="subindice">2</span>&middot;X<span class="subindice">2</span> + ... + C<span class="subindice">n</span>&middot;X<span class="subindice">n</span>
            			</li>
          			</ul>
        		</li>
      		</ul>
			<p>A titre d'exemple on explique comment on fait la modélisation de quelques problèmes typiques : </p>
			<ul class="pas-de-liste">
				<li>
					<a href="arbres_fruitiers.php">Problème d'arbres fruitiers</a><br/>
				</li>
				<li>
					<a href="transport_marchandise.php">Problème de transport de marchandise</a><br />
				</li>
				<li>
					<a href="bourse.php">Problème d'investissement en bourse</a><br/>
				</li>
				<li>
					<a href="transport_troupe.php">Problème de transport de troupes</a><br/>
				</li>
				<li>
					<a href="diete.php">Problème de la diète</a><br/>
				</li>
				<li>
					<a href="Localisation.php">Problème de localisation</a><br/>
				</li>
				<li>
					<a href="attribution_personnel.php">Problème d'attribution de personnel</a><br/>
				</li>
				<li>
					<a href="court_chemin.php">Problème du plus court chemin</a><br/>
				</li>
			</ul>
		</div>
    </div>

<?php include("views/footer.php"); ?>