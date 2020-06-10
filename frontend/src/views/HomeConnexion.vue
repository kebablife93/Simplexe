<template>
  	<div id="app" >
      <v-app id="fond" >
        <v-form ref="connectform" :value="valid" @submit.prevent.stop="connexion()" lazy-validation>
          <v-container >
            <v-row>
              <div class="cont"> 
                <h1 id="firstTitle" > CONNEXION </h1>
                <div id="connectFields">
                <v-col>
                  <v-text-field dark color="white" v-model="account.username" :rules="nameRules" label="Pseudo" required ></v-text-field>
                </v-col>

                <v-col>
                  <v-text-field dark color="white" v-model="account.password" :append-icon="show ? 'mdi-eye' : 'mdi-eye-off'" @click:append="() => (show = !show)" :type="show ? 'password' : 'text'" :rules="passRules" label="Mot de passe" required ></v-text-field>
                </v-col>
              </div>
                <v-row >
                  <v-col class="text-center">
                    <div>
                      <v-btn style="margin-bottom:10px" color="white" type="submit">Valider</v-btn>
                    </div>
                  </v-col>
                </v-row>
              </div>
            </v-row>
          </v-container>

          <v-col class="text-center">
             <router-link to="/registration">Pas encore inscrit ? C'est par ici !</router-link>
          </v-col>

          <div class="text-center" v-if="connexionFailed"> Le pseudo ou le mot de passe est incorrect. </div>

        </v-form>
      </v-app>
    </div>
</template>

<script>
import axios from "axios";

import store from '@/store/index.js' 

import { mapMutations } from "vuex"

import { mapState } from "vuex"

export default {
  name: "HomeConnexion",
  data: () => ({
      account: {
        username:"",
        password:"",
      },
      valid: false,
      show: true,
      connexionFailed: false,

      nameRules: [
      value => !!value || 'Pseudo manquant',
      ],
      passRules: [
      value => !!value || "Mot de passe manquant.",
      ],
  }),
  methods: {
    ...mapMutations(['setAuthenticated']),//je chope la fonction setaythanticated grâce à mapmutations dans le store

    connexion() { 
      console.log("je suis dans la fonction connexion");
      console.log(this.account);
      console.log("Username :" + this.account.username);

      console.log("Password :" + this.account.password);

      if(this.$refs.connectform.validate()){
        console.log("je suis dans le if");

        axios.post('http://localhost:80/backend/index.php?action=connexion', {
                username: this.account.username,
                password: this.account.password
              })
              .then( response => {
                console.log(response);

                localStorage.setItem("uniq_id", response.data['uniq_id']);
                localStorage.setItem("exist", response.data['exist']);

                this.setAuthenticated(true);

                this.$router.push({path: 'calcul'});
              })
              .catch( error => {
                console.log(error);
                this.connexionFailed = true;
              });
      }
      else{
        console.log("c'est " + this.valid);
      }
    }
  }

}

</script>

<style>

#firstTitle{
  text-align: center;
  color: white;
  font-family: 'Roboto';
  margin-top: 20px;
}

.cont{
  width:400px;
  background-image: url("../assets/vert.jpg");
  border-radius: 50px;
  margin-top: 100px;
  }


#fond{
  background-image: url("../assets/vert.jpg");
}


#connectFields{
  margin-left: 10px;
  margin-right: 10px;
  margin-top:  10px;
  margin-bottom: 20px;
}

#back{

  background-color:purple;
}

</style>