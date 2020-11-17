<template>
    <v-card outlined>
        <v-list>
        <v-list-item three-line>
            <v-list-item-content>
                <v-list-item-title class="headline mb-1">
                 
                    {{ ordinateurName }}

                    <v-row  v-for="(h,i) in heures" :key="i" class="horaire">
                        <v-col cols="1">
                   {{ h }}   h 
  </v-col>
  <v-col cols=9>
                    <attributions :poste="ordinateurId" @reload-attr="initialize"  :listeattributions="listeattributions" :heure="h"/>
          </v-col>         
                    <v-col  cols="2">
                           <addAttribution :postes="ordinateurId" :heure="h"/>       
                    </v-col>
              </v-row>
          
                </v-list-item-title>
            </v-list-item-content>
        </v-list-item>
</v-list>
 
    </v-card>
</template>
<style>
.headline{
    color:blue;
}
.horaire{
    background-color: aquamarine;
    margin: 10px 0;
}
</style>
<script src="./ordinateur.js"></script>