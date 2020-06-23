 <?php include("views/menu.php"); ?>

	<div class="container">
		<div class="jumbotron">
			<h3 class="mtitre">Arbres fruitiers</h3>
			
			<p class="gras">
				Un agriculteur a une parcelle de 640m² dédié à la culture d'arbres fruitiers: orangers, poiriers, pommiers et citronniers. Il se demande de quelle manière doit distribuer la superficie de la parcelle entre les variétés afin d'atteindre le bénéfice maximal en sachant que:
			</p>
			<ul class="gras">
				<li>
					chaque oranger a besoin d'un minimum de 16m², chaque poirier 4m², chaque pommier 8m² et chaque citronnier 12m².
				</li>
				<li>
					il dispose de 900 heures de travail par an, dont chaque oranger 30 heures par an, chaque poirier 5 heures, chaque pommier 10 heures et chaque citronnier 20 heures.
				</li>
				<li>
					a cause de la sécheresse, l'agriculteur doit respecter des restrictions d'arrosage: on l'a destiné 200m³ d'eau par an. Les besoins par an sont de 2m³ pour chaque oranger, 3m³ pour chaque poirier, 1m³ pour chaque pommier et 2m³ pour chaque citronnier.
				</li>
				<li>
					les bénéfices unitaires sont de 50, 25, 20 et 30€ pour chaque oranger, poirier, pommier et citronnier respectivement.
				</li>
			</ul>
			<p>&nbsp;</p>
			<p>
				Déterminer les variables de décision et les représenter de manière algébrique. Dans ce cas:
			</p>
			<ul class="pas-de-liste">
				<li>X<span class="subindice">1</span>: numéro d'orangers</li>
				<li>X<span class="subindice">2</span>: numéro de poiriers</li>
				<li>X<span class="subindice">3</span>: numéro de pommiers</li>
				<li>X<span class="subindice">4</span>: numéro de citronniers</li>
			</ul>
			<p>
				Déterminer les contraintes et les formuler comme équation ou inéquations dépendants des variables de décision. Ces contraintes sont déduites des besoins de chaque arbre de la parcelle, les heures de travail par an et les besoins d'arrosage:
			</p>
			<ul class="pas-de-liste">
				<li>
					Besoins de la parcelle: 16&middot;X<span class="subindice">1</span> + 4&middot;X<span class="subindice">2</span> + 8&middot;X<span class="subindice">3</span> + 12&middot;X<span class="subindice">4</span> &le; 640
				</li>
				<li>
					Besoins des heures par an: 30&middot;X<span class="subindice">1</span> + 5&middot;X<span class="subindice">2</span> + 10&middot;X<span class="subindice">3</span> + 20&middot;X<span class="subindice">4</span> &le; 900
				</li>
				<li>
					Besoins d'arrosage: 2&middot;X<span class="subindice">1</span> + 3&middot;X<span class="subindice">2</span> + X<span class="subindice">3</span> + 2&middot;X<span class="subindice">4</span> &le; 200
				</li>
			</ul>
			<p>
				Présenter toutes les conditions implicitement établies conformément à la nature des variables: qu'elles ne peuvent pas être négatives, qu'elles soient entièrs, qu'elles ne peuvent que prendre valeurs déterminées, ... Dans ce cas les conditions sont que le numéro d'arbres ne peut pas être négatif et doit être, en plus, un numéro entier:
			</p>
			<ul class="pas-de-liste">
				<li>X<span class="subindice">i</span> &ge; 0</li>
				<li>X<span class="subindice">i</span> sont entiers</li>
			</ul>
			<p>Déterminer la fonction objectif:</p>
			<ul class="pas-de-liste">
				<li>
					Maximiser Z = 50&middot;X<span class="subindice">1</span> + 25&middot;X<span class="subindice">2</span> + 20&middot;X<span class="subindice">3</span> + 30&middot;X<span class="subindice">4</span>
				</li>
			</ul>

			<p>
				<a href="probleme.php" class="link">Retour aux Modélisations de Problèmes</a>
			</p>
		</div>
	</div>


 <?php include("views/footer.php"); ?>