 <?php include("views/menu.php"); ?>

	<div class="container">
		<div class="jumbotron">
			<h3 class="mtitre">Attribution de personnel</h3>
			
			<p class="gras">
				Une entreprise a présélectionné 5 candidats pour employer 4 postes dans cette entreprise. Les postes consistent à manier 4 machines différentes (un employé pour chaque machine). L'entreprise a mis à l'épreuve aux 5 employés dans les 4 machines, en faisant le même travail chacun dans chaque une des machines, ayant les suivants temps:
			</p>
			<table class="table tcentre">
				<tr>
				  <td>&nbsp;</td>
				  <td class="gras">Machine 1</td>
				  <td class="gras">Machine 2</td>
				  <td class="gras">Machine 3</td>
				  <td class="gras">Machine 4</td>
				</tr>
				<tr>
				  <td class="gras">Candidat A</td>
				  <td>10</td>
				  <td>6</td>
				  <td>6</td>
				  <td>5</td>
				</tr>
				<tr>
				  <td class="gras">Candidat B</td>
				  <td>8</td>
				  <td>7</td>
				  <td>6</td>
				  <td>6</td>
				</tr>
				<tr>
				  <td class="gras">Candidat C</td>
				  <td>8</td>
				  <td>6</td>
				  <td>5</td>
				  <td>6</td>
				</tr>
				<tr>
				  <td class="gras">Candidat D</td>
				  <td>9</td>
				  <td>7</td>
				  <td>7</td>
				  <td>6</td>
				</tr>
				<tr>
				  <td class="gras">Candidat E</td>
				  <td>8</td>
				  <td>7</td>
				  <td>6</td>
				  <td>5</td>
				</tr>
			</table>
			<p class="gras">
				Déterminer lesquels candidats doit sélectionner l'entreprise et dans quelle machine les assigner.
			</p>
			<p>&nbsp;</p>
			<p>
				Déterminer les variables de décision et les représenter de manière algébrique. Dans ce cas:
			</p>
			<ul class="pas-de-liste">
				<li>
					X<span class="subindice">ij</span>: action dans laquelle l'employé i c'est assigné à la machine j (0 indique que l'employé n'est pas assigné et 1 s'il est assigné)
				</li>
			</ul>
			<p>
				Déterminer les contraintes et les formuler comme équation ou inéquations dépendants des variables de décision. Ces contraintes sont que chaque employé doit être assigné à une seule machine et ne doit pas rester aucune machine sans employé assigné:
			</p>
			<ul class="pas-de-liste">
				<li>Chaque employé doit être assigné à une seule machine ou à aucune si on ne sélectionne 
					pas :<br/><br/>
					<ul class="pas-de-liste">
						<li>X<span class="subindice">A1</span> + X<span class="subindice">A2</span> + X<span class="subindice">A3</span> + X<span class="subindice">A4</span> &le; 1</li>
						<li>X<span class="subindice">B1</span> + X<span class="subindice">B2</span> + X<span class="subindice">B3</span> + X<span class="subindice">B4</span> &le; 1</li>
						<li>X<span class="subindice">C1</span> + X<span class="subindice">C2</span> + X<span class="subindice">C3</span> + X<span class="subindice">C4</span> &le; 1</li>
						<li>X<span class="subindice">D1</span> + X<span class="subindice">D2</span> + X<span class="subindice">D3</span> + X<span class="subindice">D4</span> &le; 1</li>
						<li>X<span class="subindice">E1</span> + X<span class="subindice">E2</span> + X<span class="subindice">E3</span> + X<span class="subindice">E4</span> &le; 1</li>
					</ul>
				  <br/>
				</li>
				<li>Dans chaque machine doit avoir un employé:<br /><br />
					<ul class="pas-de-liste">
						<li>X<span class="subindice">A1</span> + X<span class="subindice">B1</span> + X<span class="subindice">C1</span> + X<span class="subindice">D1</span> + X<span class="subindice">E1</span> = 1</li>
						<li>X<span class="subindice">A2</span> + X<span class="subindice">B2</span> + X<span class="subindice">C2</span> + X<span class="subindice">D2</span> + X<span class="subindice">E2</span> = 1</li>
						<li>X<span class="subindice">A3</span> + X<span class="subindice">B3</span> + X<span class="subindice">C3</span> + X<span class="subindice">D3</span> + X<span class="subindice">E3</span> = 1</li>
						<li>X<span class="subindice">A4</span> + X<span class="subindice">B4</span> + X<span class="subindice">C4</span> + X<span class="subindice">D4</span> + X<span class="subindice">E4</span> = 1</li>
					</ul>
				</li>
			</ul>
			<p>
				Présenter toutes les conditions implicitement établies conformément à la nature des variables: qu'elles ne peuvent pas être négatives, qu'elles soient entièrs, qu'elles ne peuvent que prendre valeurs déterminées, ... Dans ce cas les conditions sont que les hommes assignés aux machines ne peut pas être négatifs et doit être, en plus, une variable booléen (0 ce n'est pas assigné, 1 c'est assigné):
			</p>
			<ul class="pas-de-liste">
				<li>X<span class="subindice">ij</span> &ge; 0</li>
				<li>X<span class="subindice">ij</span> sont booléens</li>
			</ul>
			<p>Déterminer la fonction objectif:</p>
			<ul class="pas-de-liste">
				<li>
					Minimiser Z = 10&middot;X<span class="subindice">A1</span> + 8&middot;X<span class="subindice">B1</span> + 8&middot;X<span class="subindice">C1</span> + 9&middot;X<span class="subindice">D1</span> + 8&middot;X<span class="subindice">E1</span> + 6&middot;X<span class="subindice">A2</span> + 7&middot;X<span class="subindice">B2</span> + 6&middot;X<span class="subindice">C2</span> + 7&middot;X<span class="subindice">D2</span> + 7&middot;X<span class="subindice">E2</span> + 6&middot;X<span class="subindice">A3</span> + 6&middot;X<span class="subindice">B3</span> + 5&middot;X<span class="subindice">C3</span> + 7&middot;X<span class="subindice">D3</span> + 6&middot;X<span class="subindice">E3</span> + 5&middot;X<span class="subindice">A4</span> + 6&middot;X<span class="subindice">B4</span> + 6&middot;X<span class="subindice">C4</span> + 6&middot;X<span class="subindice">D4</span> + 5&middot;X<span class="subindice">E4</span>
				</li>
			</ul>
			<p>
				On effectue un changement dans la nomenclature des variables. La correspondance suivante s'établie:
			</p>
			<table class="table tcentre">
				<tr>
				  <td>X<span class="subindice">A1</span></td>
				  <td>X<span class="subindice">A2</span></td>
				  <td>X<span class="subindice">A3</span></td>
				  <td>X<span class="subindice">A4</span></td>
				  <td>X<span class="subindice">B1</span></td>
				  <td>X<span class="subindice">B2</span></td>
				  <td>X<span class="subindice">B3</span></td>
				  <td>X<span class="subindice">B4</span></td>
				  <td>X<span class="subindice">C1</span></td>
				  <td>X<span class="subindice">C2</span></td>
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
				</tr>
			</table>
			<br />
			<table class="table tcentre">
				<tr>
				  <td>X<span class="subindice">C3</span></td>
				  <td>X<span class="subindice">C4</span></td>
				  <td>X<span class="subindice">D1</span></td>
				  <td>X<span class="subindice">D2</span></td>
				  <td>X<span class="subindice">D3</span></td>
				  <td>X<span class="subindice">D4</span></td>
				  <td>X<span class="subindice">E1</span></td>
				  <td>X<span class="subindice">E2</span></td>
				  <td>X<span class="subindice">E3</span></td>
				  <td>X<span class="subindice">E4</span></td>
				</tr>
				<tr>
				  <td>X<span class="subindice">11</span></td>
				  <td>X<span class="subindice">12</span></td>
				  <td>X<span class="subindice">13</span></td>
				  <td>X<span class="subindice">14</span></td>
				  <td>X<span class="subindice">15</span></td>
				  <td>X<span class="subindice">16</span></td>
				  <td>X<span class="subindice">17</span></td>
				  <td>X<span class="subindice">18</span></td>
				  <td>X<span class="subindice">19</span></td>
				  <td>X<span class="subindice">20</span></td>
				</tr>
			</table>

			<p>
				<a href="probleme.php" class="link">Retour aux Modélisations de Problèmes</a>
			</p>
		</div>
	</div>


 <?php include("views/footer.php"); ?>