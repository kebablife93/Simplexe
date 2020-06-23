 <?php include("views/menu.php"); ?>

	<div class="container">
		<div class="jumbotron">
			<h3 class="mtitre">Transport de marchandise</h3>
			
			<p>
				Pour ce type de problème, bien qu'il puisse être résolu pour la méthode du Simplexe, il y a aussi une méthode spécifique de résolution plus facile: l'optimisation du transport de marchandises ou méthode simplifié du Simplexe pour les problèmes de transport. Cette méthode économise assez de temps et de calculs par rapport à la méthode du Simplexe traditionnel.
			</p>
			<p>Cependant, on modélise le problème de la même manière.</p>
			<p class="gras ">Exemple</p>
			<p class="gras">
				Un fabricant souhaite vendre plusieurs unités d'un article à trois magasins T1, T2 et T3. Il a deux entrepôts d'où réaliser l'envoi, A et B. Dans le premier il a 5 unités de cet article et dans le deuxième 10. La demande de chaque magasin c'est de 8, 5, et 2 unités respectivement. Les coûts de transport d'un article de chaque entrepôt à chaque magasin sont montrés dans le tableau:
			</p>
			<table class="table tcentre">
				<tr>
				  <td>&nbsp;</td>
				  <td class="gras">T1</td>
				  <td class="gras">T2</td>
				  <td class="gras">T3</td>
				</tr>
				<tr>
				  <td class="gras">A</td>
				  <td>1</td>
				  <td>2</td>
				  <td>4</td>
				</tr>
				<tr>
				  <td class="gras">B</td>
				  <td>3</td>
				  <td>2</td>
				  <td>1</td>
				</tr>
			</table>
			<p class="gras">Comment il faut le transporter pour être le plus économique possible ?</p>
			<p>&nbsp;</p>
			<p>Déterminer les variables de décision et les représenter de manière algébrique. Dans ce cas :</p>
			<ul class="pas-de-liste">
				<li>
					X<span class="subindice">i</span>: nnuméro d'unités transportés de chaque entrepôt à chaque magasin<br/><br/>
				</li>
				<li>
					X<span class="subindice">1</span>: nnuméro d'unités transportées de l'entrepôt A au magasin T1
				</li>
				<li>
					X<span class="subindice">2</span>: numéro d'unités transportées de l'entrepôt A au magasin T2
				</li>
				<li>
					X<span class="subindice">3</span>: numéro d'unités transportées de l'entrepôt A au magasin T3
				</li>
				<li>
					X<span class="subindice">4</span>: numéro d'unités transportées de l'entrepôt B au magasin T1
				</li>
				<li>
					X<span class="subindice">5</span>: numéro d'unités transportées de l'entrepôt B au magasin T2
				</li>
				<li>
					X<span class="subindice">6</span>: numéro d'unités transportées de l'entrepôt B au magasin T3
				</li>
			</ul>
			<p>
				Déterminer les contraintes et les formuler comme équation ou inéquations dépendants des variables de décision. Ces contraintes sont déduites de la disponibilité d'unités qu'il y a dans chaque entrepôt de même que la demande de chaque magasin :
			</p>
			<ul class="pas-de-liste">
				<li>
					Disponibilité dans l'entrepôt A: X<span class="subindice">1</span> + X<span class="subindice">2</span> + X<span class="subindice">3</span>  = 5 
				</li>
				<li>
					Disponibilité dans l'entrepôt B: X<span class="subindice">4</span> + X<span class="subindice">5</span> + X<span class="subindice">6</span>  = 10 
				</li>
				<li>
					Demande du magasin T1: X<span class="subindice">1</span> + X<span class="subindice">4</span> = 8
				</li>
				<li>
					Demande du magasin T2: X<span class="subindice">2</span> + X<span class="subindice">5</span> = 5
				</li>
				<li>
					Demande du magasin T3: X<span class="subindice">3</span> + X<span class="subindice">6</span> = 2
				</li>
			</ul>
			<p>
				Présenter toutes les conditions implicitement établies conformément à la nature des variables: qu'elles ne peuvent pas être négatives, qu'elles soient entièrs, qu'elles ne peuvent que prendre valeurs déterminées, ... Dans ce cas les conditions sont que la quantité d'unités ne peut pas être négative et doit être, en plus, un numéro entier:
			</p>
			<ul class="pas-de-liste">
				<li>X<span class="subindice">i</span> &ge; 0</li>
				<li>X<span class="subindice">i</span> sont entiers</li>
			</ul>
			<p>Déterminer la fonction objectif:</p>
			<ul class="pas-de-liste">
				<li>
					Minimiser Z = X<span class="subindice">1</span> + 2&middot;X<span class="subindice">2</span> + 4&middot;X<span class="subindice">3</span> + 3&middot;X<span class="subindice">4</span> + 2&middot;X<span class="subindice">5</span> + X<span class="subindice">6</span>
				</li>
			</ul>
			
			<p>
				<a href="probleme.php" class="link">Retour aux Modélisations de Problèmes</a>
			</p>
		</div>
	</div>


 <?php include("views/footer.php"); ?>