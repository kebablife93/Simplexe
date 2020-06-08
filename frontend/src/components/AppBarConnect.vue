<template>
    <div>
          <v-app-bar id="fond" dense dark >

          
            <v-toolbar-title id="menuPolice">Simplexylife</v-toolbar-title>

            <v-spacer></v-spacer>

            <div >
                <v-btn id="btnPolice" text large color="white" to="/connexion" class="hidden-xs-only">Se connecter</v-btn>
            </div>

            <v-divider class="mx-4" inset vertical ></v-divider>

            <div >
                <v-btn id="btnPolice" text large color="white" to="/registration" class="hidden-xs-only">S'inscrire</v-btn>
            </div>

            <v-menu class="hidden-sm-and-up" v-model="displayMenu">
              <template v-slot:activator="{ on }">
                <v-btn dark icon v-on="on" >
                  <v-app-bar-nav-icon class="hidden-sm-and-up" v-on="on"></v-app-bar-nav-icon>
                </v-btn>
              </template>

              <v-list>
                <v-list-item to="/connexion">
                  <v-list-item-title>Se connecter</v-list-item-title>
                </v-list-item>
                <v-list-item to="/registration">
                  <v-list-item-title>S'inscrire</v-list-item-title>
                </v-list-item>


              </v-list>
            </v-menu>

          </v-app-bar>
    </div>
</template>

<script>

export default {

 data: () => ({
  displayMenu: false
 })
}

</script>

<style>

#menuPolice{

  font-family: 'Roboto';
  font-size: 1.3em;
}

#btnPolice{
   font-family: 'Roboto';
  font-size: 1em;
}
</style>