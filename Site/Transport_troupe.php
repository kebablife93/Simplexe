 <?php include("views/menu.php"); ?>

	<div class="container">
		<div class="jumbotron">
			<h3 class="mtitre">Transport de troupes</h3>
			  
			<p class="gras">
				Un détachement militaire composé par 40 ingénieurs de combat, 36 spécialistes dynamiteurs, 88 soldats de la paix et 120 fantassin comme troupe de soutien, doivent être transportés jusqu'à une position stratégique importante. Dans le parc de la base il y a 4 types de véhicule A, B, C et D, aménagé pour le transport de troupes. Le numéro de personnes que chaque véhicule peut transporter c'est 10, 7, 6 et 9, de la manière détaillé dans le prochain tableau:
			</p>
			<table class="table tcentre">
				<tr>
				  <td>&nbsp;</td>
				  <td class="gras">Ingénieurs de combat</td>
				  <td class="gras">Spécialistes dynamiteurs</td>
				  <td class="gras">Soldats de la paix</td>
				  <td class="gras">Fantassin</td>
				</tr>
				<tr>
				  <td class="gras">A</td>
				  <td>3</td>
				  <td>2</td>
				  <td>1</td>
				  <td>4</td>
				</tr>
				<tr>
				  <td class="gras">B</td>
				  <td>1</td>
				  <td>1</td>
				  <td>2</td>
				  <td>3</td>
				</tr>
				<tr>
				  <td class="gras">C</td>
				  <td>2</td>
				  <td>1</td>
				  <td>2</td>
				  <td>1</td>
				</tr>
				<tr>
				  <td class="gras">D</td>
				  <td>3</td>
				  <td>2</td>
				  <td>3</td>
				  <td>1</td>
				</tr>
			</table>
			<p class="gras">
				Le coût d'essence de chaque véhicule jusqu'à la destination se estime de 160, 80, 40 et 120 litres respectivement. Si on veut économiser de l'essence, combien de véhicules de chaque type il faut utiliser pour que le coût de combustible soit minimal ?
			</p>
			<p>&nbsp;</p>
			<p>
				Déterminer les variables de décision et les représenter de manière algébrique. Dans ce cas :
			</p>
			<ul class="pas-de-liste">
				<li>X<span class="subindice">i</span>: numéro de véhicules de chaque type qu'on utilise<br/><br/></li>
				<li>X<span class="subindice">1</span>: numéro de véhicules de type</li>
				<li>X<span class="subindice">2</span>: numéro de véhicules de type</li>
				<li>X<span class="subindice">3</span>: numéro de véhicules de type</li>
				<li>X<span class="subindice">4</span>: numéro de véhicules de type</li>
			</ul>
			<p>
				Déterminer les contraintes et les formuler comme équation ou inéquations dépendants des variables de décision. Ces contraintes sont déduites des soldats qu'on doit transporter :
			</p>
			<ul class="pas-de-liste">
				<li>Ingénieurs de combat : 3&middot;X<span class="subindice">1</span> + X<span class="subindice">2</span> + 2&middot;X<span class="subindice">3</span> + 3&middot;X<span class="subindice">4</span> &ge; 50</li>
				<li>Spécialistes dynamiteurs : 2&middot;X<span class="subindice">1</span> + X<span class="subindice">2</span> + X<span class="subindice">3</span> + 2&middot;X<span class="subindice">4</span> &ge; 36</li>
				<li>Soldats de la paix : X<span class="subindice">1</span> + 2&middot;X<span class="subindice">2</span> + 2&middot;X<span class="subindice">3</span> + 3&middot;X<span class="subindice">4</span> &ge; 22</li>
				<li>Fantassin : 4&middot;X<span class="subindice">1</span> + 3&middot;X<span class="subindice">2</span> + X<span class="subindice">3</span> + X<span class="subindice">4</span> &ge; 120</li>
			</ul>
			<p>
				Présenter toutes les conditions implicitement établies conformément à la nature des variables: qu'elles ne peuvent pas être négatives, qu'elles soient entièrs, qu'elles ne peuvent que prendre valeurs déterminées, ... Dans ce cas les conditions sont que la quantité de véhicule ne peut pas être négative et doit être, en plus, un numéro entier :
			</p>
			<ul class="pas-de-liste">
				<li>X<span class="subindice">i</span> &ge; 0</li>
				<li>X<span class="subindice">i</span> sont entiers</li>
			</ul>
			<p>Déterminer la fonction objectif :</p>
			<ul class="pas-de-liste">
				<li>
					Minimiser Z = 160&middot;X<span class="subindice">1</span> + 80&middot;X<span class="subindice">2</span> + 40&middot;X<span class="subindice">3</span> + 120&middot;X<span class="subindice">4</span>
				</li>
			</ul>

			<p>
				<a href="probleme.php" class="link">Retour aux Modélisations de Problèmes</a>
			</p>
		</div>
	</div>


 <?php include("views/footer.php"); ?>