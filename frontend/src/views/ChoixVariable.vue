<template>
	   <div id="app" >
      <v-app id="fond">
       <v-form>
          <v-container >
            <v-row>
              <div class="cont"> 
                <h1 id="firstTitle" > Choix Variable </h1>
                <div id="connectFields">
                <select>
            <option value="min">min</option>
            <option value="max">max</option>
            </select>
            <span>
              <input color="white">
              <label>x1
                  <sub></sub>
              </label> 
               <input>x2     
            </span>
              </div>
                <v-row >
                  <v-col class="text-center">
                    <div>
                <v-btn style="margin-bottom:10px" color="white">Calculer</v-btn>
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