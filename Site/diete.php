 <?php include("views/menu.php"); ?>

	<div class="container">
		<div class="jumbotron">

			<h3 class="mtitre">Problème de la diète</h3>

			<p>
				Le problème de la diète a été l'un des premiers dans l'optimisation. George Joseph Stigler a posé, à la fin des années 30, le problème du régime nourrissant optimal pour essayer de satisfaire la préoccupation de l'armée nord-américaine de trouver la manière plus économique de nourrir ses troupes en assurant au même temps des besoins nutritionnels déterminés.
			</p>
			<p>
				Ce type de problème peut se formuler de différents façons telle que minimiser les couts d'achat, du régime pour le bétail, une diète amaigrissante qui remplit des niveaux déterminés de calories, protéines, hydrates de carbone, ...
			</p>
			<p class="gras">Exemple</p>
			<p class="gras">
				On essaye de nourrir le bétail d'une ferme avec le régime plus économique possible. Ce régime doit contenir quatre types de nutriments étant que A, B, C et D. On trouve ces composants dans deux types de fourrage M et N. La quantité, en grammes, de chaque composant par kilo de ces fourrages se montre dans le suivant tableau:
			</p>
			<table class="table tcentre">
				<tr>
					<td>&nbsp;</td>
					<td class="gras">A</td>
					<td class="gras">B</td>
					<td class="gras">C</td>
					<td class="gras">D</td>
				</tr>
				<tr>
					<td class="gras">M</td>
					<td>100</td>
					<td>-</td>
					<td>100</td>
					<td>200</td>
				</tr>
				<tr>
					<td class="gras">N</td>
					<td>-</td>
					<td>100</td>
					<td>200</td>
					<td>100</td>
				</tr>
			</table>
			<p class="gras">
				Le régime par jour d'un animal doit être composé au moins de 0.4Kg du composant A, 0.6Kg du composant B, 2Kg du composant C et 1.7Kg du composant D. Le composé M coût 0.2€/Kg et le composé N 0.08€/Kg. Quelles quantités de fourrages M et N on doit acquérir pour dépenser le moins en nourriture?
			</p>
			<p>&nbsp;</p>

			<p>
				On prétend de mélanger les types de fourrage pour obtenir un régime équilibré qui compte avec les quantités par jour recommandés de chaque nutriment pour les animaux.
			</p>
			<p>
				Déterminer les variables de décision et les représenter de manière algébrique. Dans ce cas :
			</p>
			<ul class="pas-de-liste">
				<li>X<span class="subindice">1</span>: quantité de fourrage M en Kg</li>
				<li>X<span class="subindice">2</span>: quantité de fourrage N en Kg</li>
			</ul>
			<p>
				Déterminer les contraintes et les formuler comme équations ou inéquations dépendants des variables de décision. Ces contraintes sont déduites de la composition exigée pour le régime par jour (en Kg):
			</p>
			<ul class="pas-de-liste">
				<li>Composant A: 0.1&middot;X<span class="subindice">1</span> + 0&middot;X<span class="subindice">2</span> &ge; 0.4</li>
				<li>Composant B: 0&middot;X<span class="subindice">1</span> + 0.1&middot;X<span class="subindice">2</span> &ge; 0.6</li>
				<li>Composant C: 0.1&middot;X<span class="subindice">1</span> + 0.2&middot;X<span class="subindice">2</span> &ge; 2</li>
				<li>Composant D: 0.2&middot;X<span class="subindice">1</span> + 0.1&middot;X<span class="subindice">2</span> &ge; 1.7</li>
			</ul>
			<p>
				Montrer toutes les conditions implicitement établies conformément à la nature des variables: qu'elles ne peuvent pas être négatives, qu'elles soient entières, qu'elles ne peuvent que prendre valeurs déterminées. Dans ce cas, la seule condition est que les quantités de fourrage qui forment le régime ne doivent pas être négatives :
			</p>
			<ul class="pas-de-liste">
				<li>X<span class="subindice">1</span> &ge; 0</li>
				<li>X<span class="subindice">2</span> &ge; 0</li>
			</ul>
			<p>
				Déterminer la fonction objectif:
			</p>
			<ul class="pas-de-liste">
				<li>
					Minimiser Z = 0.2&middot;X<span class="subindice">1</span> + 0.08&middot;X<span class="subindice">2</span>
				</li>
			</ul>
			<p>
				<a href="probleme.php" class="link">Retour aux Modélisations de Problèmes</a>
			</p>
		</div>
	</div>


 <?php include("views/footer.php"); ?>