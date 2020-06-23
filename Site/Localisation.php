 <?php include("views/menu.php"); ?>

	<div class="container">
		<div class="jumbotron">
			<h3 class="mtitre">Localisation</h3>
			
			<p class="gras">
				Une entreprise a l'exclusivité pour la distribution d'un produit dans 4 villes. Dans une étude de marché on a déterminé la demande potentielle, selon le prochain tableau:
			</p>
			<table class="table tcentre">
				<tr>
					<td class="gras">Ville 1</td>
					<td class="gras">Ville 2</td>
					<td class="gras">Ville 3</td>
					<td class="gras">Ville 4</td>
				</tr>
				<tr>
					<td>3000 unités</td>
					<td>2000 unités</td>
					<td>2500 unités</td>
					<td>2700 unités</td>
				</tr>
			</table>
			<p class="gras">
				On sait que les coûts sont de 0.02? par km et unité transportée. La distance entre les villes est celle qu'on montre dans le tableau:
			</p>
			<table class="table tcentre">
				<tr>
					<td>&nbsp;</td>
					<td class="gras">Ville 1</td>
					<td class="gras">Ville 2</td>
					<td class="gras">Ville 3</td>
					<td class="gras">Ville 4</td>
				</tr>
				<tr>
					<td class="gras">Ville 1</td>
					<td>-</td>
					<td>25</td>
					<td>35</td>
					<td>40</td>
				</tr>
				<tr>
					<td class="gras">Ville 2</td>
					<td>25</td>
					<td>-</td>
					<td>20</td>
					<td>40</td>
				</tr>
				<tr>
					<td class="gras">Ville 3</td>
					<td>35</td>
					<td>20</td>
					<td>-</td>
					<td>30</td>
				</tr>
				<tr>
					<td class="gras">Ville 4</td>
					<td>40</td>
					<td>40</td>
					<td>30</td>
					<td>-</td>
				</tr>
			</table>
			<p class="gras">
				Afin de baisser le prix du transport on décide d'installer un entrepôt capacité pour 6000 unités dans deux de ces quatre villes. Déterminer dans quelles villes on doit installer les entrepôts.
			</p>
			<p>&nbsp;</p>
			<p>
				Déterminer les variables de décision et les représenter de manière algébrique. Dans ce cas:
			</p>
			<ul class="pas-de-liste">
				<li>
					X<span class="subindice">ij</span>: quantité envoyée de l'entrepôt i à la ville j
				</li>
				<li>
					Y<span class="subindice">i</span>: entrepôt situé dans la ville i (0, il n'y a pas d'entrepôt ; 1, il y en a)
				</li>
			</ul>
			<p>
				Déterminer les contraintes et les formuler comme équation ou inéquations dépendants des variables de décision. Ces contraintes sont déduites de la prochaine manière:
			</p>
			<ul class="pas-de-liste">
				<li>
					Les unités qu'on envoie à chaque ville des entrepôts doivent accomplir la demanda de cette ville:<br/><br/>
					<ul class="pas-de-liste">
						<li>
							X<span class="subindice">11</span> + X<span class="subindice">21</span> + X<span class="subindice">31</span> + X<span class="subindice">41</span> &ge; 3000
						</li>
						<li>
							X<span class="subindice">12</span> + X<span class="subindice">22</span> + X<span class="subindice">32</span> + X<span class="subindice">42</span> &ge; 2000
						</li>
						<li>
							X<span class="subindice">13</span> + X<span class="subindice">23</span> + X<span class="subindice">33</span> + X<span class="subindice">43</span> &ge; 2500
						</li>
						<li>
							X<span class="subindice">14</span> + X<span class="subindice">24</span> + X<span class="subindice">34</span> + X<span class="subindice">44</span> &ge; 2700
						</li>
					</ul>
					<br/>
				</li>
				<li>On ne créera que deux entrepôts:<br/><br/>
					<ul class="pas-de-liste">
						<li>
							Y<span class="subindice">1</span> + Y<span class="subindice">2</span> + Y<span class="subindice">3</span> + Y<span class="subindice">4</span> = 2
						</li>
					</ul>
					<br/>
				</li>
				<li>
					La quantité d'unités que chaque entrepôt peut envoyer doit être moins ou la même que sa capacité:<br/><br/>
				<ul class="pas-de-liste">
					<li>
						X<span class="subindice">11</span> + X<span class="subindice">12</span> + X<span class="subindice">13</span> + X<span class="subindice">14</span> &le; 6000&middot;Y<span class="subindice">1</span>
					</li>
					<li>
						X<span class="subindice">21</span> + X<span class="subindice">22</span> + X<span class="subindice">23</span> + X<span class="subindice">24</span> &le; 6000&middot;Y<span class="subindice">2</span>
					</li>
					<li>
						X<span class="subindice">31</span> + X<span class="subindice">32</span> + X<span class="subindice">33</span> + X<span class="subindice">34</span> &le; 6000&middot;Y<span class="subindice">3</span>
					</li>
					<li>
						X<span class="subindice">41</span> + X<span class="subindice">42</span> + X<span class="subindice">43</span> + X<span class="subindice">44</span> &le; 6000&middot;Y<span class="subindice">4</span>
					</li>
				</ul>
				</li>
			</ul>
			<p>
				Présenter toutes les conditions implicitement établies conformément à la nature des variables: qu'elles ne peuvent pas être négatives, qu'elles soient entièrs, qu'elles ne peuvent que prendre valeurs déterminées, ... Dans ce cas, les conditions sont que les unités envoyées de chaque entrepôt ne peut pas être négatives et en plus, la variable qui détermine si on va créer un entrepôt ou pas doit être booléen (0, on ne le crée pas ; 1, on le crée):
			</p>
			<ul class="pas-de-liste">
				<li>X<span class="subindice">ij</span> &ge; 0</li>
				<li>Y<span class="subindice">i</span> sont booléens</li>
			</ul>
			<p>Déterminer la fonction objectif:</p>
			<ul class="pas-de-liste">
				<li>
					Minimiser Z = 0.5&middot;X<span class="subindice">12</span> + 0.7&middot;X<span class="subindice">13</span> + 0.8&middot;X<span class="subindice">14</span> + 0.5&middot;X<span class="subindice">21</span> + 0.4&middot;X<span class="subindice">23</span> + 0.8&middot;X<span class="subindice">24</span> + 0.7&middot;X<span class="subindice">31</span> + 0.4&middot;X<span class="subindice">32</span> + 0.6&middot;X<span class="subindice">34</span> + 0.8&middot;X<span class="subindice">41</span> + 0.8&middot;X<span class="subindice">42</span> + 0.6&middot;X<span class="subindice">43</span>
				</li>
			</ul>



			<p>
				<a href="probleme.php" class="link">Retour aux Modélisations de Problèmes</a>
			</p>
		</div>
	</div>


 <?php include("views/footer.php"); ?>