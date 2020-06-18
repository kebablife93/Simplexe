 <?php include("views/menu.php"); ?>


        <div class="container">
            <div class="jumbotron" style="text-align: center; margin-bottom: 30px;">
              <h1 >Choix des variables</h1>

                    <form method="POST" action=" Choixelement.php">
                        <div>
                            <p>Combien de variables?</p>
                            <input type="number" name="variables" id="variables">
                        </div>
                        <div >
                            <p>Combien de contraites?</p>
                            <input type="number" name="contraintes" id="contraintes">
                        </div>

                        <div id="submit">
                            <input type="submit" value="Calculer">
                        </div>
                    </form>

            </div>
        </div>
        
<?php include("views/footer.php"); ?>