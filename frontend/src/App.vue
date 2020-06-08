<template>
  
	<div>
    <div v-if="authenticated"> 
      <AppBarExit/>
    </div>
    <div v-else>
      <AppBarConnect/>
    </div>
    <v-content>
      <router-view></router-view>
    </v-content>
  </div>
  
</template>

<script>

import AppBarConnect from '@/components/AppBarConnect.vue'

import AppBarExit from '@/components/AppBarExit.vue'

import store from '@/store/index.js'

import { mapState } from "vuex"

export default ({
  name: 'App',
  components: {
    AppBarConnect,
    AppBarExit
  },
  computed: {
  	...mapState(['authenticated'])
  }
})

</script>
   