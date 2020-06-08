<template>
    <div>
          <v-app-bar id="fond" dense dark >

            <v-toolbar-title id="menuPolice">Simplexylife</v-toolbar-title>

            <v-spacer></v-spacer>

            <v-btn icon>
              <v-icon>mdi-account-circle</v-icon>
            </v-btn>

            <v-btn icon @click="dialog = true">
              <span class="mdi mdi-24px mdi-page-first"></span>
            </v-btn>
              

            <v-menu left bottom >

            </v-menu>

          </v-app-bar>

          <v-dialog v-model="dialog" max-width="600" persistent>
              <v-card >
                <v-card-title id="fond">
                  <span class="headline" style="color:black;">Vous nous quittez déjà ...</span>
                </v-card-title>
        
                  <v-img  id="sad" src="../assets/sad.gif" width="400" height="300" ></v-img>

                <v-row align="center" justify="center" >
                  <v-card-actions>
                    <v-btn x-large color="purple darken-2" text @click="dialog = false;">Non</v-btn>
                    <v-btn x-large color="red" text  @click="deconnexion()">Oui</v-btn>
                  </v-card-actions>
                </v-row>
              </v-card>
            </v-dialog>
    </div>
</template>

<script>
import axios from "axios"

import store from '@/store/index.js'

import { mapMutations } from "vuex"



export default ({
  icons: {
    iconfont: 'md',
  },
  data: () => ({
    dialog : false,
  }),

  methods: {
    ...mapMutations(['setAuthenticated']),

    deconnexion: function (event) {
      axios.post('http://localhost:80/backend/index.php?action=deconnexion', {
      //le .delete me met une erreur CORS du coup j'ai laissé .post en attendant
      //Header set Access-Control-Allow-Methods: DELETE, POST, GET, OPTIONS
        uniq_id: localStorage.getItem("uniq_id"),
        exist: localStorage.getItem("exist")
      }
      )
      .then( response => {
        console.log(response);

        localStorage.clear();
        this.setAuthenticated(false);

        this.$router.push({name: 'HomeConnexion'})
          .catch(() => {})

      })
      .catch( error => {
        console.log(error);
      });
      }
    }
})

</script>

<style>
#sad{
  margin-left: auto;
  margin-right: auto;
}

</style>