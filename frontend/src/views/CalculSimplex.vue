<template>
	   <div id="app" >
      <v-app id="fond">
       <v-form>
          <v-container >
            <v-row>
              <div class="cont"> 
                <h1 id="firstTitle" > Résolution de Simplex </h1>
                <div id="connectFields">
                <v-col>
                  <v-text-field v-model="nbvariable" dark color="white" label="Combien de variables ?" required ></v-text-field>
                </v-col>

                <v-col>
                  <v-text-field v-model="nbcontrainte" dark color="white"label="Combien de contraites ?" required ></v-text-field>
                </v-col>
              </div>
                <v-row >
                  <v-col class="text-center">
                    <div>
                  <v-btn text :to="{ name: 'ChoixVariable', params: {  nbvar: this.nbvariables, nbcontr: this.nbcontrainte}}" >
                    Calculer
                  </v-btn>
                    </div>
                  </v-col>
                </v-row>
              </div>
            </v-row>
          </v-container>

        </v-form>
      </v-app>
    </div>
</template>

<script>

export default{

  data:()=>({

    nbvariable:'',
    nbcontrainte:''

  })
}

</script>