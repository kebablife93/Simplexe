 <?php include("views/menu.php"); ?>

	<div class="container">
		<div class="jumbotron">
			<h3 class="mtitre">Plus court chemin</h3>
			
			<p>
				Les problèmes connus comme problèmes de plus court chemin ou problèmes de cheminement, essayent de trouver le chemin plus court entre deux points. Cela peut s'agir de la distance entre les points d'origine et de destination ou bien le temps écoulé d'un point à l'autre. Il est très utilisé dans les problèmes des réseaux de communications.
			</p>
			<p>
				Ce type de problèmes peut se résoudre moyennant la méthode du Simplexe, cependant, il y a d'autres méthodes plus efficaces comme l'algorithme de Dijkstra ou celui de Bellman-Ford.
			</p>
			<p class="gras">Exemple</p>
			<p class="gras">
				Une personne doit se déplacer tous les jours d'une ville A à une autre G. Elle analyse le trajet plus court avec la carte de routes. On montre les routes et les distances dans la prochaine figure:
			</p>
			<img src="img/probleme.png" width="585" height="330" class="centre" alt="Probleme de plus court chemin" title="Probleme de plus court chemin" />
			<p>&nbsp;</p>
			<p>
				Déterminer les variables de décision et les représenter de manière algébrique. Dans ce cas:
			</p>
			<ul class="pas-de-liste">
				<li>X<span class="subindice">ij</span>: fait de se déplacer de la ville i au j (0 il y a pas du déplacement, 1 il y a de déplacement) </li>
			</ul>
			<p>
				Déterminer les contraintes et les formuler comme équation ou inéquations dépendants des variables de décision. Ces contraintes sont déduites du bilan entre les possibles trajets qui partent de chaque ville et ceux qui arrivent jusqu'à elle (en obviant à tous les trajets qui nous rendent au point de départ et ceux qui viennent du point de destination):
			</p>
			<ul class="pas-de-liste">
				<li>Bilan des trajets de la ville A: X<span class="subindice">AB</span> + X<span class="subindice">AC</span> = 1</li>
				<li>Bilan des trajets de la ville B: X<span class="subindice">BD</span> + X<span class="subindice">BE</span> - X<span class="subindice">AB</span> - X<span class="subindice">DB</span> - X<span class="subindice">EB</span> = 0</li>
				<li>Bilan des trajets de la ville C: X<span class="subindice">CD</span> + X<span class="subindice">CF</span> - X<span class="subindice">AC</span> - X<span class="subindice">DC</span> - X<span class="subindice">FC</span> = 0</li>
				<li>Bilan des trajets de la ville D: X<span class="subindice">DB</span> + X<span class="subindice">DC</span> + X<span class="subindice">DE</span> - X<span class="subindice">BD</span> - X<span class="subindice">CD</span> - X<span class="subindice">ED</span> = 0</li>
				<li>Bilan des trajets de la ville E: X<span class="subindice">EB</span> + X<span class="subindice">ED</span> + X<span class="subindice">EG</span> - X<span class="subindice">BE</span> - X<span class="subindice">DE</span> = 0</li>
				<li>Bilan des trajets de la ville F: X<span class="subindice">FC</span> + X<span class="subindice">FG</span> - X<span class="subindice">CF</span> = 0</li>
				<li>Bilan des trajets de la ville G: - X<span class="subindice">EG</span> - X<span class="subindice">FG</span> = -1</li>
			</ul>
			<p>
				Présenter toutes les conditions implicitement établies conformément à la nature des variables: qu'elles ne peuvent pas être négatives, qu'elles soient entièrs, qu'elles ne peuvent que prendre valeurs déterminées, ... Dans ce cas les conditions sont que les variables doivent être booléens (0 on ne prend pas le chemin, 1 on prend le chemin), et par conséquent elles ne peuvent pas être négatives:
			</p>
			<ul class="pas-de-liste">
			<li>X<span class="subindice">ij</span> &ge; 0</li>
			<li>X<span class="subindice">ij</span> sont booléens</li>
			</ul>
			<p>Déterminer la fonction objectif:</p>
			<ul class="pas-de-liste">
				<li>
					Minimiser Z = 12&middot;X<span class="subindice">AB</span> + 4&middot;X<span class="subindice">AC</span> + 5&middot;X<span class="subindice">BD</span> + 3&middot;X<span class="subindice">BE</span> + 2&middot;X<span class="subindice">CD</span> + 10&middot;X<span class="subindice">CF</span> + 5&middot;X<span class="subindice">DB</span> + 2&middot;X<span class="subindice">DC</span> + 10&middot;X<span class="subindice">DE</span> + 3&middot;X<span class="subindice">EB</span> + 10&middot;X<span class="subindice">ED</span> + 2&middot;X<span class="subindice">EG</span> + 10&middot;X<span class="subindice">FC</span> + 4&middot;X<span class="subindice">FG</span>
				</li>
			</ul>
			<p>
				On effectue un changement dans la nomenclature des variables. La correspondance suivante s'établie:
			</p>
			<table class="table tcentre">
				<tr>
				  <td>X<span class="subindice">AB</span></td>
				  <td>X<span class="subindice">AC</span></td>
				  <td>X<span class="subindice">BE</span></td>
				  <td>X<span class="subindice">BD</span></td>
				  <td>X<span class="subindice">DB</span></td>
				  <td>X<span class="subindice">EB</span></td>
				  <td>X<span class="subindice">CD</span></td>
				  <td>X<span class="subindice">CF</span></td>
				  <td>X<span class="subindice">FC</span></td>
				  <td>X<span class="subindice">DC</span></td>
				  <td>X<span class="subindice">DE</span></td>
				  <td>X<span class="subindice">ED</span></td>
				  <td>X<span class="subindice">EG</span></td>
				  <td>X<span class="subindice">FG</span></td>
				</tr>
				<tr>
				  <td>X<span class="subindice">1</span></td>
				  <td>X<span class="subindice">2</span></td>
				  <td>X<span class="subindice">3</span></td>
				  <td>X<span class="subindice">4</span></td>
				  <td>X<span class="subindice">5</span></td>
				  <td>X<span class="subindice">6</span></td>
				  <td>X<span class="subindice">7</span></td>
				  <td>X<span class="subindice">8</span></td>
				  <td>X<span class="subindice">9</span></td>
				  <td>X<span class="subindice">10</span></td>
				  <td>X<span class="subindice">11</span></td>
				  <td>X<span class="subindice">12</span></td>
				  <td>X<span class="subindice">13</span></td>
				  <td>X<span class="subindice">14</span></td>
				</tr>
			</table>


			<p>
				<a href="probleme.php" class="link">Retour aux Modélisations de Problèmes</a>
			</p>
		</div>
	</div>


 <?php include("views/footer.php"); ?>