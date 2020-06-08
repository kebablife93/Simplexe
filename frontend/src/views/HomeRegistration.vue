<template>
  	<div id="app" >
      <v-app id="fond">
        <v-form ref="registform" :value="valid" @submit.prevent.stop="registration()" lazy-validation>
          <v-container >
            <v-row>
              <div class="cont"> 
                <h1 id="firstTitle"> INSCRIPTION </h1>
                <div id="connectFields">
                <v-col>
                  <v-text-field dark color="white" v-model="account.username" :rules="nameRules" :counter="15" label="Pseudo" required ></v-text-field>
                </v-col>

                <v-col>
                  <v-text-field dark color="white" v-model="account.password" :append-icon="show ? 'mdi-eye' : 'mdi-eye-off'" @click:append="() => (show = !show)" :type="show ? 'password' : 'text'" :rules="[passRules.password]" @input="_=>password=_":counter="8" label="Mot de passe" required ></v-text-field>
                </v-col>

                <v-col>
                  <v-text-field dark color="white" v-model="account.confirmation" :append-icon="showconfirm ? 'mdi-eye' : 'mdi-eye-off'" @click:append="() => (showconfirm = !showconfirm)" :type="showconfirm ? 'password' : 'text'"  :rules="[required(),confirmation(account.password)]" label="Confirmation mot de passe" required ></v-text-field>
                </v-col>
              </div>

                <v-row >
                      <v-col class="text-center">
                        <div>
                      <v-btn style="margin-bottom:10px"  white @click="snackbar = true" type="submit">Valider</v-btn>

                      <div class="text-center"  v-if="registrationSuccess">
                        <v-snackbar color="success" v-model="snackbar" :timeout="timeout"> 
                          {{ text }} 
                            <v-btn to="/connexion" color="white" text @click="snackbar = false"> OK </v-btn>

                        </v-snackbar>
                      </div>

                    </div>
                  </v-col>
                </v-row>
              </div>
            </v-row>
          </v-container>

          <v-col class="text-center">
             <router-link to="/connexion">Déjà inscrit ? Connecte toi !</router-link>
          </v-col>

          <div class="text-center" v-if="pseudoTaken">Pseudo déjà pris :( </div>

        </v-form>
      </v-app>
    </div>
</template>

<script>
import axios from "axios";
export default {
  name: "HomeRegistration",
  data: () => ({
      account: {
        username:"",
        password:"",
        confirmation:"",
      },
      valid: false,
      show: true,
      showconfirm: true,
      registrationSuccess: false,
      pseudoTaken: false,
      snackbar: false,
      text : 'Félicitation ! Votre compte a été créé avec succès !',
      timeout : 0,

      nameRules: [
      value => !!value || 'Pseudo manquant',
      value => value.length <= 15 || 'Le pseudo doit contenir moins de 15 caractères',
      //si this.pseudoTaken = true || 'Ce pseudo existe déjà.',
      ],

      passRules: {
        required: value => !!value || "Mot de passe manquant.",
        password: value => {
          const pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
          return (
            pattern.test(value) ||
            "Minimum 8 caractères avec au moins une majuscule, un nombre et un caractère spécial."
          );
        }
      },

      passconfirmRules: [
      value => !!value || "Mot de passe manquant.",
      value => value === this.account.password || 'Les mots de passes sont différents',
      ],
  }),

  methods: {
    required: () => {
        return (value) => !!value ||'Mot de passe manquant.'
      },
    confirmation: (password) => {
      return (value) => {
        return password == value || 'Les mots de passes sont différents'
      }
    },
    registration() { 
      console.log("je suis dans la fonction registration");
      console.log(this);
      console.log(this.account);
      console.log(this.$refs.registform.validate());

      if(this.$refs.registform.validate()){
        console.log("je suis dans le if");
        axios.post('http://localhost:80/backend/index.php?action=registration', {
                username: this.account.username,
                password: this.account.password
              })
              .then( response => {
                console.log(response);
                this.registrationSuccess = true;
                console.log(this.registrationSuccess);
              })
              .catch( error => {
                console.log(error);
                this.pseudoTaken = true;
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

.container{
  width:400px;
  border-radius: 50px;
  }
</style>