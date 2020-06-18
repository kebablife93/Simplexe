 <?php include("views/menu.php"); ?>
        



    	<?php
    	$variables=$_POST["variables"];
    	$contraintes=$_POST["contraintes"];
    	?>


        <div class="container">
            <div class="jumbotron" style="text-align: center; margin-bottom: 30px;">
              <h1  style="margin-bottom: 30px;">Resolution Simplex</h1>


                <form method="POST" action="Calcul.php">
                    <div>
                        <select>
                        <option value="min">min</option>
                        <option value="max">max</option>
                        </select>
                        <?php for($i=1; $i < $variables; $i++): ?>
                        <span>
                            <input type="number" name=<?= 'x'.$i?> id=<?= 'x'.$i?>>
                            <label>x
                                <sub><?= $i ?></sub>
                            </label>
                        </span>+
                        <?php endfor; ?>
                        <span>
                            <input type="number" name=<?= 'x'.$i?> id=<?= 'x'.$i?>>
                            <label>x
                                <sub><?= $i ?></sub>
                            </label>
                        </span>
                    </div>

                
                	<?php
                    $j=1;
                    while( $j<= $contraintes): ?>
                        <div>
                        <?php for($i=1; $i < $variables; $i++): ?>
                        
                            <span>
                            <input type="number" name=<?= 'conx'.$j.$i?> id=<?= 'conx'.$j.$i?>>
                            <label>x
                                <sub><?= $i ?></sub>
                            </label>
                            </span>
                            +
                            <?php endfor; ?>
                            <span>
                                <input type="number" name=<?= 'conx'.$j.$i?> id=<?= 'conx'.$j.$i?>>
                                <label>x
                                    <sub><?= $i ?></sub>
                                </label>
                            </span>
                            <span>
                            <select>
                                <option value="2"><=</option>
                                <option value="4">>=</option>
                                <option value="1">=</option>
                            </select>
                            
                                <input type="number" name="reel" id="reel">
                            </span>
                        </div>
                	<?php
                    $j++;
                    endwhile; ?>
                        
                        <div id="submit">
                            <input type="submit" value="Calculer">
                        </div>
                </form>
            </div>
        </div>




<?php include("views/footer.php"); ?>
