<template>
    <v-container>
      <v-date-picker  locale="fr-fr" @change="setDate"></v-date-picker>
        <!-- event to get new desktop info from child component -->
       <addPosteModal @recharge-vue="initialize"  />
     
        <v-row>
            <v-col md='4' v-for='(ordinateur,key) in listepostes' :key='key'>
                <ordinateur :ordinateurId='ordinateur.id' :date="jour" :ordinateurName='ordinateur.nomPoste'/>
            </v-col>
        </v-row>

    </v-container>
</template>

<script src="../views/home.js"></script>
