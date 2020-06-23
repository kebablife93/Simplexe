 <?php include("views/menu.php"); ?>

	<div class="container">
		<div class="jumbotron">
			<h3 class="mtitre">Investissement en bourse</h3>
			
			<p class="gras">
				Une investisseuse a 50000€ à investir parmi les quatre prochaines possibilités: bourse X, bourse Y, obligations X et obligations Y ; pour la période d'un an. Un maximum de 10500€ peut être investi en obligations X, et un maximum de 10000€ en obligations Y. Investir dans la bourse X implique un risque important c'est pour cela qu'on décide de ne pas investir plus d'un quart de l'investissement total. La quantité investie dans la bourse Y doit être au moins trois fois la quantité investie dans la bourse X. En outre, l'investisseuse a besoin que l'investissement d'obligations soit au moins si grand que la moitié de l'investissement dans les bourses. Les retours sur investissement par an s'envisagent selon le suivant tableau:
			</p>
			<table class="table tcentre">
				<tr>
					<td class="gras">Bourse X</td>
					<td class="gras">Bourse Y</td>
					<td class="gras">Obligations X</td>
					<td class="gras">Obligations Y</td>
				</tr>
				<tr>
					<td>20%</td>
					<td>10%</td>
					<td>9%</td>
					<td>11%</td>
				</tr>
			</table>
			<p class="gras">
				Quelle est la manière optimale de faire l'investissement pour obtenir le maximum de bénéfices ?
			</p>
			<p>&nbsp;</p>
			<p>
				Déterminer les variables de décision et les représenter de manière algébrique. Dans ce cas :
			</p>
			<ul class="pas-de-liste">
				<li>X<span class="subindice">1</span>: investissement en bourse X</li>
				<li>X<span class="subindice">2</span>: investissement en bourse Y</li>
				<li>X<span class="subindice">3</span>: investissement en obligations X</li>
				<li>X<span class="subindice">4</span>: investissement en obligations Y</li>
			</ul>
			<p>
				Déterminer les contraintes et les formuler comme équation ou inéquations dépendants des variables de décision. Ces contraintes sont déduites des décisions prises par l'investisseuse sur la manière d'investir et l'investissement maximum qu'on peut réaliser:
			</p>
			<ul class="pas-de-liste">
				<li>
					X<span class="subindice">1</span> + X<span class="subindice">2</span> + X<span class="subindice">3</span> + X<span class="subindice">4</span> &le; 50000
				</li>
				<li>
					X<span class="subindice">1</span> &le; 12500
				</li>
				<li>
					X<span class="subindice">3</span> &le; 10500
				</li>
				<li>
					X<span class="subindice">4</span> &le; 10000
				</li>
				<li>
					3&middot;X<span class="subindice">1</span> - X<span class="subindice">2</span> &le; 0
				</li>
				<li>
					0.5&middot;X<span class="subindice">1</span> + 0.5&middot;X<span class="subindice">2</span> - X<span class="subindice">3</span> - X<span class="subindice">4</span> &le; 0
				</li>
			</ul>
			<p>
				Présenter toutes les conditions implicitement établies conformément à la nature des variables: qu'elles ne peuvent pas être négatives, qu'elles soient entièrs, qu'elles ne peuvent que prendre valeurs déterminées, ... Dans ce cas, la seule condition est que les investissements ne peuvent pas être négatifs:
			</p>
			<ul class="pas-de-liste">
				<li>X<span class="subindice">i</span> &ge; 0</li>
			</ul>
			<p>Déterminer la fonction objectif:</p>
			<ul class="pas-de-liste">
				<li>
					Maximiser Z = 0.2&middot;X<span class="subindice">1</span> + 0.1&middot;X<span class="subindice">2</span> + 0.09&middot;X<span class="subindice">3</span> + 0.11&middot;X<span class="subindice">4</span>
				</li>
			</ul>


			<p>
				<a href="probleme.php" class="link">Retour aux Modélisations de Problèmes</a>
			</p>
		</div>
	</div>


 <?php include("views/footer.php"); ?>