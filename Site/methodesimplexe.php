 <?php include("views/menu.php"); ?>


<div class="container">
  	<h2 class="mtitre">Théorie de la méthode du Simplexe</h2>
	<p>
		La méthode du Simplexe est une procédure itérative qui permet d'améliorer la résolution de la fonction objectif à chaque étape. Le processus se termine lorsque vous ne pouvez pas continuer à améliorer la valeur, c'est-à-dire, on a atteint la solution optimale (la valeur la plus élevée ou la plus basse possible, selon le cas). À partir de la base de la valeur de la fonction objectif en un point quelconque, le procédé est de trouver un autre point qui améliore la valeur précédente. Comme indiqué dans la méthode Graphique, ces points sont les sommets du polygone (ou polyèdre ou polychore, si le nombre de variables est supérieur à deux), qui est la région déterminée par les contraintes que le problème est soumis (dite région faisable). La recherche est effectuée par les déplacements des arêtes du polygone, du sommet courant jusqu'à un élément adjacent qui permet d'améliorer la valeur de la fonction objectif. Chaque fois que la région faisable sera présente, vu que le nombre de sommets et d'arêtes est fini, il est possible de trouver la solution.
	</p>
	<p>
		La méthode du Simplexe est basé sur la propriété suivante: si la fonction objectif Z ne prend pas sa valeur maximale au niveau du sommet A, puis, il y a une arête dont le point de départ est A et le long de laquelle la valeur de Z augmente.
		Il sera nécessaire de tenir compte que la méthode du Simplexe fonctionne uniquement avec les contraintes du problème dont les contraintes sont du type "≤" (inférieur ou égal) et ses coefficients indépendants sont supérieurs ou égaux à 0. Ainsi, les restrictions devraient être normalisées pour répondre à ces exigences avant de commencer l'algorithme du Simplexe. Dans le cas où les contraintes de type "≥" (supérieur ou égal) ou "=" (égal) apparaissent après ce processus, ou on ne peut pas les modifier, il sera nécessaire d'utiliser d'autres méthodes de résolution, étant la méthode de Deux Phases la plus courante.
	</p>   

	<h4 class="mtitre">Adaptation du modèle à la méthode du Simplexe</h4>

	<p>
		La forme standard du modèle de problème consiste d'une fonction objectif sous des contraintes déterminées:
	</p>

	<table class="tabsansbord">
	        <tr>
	          <td style="width:180px;">Fonction objectif:</td>
	          <td style="width:320px;">c<span>1</span>&middot;x<span>1</span> + c<span >2</span>&middot;x<span>2</span> + ... + c<span>n</span>&middot;x<span>n</span></td>
	        </tr>
	        <tr>
	          <td style="vertical-align:top;">sous les contraintes:</td>
	          <td>a<span>11</span>&middot;x<span>1</span> + a<span>12</span>&middot;x<span>2</span> + ... + a<span>1n</span>&middot;x<span>n</span> = b<span>1</span><br />
	          a<span>21</span>&middot;x<span>1</span> + a<span>22</span>&middot;x<span>2</span> + ... + a<span>2n</span>&middot;x<span>n</span> = b<span>2</span><br />
	          ...<br />
	          a<span>m1</span>&middot;x<span>1</span> + a<span>m2</span>&middot;x<span>2</span> + ... + a<span>mn</span>&middot;x<span>n</span> = b<span>m</span><br />
	          x<span>1</span>,..., x<span>n</span> &ge; 0</td>
	        </tr>
	</table>

	<p>Le modèle doit accomplir les conditions suivantes: </p>

	<ol>
		<li>
			L'objectif sera de maximiser ou minimiser la valeur de la fonction objectif (par exemple, augmenter les bénéfices ou réduire les pertes, respectivement).
		</li>
		<li>
			Toutes les contraintes doivent être des équations d'égalité (identités mathématiques).
		</li>
		<li>
			Toutes les variables (Xi) doivent être une valeur positive ou nulle (condition de non-négativité).
		</li>
		<li>
			Les termes indépendants (bi) de chaque équation doivent être non négatifs.
		</li>
	</ol>

    <p> 
    	Nous devons adapter la modélisation du problème à la forme standard pour l'application de l'algorithme du Simplexe.
	</p>

	<h4 class="mtitre">Type d'optimisation</h4>

	<p>
		Comme mentionné précédemment, l'objectif de la méthode sera d'optimiser la valeur de la fonction objectif. Mais, il y a deux options: obtenir la valeur optimale supérieure (maximiser) ou d'obtenir la valeur optimale inférieure (minimiser).
	</p>

	<p>
		Il y a également des différences dans l'algorithme entre l'objectif de maximisation et celui de la minimisation à propos du critère de condition d'arrêt pour terminer les itérations et les conditions d'entrée et de sortie de la base. Ainsi:
	</p>	

	<ul>
		<li><span class="gras">Objectif de maximisation</span>
			<p>
				Condition d'arrêt: lorsque la ligne Z n'apparaît pas de valeur négative.
			</p>
			<p>
				Condition d'entrée en base: la valeur la plus basse négative sur la ligne Z (ou la plus grande valeur absolue parmi les négatifs) indique la variable Pj entrante en base.
			</p>
			<p>
				Condition de sortie de la base: après l'obtention de la variable entrante, la variable qui sort est déterminé par le quotient le plus faible de P0/Pj des strictement positifs.
			</p>
		</li>
		<li><span class="gras">Objectif de minimisation</span>
			<p>
				Condition d'arrêt: lorsque sur la ligne Z il n'y a aucune valeur positive.

			</p>
			<p>
				Condition d'entrée en base: la plus grande valeur positive sur la ligne Z indique la variable Pj qui rentre en base.
			</p>
			<p>
				Condition de sortie de base: après l'obtention de la variable entrante, la variable qui sort est déterminé par le plus faible quotient de P0/Pj des strictement négatifs.
			</p>
		</li>
	</ul>

	<p>
		Cependant, il est possible de normaliser l'objectif du problème afin de toujours appliquer les mêmes critères par rapport à la condition d'arrêt de l'algorithme et les conditions d'entrée et sortie des variables de la base. De cette façon, si l'objectif est de minimiser la solution, on peut changer le problème à un autre équivalent de maximisation, simplement en multipliant la fonction objectif par "-1". Autrement dit, le problème de minimiser Z est équivalent au problème de maximisation (-1)·Z. Une fois la solution obtenue, il faudra aussi la multiplier par (-1).
	</p>
	<p><span class="gras">Avantages:</span> 
		Pas besoin de s'inquiéter par des nouveaux critères d'arrêt, de condition d'entrée ou de sortie de base puisqu'ils ne changent pas.
	</p>
	<p><span class="gras">Inconv&eacute;nients:</span> 
		Dans le cas où la fonction a tous les coefficients de ses variables basiques positifs, et en plus les contraintes sont du type d'inégalité "≤", si on effectue le changement de ces coefficients ils restent négatifs en accomplissant la condition d'arrêt dans la première itération (conformément à la ligne de la valeur de la fonction objectif, toutes les valeurs sont positives ou zéro). Obtenant dans ce cas par défaut, une valeur optimale pour la fonction égale à zéro.
	</p>
	<p><span class="gras">Solution:</span> 
		Ce problème n'existe pas vraiment, étant donné que pour que la solution soit supérieur à zéro, il est nécessaire qu'une contrainte ait imposé la condition " ≥" (et il serait un modèle pour la méthode des Deux Phases). Dans le cas en question, la vraie solution doit être zéro.
	</p>

	<h5 class="mtitre">Inscrivez changement des termes ind&eacute;pendants</h5>
	<p>
		On dit aussi que les termes indépendants (bi) de chaque équation doivent être non négatifs afin d'utiliser la méthode du Simplexe. à cette fin, si certaines des contraintes présentent un terme indépendant plus bas que 0 il faudra la multiplier par "-1" (en tenant compte du fait que cette opération affecte également au type de contrainte).
	</p>
	<p><span class="gras">Avantages:</span> 
		Avec cette simple modification de signes dans les contraintes correspondantes on facilite l'application de la méthode du Simplexe au problème de la modélisation
	</p>
	<p><span class="gras">Inconv&eacute;nients:</span> 
		On peut trouver que dans les contraintes où on doit modifier les signes des constantes, les types d'inégalités sont "≤" (après l'opération, ils resteront du type "≥"), donc il sera nécessaire de développer la méthode des Deux Phases. Cet inconvénient n'est pas maîtrisable, mais autrement il pourrait se produire dans le cas contraire et d'être bénéfique si les termes indépendants sont négatives dans toutes les contraintes d'inégalité de type "≥". S'il y a des contraintes du type "=" ils n'entraînent pas des avantages ou désavantages car il serait toujours nécessaire d'appliquer la méthode des Deux Phases.
	</p>
	<h5 class="mtitre">Normalisation des contraintes</h5>

	<p>
		Une autre condition du modèle standard du problème est que toutes les contraintes sont des équations d'égalité (autrement dites, contraintes d'égalité), il faudra changer les contraintes d'inégalité ou les inéquations en ces identités mathématiques.
	</p>
	<p>
		La condition de non-négativité des variables (x1, ..., xn ≥ 0) est la seule exception et reste identique.
	</p>
  	<ul>
	    <li><span class="gras">Contrainte de type "≤"</span>
			<p>
				Pour normaliser une contrainte d'inégalité du type " ≤", on ajoute une nouvelle variable, appelée variable d'écart xs (sur la condition de non-négativité: xs ≥ 0). Cette nouvelle variable apparaît avec un coefficient zéro dans la fonction objectif, et en ajoutant dans l'équation correspondante (qui va maintenant être une identité mathématique ou une équation d'égalité).
			</p>
			<div class="centre">
				a<span class="subindice">11</span>&middot;x<span class="subindice">1</span> + a<span class="subindice">12</span>&middot;x<span class="subindice">2</span> &le; b<span class="subindice">1</span> 
					<img src="img/fleche.png" width="40" height="25" alt="flèche" /> 
				a<span class="subindice">11</span>&middot;x<span class="subindice">1</span> + a<span class="subindice">12</span>&middot;x<span class="subindice">2</span> + 1&middot;x<span class="subindice">s</span> = b<span class="subindice">1</span>
			</div>
		</li>
		<li><span class="gras">Contrainte de type "≥"</span>
			<p>
				Dans le cas d'une inégalité de type "≥", on doit également ajouter une nouvelle variable appelée variable d'excès xs (avec la condition de non-négativité: xs ≥ 0). Cette nouvelle variable apparaît avec un coefficient zéro dans la fonction objectif, et en soustrayant l'équation correspondante.
			</p>
			<p>
				Or, un problème se pose avec la condition de non-négativité de cette nouvelle variable du problème. Les inéquations contenant le type d'inégalité "≥" seraient:
			</p>
			<div class="centre">
				a<span class="subindice">11</span>&middot;x<span class="subindice">1</span> + a<span class="subindice">12</span>&middot;x<span class="subindice">2</span> &ge; b<span class="subindice">1</span> 
					<img src="img/fleche.png" width="40" height="25" alt="flèche" />  
				a<span class="subindice">11</span>&middot;x<span class="subindice">1</span> + a<span class="subindice">12</span>&middot;x<span class="subindice">2</span> - 1&middot;x<span class="subindice">s</span> = b<span class="subindice">1</span>
			</div>
			<p>
				Lors de la première itération de la méthode du Simplexe, les variables de base ne seront pas à la base et deviendront zéro. Dans ce cas, la nouvelle variable xs, après convertir à zéro x1 et x2, prendra la valeur -b1 et ne accomplira pas la condition de non-négativité. On doit ajouter un autre variable xr, appelée variable artificielle, qui apparaîtra aussi avec un coefficient zéro dans la fonction objectif et en ajoutant dans la contrainte correspondante. Comme suit:
			</p>
			<div class="centre">
				a<span class="subindice">11</span>&middot;x<span class="subindice">1</span> + a<span class="subindice">12</span>&middot;x<span class="subindice">2</span> &ge; b<span class="subindice">1</span>
					<img src="img/fleche.png" width="40" height="25" alt="flèche" /> 
				a<span class="subindice">11</span>&middot;x<span class="subindice">1</span> + a<span class="subindice">12</span>&middot;x<span class="subindice">2</span> - 1&middot;x<span class="subindice">s</span> + 1&middot;x<span class="subindice">r</span> = b<span class="subindice">1</span>
			</div>
		</li>
		<li><span class="gras">Contrainte de type "="</span>
			<p>
				Contrairement à ce qu'on pourrait penser, pour les contraintes de type "=" (malgré d'être des identités) on a également besoin d'ajouter des variables artificielles xr. Comme dans le cas précédent, le coefficient sera zéro dans la fonction objectif et il ajoutera dans la contrainte correspondante.
			</p>
			<div class="centre">
				a<span class="subindice">11</span>&middot;x<span class="subindice">1</span> + a<span class="subindice">12</span>&middot;x<span class="subindice">2</span> = b<span class="subindice">1</span> 
					<img src="img/fleche.png" width="40" height="25" alt="flèche" /> 
				a<span class="subindice">11</span>&middot;x<span class="subindice">1</span> + a<span class="subindice">12</span>&middot;x<span class="subindice">2</span> + 1&middot;x<span class="subindice">r</span> = b<span class="subindice">1</span>
			</div>
		</li>
	</ul>
	<p>
		Dans ce dernier cas, il est clair que les variables artificielles sont en violation des lois de l'algèbre, de sorte qu'il sera nécessaire d'assurer que ces variables artificielles ont une valeur de 0 dans la solution finale. Ceci est accompli par la méthode des Deux Phases et donc on devra toujours le faire chaque fois qu'on a ce genre de variables.
	</p>
    <p>
    	Le tableau suivant résume le type de variable qui apparaît dans l'équation normalisée et son signe selon les inégalités:
    </p>
	<table class="table">
		<thead>
			<tr>
				<th>Forme d'inégalité</th>
				<th>Forme de la nouvelle variable</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>≥</td>
				<td>- excès + artificielle</td>
			</tr>
			<tr>
				<td>=</td>
				<td>+ artificielle</td>
			</tr>
			<tr>
				<td>≤</td>
				<td>+ écart</td>
			</tr>
		</tbody>
	</table>

	<h4 class="mtitre">Développement de la méthode du Simplexe</h4>
	<p>
		Une fois le modèle standardisé, il peut être nécessaire d'appliquer la méthode du Simplexe ou la méthode des Deux Phases. Voir dans la figure la manière d'actuation pour atteindre la solution du problème modélisé.
	</p>
	<img src="img/metsimplexe.png" width="643" height="910" class="centre" alt="Algorithme du Simplexe" title="Algorithme du Simplexe" />


	<p>
		Les étapes de chaque méthode sont expliquées pas à pas ci-dessous, en précisant les aspects à prendre en considération.
	</p>
	<h5 class="mtitre">Méthode du Simplexe</h5>
	<ul>
		<li><span class="gras">Élaboration du premier tableau:</span>
			<p>
				Les colonnes du tableau sont disposés comme suit: la première colonne du tableau contient les variables qui sont dans la base (ou variables basiques), c'est-à-dire, celles qui prennent la valeur pour offrir une solution, la deuxième colonne énumère les coefficients que ces variables de base ont dans la fonction objectif (cette colonne est appelé Cb), la troisième représente le terme indépendant de chaque contrainte (P0) ; à partir de cella, une colonne apparaît pour chacune des variables de décision et d'écart présentes dans la fonction objectif (Pj). Pour obtenir une vue plus claire du tableau, on ajoute une ligne qui contient les titres de chacune des colonnes.
			</p>
			<p>
				Sur ce tableau, on ajoute deux nouvelles lignes: une d'elles, qui est à la tête du tableau, où les coefficients des variables de la fonction objectif se montrent, et une dernière ligne qui contient la valeur de la fonction objectif et les coûts réduits Zj - Cj.
			</p>
			<p>
				Les coûts réduits montrent la possibilité d'une amélioration sur la solution Z0. C'est pourquoi sont aussi appelés des valeurs indicatrices.
			</p>
			<p>
				Ce qui suit est l'aspect général du tableau de la méthode du Simplexe:
			</p>
			<table class="table ">
		        <thead>
					<tr>
						<th colspan="7" class="gras" style="width:400px;">Tableau</th>
					</tr>
		        </thead>
		        <tbody>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>C<span class="subindice">1</span></td>
						<td>C<span class="subindice">2</span></td>
						<td>...</td>
						<td>C<span class="subindice">n</span></td>
					</tr>
					<tr>
						<td class="gras elem">Base</td>
						<td class="gras elem">C<span class="subindice">b</span></td>
						<td class="gras elem">P<span class="subindice">0</span></td>
						<td class="gras elem">P<span class="subindice">1</span></td>
						<td class="gras elem">P<span class="subindice">2</span></td>
						<td class="gras elem">...</td>
						<td class="gras elem">P<span class="subindice">n</span></td>
					</tr>
					<tr>
						<td>P<span class="subindice">1</span></td>
						<td>C<span class="subindice">b1</span></td>
						<td>b<span class="subindice">1</span></td>
						<td>a<span class="subindice">11</span></td>
						<td>a<span class="subindice">12</span></td>
						<td>...</td>
						<td>a<span class="subindice">1n</span></td>
					</tr>
					<tr>
						<td>P<span class="subindice">2</span></td>
						<td>C<span class="subindice">b2</span></td>
						<td>b<span class="subindice">2</span></td>
						<td>a<span class="subindice">21</span></td>
						<td>a<span class="subindice">22</span></td>
						<td>...</td>
						<td>a<span class="subindice">2n</span></td>
					</tr>
					<tr>
						<td>...</td>
						<td>...</td>
						<td>...</td>
						<td>...</td>
						<td>...</td>
						<td>...</td>
						<td>...</td>
					</tr>
					<tr>
						<td>P<span class="subindice">m</span></td>
						<td>C<span class="subindice">bm</span></td>
						<td>b<span class="subindice">m</span></td>
						<td>a<span class="subindice">m1</span></td>
						<td>a<span class="subindice">m2</span></td>
						<td>...</td>
						<td>a<span class="subindice">mn</span></td>
					</tr>
					<tr>
						<td class="gras elem">Z</td>
						<td>&nbsp;</td>
						<td>Z<span class="subindice">0</span></td>
						<td>Z<span class="subindice">1</span>-C<span class="subindice">1</span></td>
						<td>Z<span class="subindice">2</span>-C<span class="subindice">2</span></td>
						<td>...</td>
						<td>Z<span class="subindice">n</span>-C<span class="subindice">n</span></td>
					</tr>
				</tbody>
			</table>

			<p>
				Toutes les valeurs du tableau sont fournies par le modèle du problème à moins que les valeurs de la ligne Z (ou ligne indicatrice). Elles sont obtenues comme suit: Zj = Σ(Cbi·Pj) pour i = 1..m, où si j = 0, P0 = bi et C0 = 0, autrement Pj = aij.
			</p>
	        <p>
	        	On observe, lors de l'exécution de la méthode du Simplexe, que dans ce premier tableau, toutes des variables d'écart occupent la base et donc (tous les coefficients des variables d'écart sont à 0 dans la fonction objectif) la valeur initiale de Z est nulle.
	        </p>
	        <p>
	        	Pour la même raison, il n'est pas nécessaire d'effectuer les calculs de la réduction des coûts dans le premier tableau, et il peut être directement déterminée comme le changement de signe des coefficients de chaque variable dans la fonction objectif, -Cj.
	        </p>
	   	</li>
        <li><span class="gras">Condition d'arrêt:</span>
			<p>
				Il répond à la condition d'arrêt lorsque la ligne indicatrice ne contient pas de valeur négative parmi les coûts réduits (lorsque l'objectif est de maximiser), c'est-à-dire, qu'il n'y a aucune possibilité d'amélioration.
			</p>
	        <p>
	        	Si la condition d'arrêt n'est pas accomplie, il est nécessaire d'effectuer encore une itération de l'algorithme, c'est- à-dire, la détermination de la variable qui devient basique et cesse de l'être, de trouver l'élément pivot, de mettre à jour les valeurs du tableau et de vérifier si la condition d'arrêt s'accomplie cette fois.
	        </p>
	        <p>
	        	Il est également possible de déterminer que le problème est restreint et sa solution pourra toujours être améliorée. Dans ce cas, il n'est pas nécessaire de poursuivre l'itération indéfiniment et on peut mettre fin à l'algorithme. Cette situation se produit lorsque dans la colonne de la variable entrante en base toutes les valeurs sont négatives ou nulles.
	        </p>
        </li>
        <li><span class="gras">Choix de la variable qui entre en base:</span>
	        <p>
	        	Lorsqu'une variable devient basique, c'est-à-dire, elle entre en base, elle devient à faire partie de la solution. Notant la réduction des coûts dans la ligne Z, on décide que la variable de la colonne dans laquelle il s'agit de la valeur la plus faible (ou la valeur absolue la plus élevée) parmi les valeurs négatives entre en base.
	        </p>
        </li>
        <li><span class="gras">Choix de la variable qui sort de base:</span>
	        <p>
	        	Une fois la variable entrante est déterminée, on détermine que la variable sortante de base est située dans la ligne dont le quotient P0/Pj est le plus petit des strictement positifs (étant donné que cette opération se fera uniquement lorsque Pj est supérieur à 0).
	        </p>
        </li>
        <li><span class="gras">Élément pivot:</span>
			<p>
				L'élément pivot du tableau est marqué par l'intersection entre la colonne de la variable entrante et la ligne de la variable sortante.
			</p>
        </li>
        <li><span class="gras">Mise à jour du tableau:</span>
	        <p>
	        	Les lignes correspondantes à la fonction objectif et aux titres resteront inchangées dans le nouveau tableau. Toutes les autres valeurs faudra les calculer comme on l'expliqué ci-dessous:
	        </p>
			<ul>
	            <li>
	            	Dans la ligne d'élément pivot de chaque nouvel élément est calculée en tant que:
	              <div class="center">
	              	<i>
	              		Élément ligne pivot = Élément ancienne ligne pivot / Pivot
	              	</i>
	              </div>
	            </li>
	            <li>
	            	Dans les lignes restantes chaque élément est calculé:
	              
	            	<div class="center">
	            		<i>
	            			Nouvel élément ligne = Élément ancienne ligne - (Élément ancienne ligne en colonne pivot * Nouvel élément ligne pivot)
	            		</i>
	            	</div>
	            </li>
	        </ul>
	        <p>
	        	De cette façon, on atteint que tous les éléments de la colonne de la variable entrante sont nuls sauf celui de la ligne de la variable sortante dont la valeur est 1. (Ceci est analogue à utiliser la méthode de Gauss-Jordan pour la résolution des systèmes d'équations linéaires).
	        </p>
        </li>
	</ul>
	<h5 class="mtitre">Méthode des Deux Phases</h5>
	<p>
		La méthode des Deux Phases est utilisée lorsque les variables artificielles apparaissent sous forme standard ou canonique du problème. La première phase vise à résoudre le problème auxiliaire Z' afin de minimiser la somme des variables artificielles et de le rendre nul (dans le but d'éviter les incohérences mathématiques). Après avoir résolu le premier problème, et tant qu'il est comme prévu le résultat, le tableau qui en résulte est réorganisé pour une utilisation dans la deuxième phase sur le problème d'origine.
	</p>
	<p>
		Sinon, le problème n'est pas faisable, c'est-à-dire, il n'y a pas de solution et il ne faudra pas continuer avec la deuxième phase.
	</p>
	<h6 class="mtitre">PHASE 1</h6>
	<p>
		Cette première étape est analogue à la méthode du Simplexe, à exception de la construction de le premier tableau, en plus d'avoir besoin de tenir compte du résultat obtenu pour déterminer si la deuxième phase se développe.
	</p>
	<p>
		Dans ce cas, le dernier tableau de cette phase sera, avec quelques modifications, utilisée en tant que tableau initiale pour la deuxième phase.
	</p>
	<ul>
		<li><span class="gras">Construction du premier tableau:</span>
			<p>
				On prépare de manière analogue à le tableau initiale de la méthode du Simplexe, mais avec quelques différences.
			</p>
			<p>
				Comme indiqué, dans cette première phase on résout un problème auxiliaire (la minimisation de l'addition des variables artificielles) avec une fonction d'objectif auxiliaire. Par conséquent, dans la première ligne du tableau, qui montre les coefficients des variables de la fonction objectif, tous les termes, sauf les coefficients des variables artificielles, seront à zéro. La valeur de chacun de ces coefficients est "-1" car on minimise l'addition de ces variables (Ne pas oublier que minimiser Z 'est la même chose que maximiser (-1)·Z').
			</p>
			<p>
				L'autre différence pour le premier tableau, c'est que maintenant, il est nécessaire de calculer la ligne Z (ou la ligne indicatrice).
			</p>

			<table class="table">
				<thead>
					<tr>
					<th colspan="9" style="width:400px;">Tableau</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>C<span class="subindice">0</span></td>
						<td>C<span class="subindice">1</span></td>
						<td>C<span class="subindice">2</span></td>
						<td>...</td>
						<td>C<span class="subindice">n-k</span></td>
						<td>...</td>
						<td>C<span class="subindice">n</span></td>
					</tr>
					<tr>
						<td class="gras elem">Base</td>
						<td class="gras elem">C<span class="subindice">b</span></td>
						<td class="gras elem">P<span class="subindice">0</span></td>
						<td class="gras elem">P<span class="subindice">1</span></td>
						<td class="gras elem">P<span class="subindice">2</span></td>
						<td class="gras elem">...</td>
						<td class="gras elem">P<span class="subindice">n-k</span></td>
						<td class="gras elem">...</td>
						<td class="gras elem">P<span class="subindice">n</span></td>
					</tr>
					<tr>
						<td>P<span class="subindice">1</span></td>
						<td>C<span class="subindice">b1</span></td>
						<td>b<span class="subindice">1</span></td>
						<td>a<span class="subindice">11</span></td>
						<td>a<span class="subindice">12</span></td>
						<td>...</td>
						<td>a<span class="subindice">1n-k</span></td>
						<td>...</td>
						<td>a<span class="subindice">1n</span></td>
					</tr>
					<tr>
						<td>P<span class="subindice">2</span></td>
						<td>C<span class="subindice">b2</span></td>
						<td>b<span class="subindice">2</span></td>
						<td>a<span class="subindice">21</span></td>
						<td>a<span class="subindice">22</span></td>
						<td>...</td>
						<td>a<span class="subindice">2n-k</span></td>
						<td>...</td>
						<td>a<span class="subindice">2n</span></td>
					</tr>
					<tr>
						<td>...</td>
						<td>...</td>
						<td>...</td>
						<td>...</td>
						<td>...</td>
						<td>...</td>
						<td>...</td>
						<td>...</td>
						<td>...</td>
					</tr>
					<tr>
						<td>P<span class="subindice">m</span></td>
						<td>C<span class="subindice">bm</span></td>
						<td>b<span class="subindice">m</span></td>
						<td>a<span class="subindice">m1</span></td>
						<td>a<span class="subindice">m2</span></td>
						<td>...</td>
						<td>a<span class="subindice">mn-k</span></td>
						<td>...</td>
						<td>a<span class="subindice">mn</span></td>
					</tr>
					<tr>
						<td class="gras elem">Z</td>
						<td>&nbsp;</td>
						<td>Z<span class="subindice">0</span></td>
						<td>Z<span class="subindice">1</span></td>
						<td>Z<span class="subindice">2</span></td>
						<td>...</td>
						<td>Z<span class="subindice">n-k</span></td>
						<td>...</td>
						<td>Z<span class="subindice">n</span></td>
					</tr>
				</tbody>
			</table>

			<p>
				Étant Zj = Σ(Cbi·Pj) - Cj pour i = 1..m, où si j = 0, P0 = bi et C0 = 0, et à l'inverse Pj = aij.
			</p>
        </li>
        <li><span class="gras">Condition d'arrêt et passage à la phase 2:</span>
			<p>
				La condition d'arrêt est la même que dans la méthode du Simplexe. Autrement dit, lorsque dans la ligne indicatrice aucun des valeurs des coûts réduits est négatif (car, comme on a posé l'objectif est la maximisation de (-1)·Z ').
			</p>
			<p>
				Accomplie la condition d'arrêt, il est nécessaire de déterminer s'il est possible de procéder à la deuxième phase afin d'obtenir une solution optimale du problème initial. Cela se fait en observant le résultat obtenu dans la première phase: si sa valeur est 0, cela signifie que le problème initial a une solution et il est possible de la calculer, dans le cas contraire, il indique qu'il n'est pas faisable et qu'il n'y a pas de solution.
			</p>
		</li>
	</ul>

	<h6 class="gras">PHASE 2</h6>
	<p>
		La deuxième phase de la méthode des Deux Phases est élaborée exactement comme la méthode du Simplexe, sauf qu'avant de commencer les itérations il faut supprimer les colonnes correspondantes aux variables artificielles, et reconstruire le tableau d'origine.
	</p>
	<ul>
		<li><span class="gras">Supprimer colonne de variables artificielles:</span>
			<p>
				Si nous sommes parvenus à la conclusion que le problème initial a une solution, on doit préparer notre tableau pour la deuxième phase. Cette étape est très simple, il suffit de supprimer les colonnes correspondantes aux variables artificielles.
			</p>
		</li>
		<li><span class="gras">Construction du tableau initiale:</span>
			<p>
				Le tableau initial, dans ce cas, reste à peu près égal au dernier tableau de la première phase. La ligne de la fonction objectif devrait être modifié seulement par celle du problème initial et recalculer la ligne Z (de la même manière que dans le premier tableau de la phase 1).
			</p>
		</li>
	</ul>
	<p>
		À partir de ce point, toutes les itérations, jusqu'atteindre la solution optimale du problème, ne montrent aucune différence avec la méthode du Simplexe.
	</p>
	<h4 class="mtitre">Identifier des anomalies et des solutions</h4>
	<p><span class="gras">Solution optimale:</span>
		lorsque la condition d'arrêt est accomplie et il n'y a pas des variables artificielles en base avec une valeur positive (les valeurs sont indiquées dans la colonne P0), l'optimalité est atteinte. La valeur Z0 actuelle est la solution optimale du problème, elle est accomplie pour les variables qui sont en base. Si c'est un problème de minimisation, la valeur optimale obtenue est multipliée par "-1".
	</p>
	<p><span class="gras">Solutions infinies:</span> 
		accomplie la condition d'arrêt, si une variable de décision non-base a une valeur 0 dans la ligne Z, veut dire qu'il y a une autre solution qui fournit la même valeur optimale pour la fonction objectif. Dans ce cas, le problème admit une infinité de solutions, toutes comprises dans le segment (ou une partie du plan, région de l'espace, etc., selon le nombre de variables du problème) défini par A·X1 + B·X2 = Z0. Grâce à une nouvelle itération et en faisant que la variable de décision ayant 0 dans la ligne Z entre en base, une solution différente est obtenue pour la même valeur optimale.
	</p>
	<p><span class="gras">Solution illimité (restreinte):</span>
		si toute la colonne de la variable entrante en base a tous les éléments négatifs ou nuls, il s'agit d'un problème restreint, c'est-à-dire, qu'il a une solution illimitée. Il n'y a aucune valeur optimale spécifique pour la fonction objectif, mais lorsque la valeur des variables augmente, la valeur Z augmente également sans violer les contraintes.
	<p><span class="gras">Il n'y a pas de solution:</span>
		lorsqu'aucun point ne satisfait toutes les contraintes du problème, l'infaisabilité se produit n'ayant pas de solution possible pour cela. Dans ce cas, après avoir fini toutes les itérations de l'algorithme, il y a des variables artificielles en base dont la valeur est supérieure à zéro.
	</p>
	<p><span class="gras">Même résultat variable entrante:</span> 
		quand il y a une égalité dans la condition de décision de variables entrantes on peut choisir l'une d'elles sans affecter la solution finale. Par contre, il y a une influence dans le nombre d'itérations nécessaires pour obtenir la solution. Il est conseillé d'opter pour les variables de base, car elles sont celles qui feront partie de la solution optimale.
	<p><span class="gras">Même résultat variable sortante:</span> 
		on peut de nouveau choisir l'une d'elles. Toutefois, afin de ne pas prolonger le problème et d'éviter l'entrée dans une boucle sans fin (cas dégénéré), on discrimine en faveur des variables de décision pour qu'elles restent dans la base. Dans le cas d'être dans la première phase de la méthode des Deux Phases, on optera pour sortir de base les variables artificielles.
	</p>
	<p><span class="gras">Curiosité en Phase 1:</span>
		à la fin de la phase 1, si le problème initial a une solution, toutes les variables artificielles dans la ligne indicatrice doivent être réglées sur " 1".
	</p>
	<p><span class="gras">Peut être nul l'élément pivot?</span> 
		Non, l'élément pivot est toujours strictement positif puisqu'on n'effectue que les quotients parmi de valeurs non négatives et supérieures à zéro (face à un problème de maximisation).
	</p>


</div>





<?php include("views/footer.php"); ?>