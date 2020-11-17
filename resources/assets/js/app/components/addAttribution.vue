
<template>
<div>
     <v-btn
        color="primary"
        dark
        @click.stop="dialog = true"
      >
      Ajout attribution
      </v-btn>

 <v-dialog
        v-model="dialog"
        max-width="290"
      >
        <v-card>
          <v-card-title class="headline">
           Ajout attribution
          </v-card-title>
   <input placeholder="nom client" v-model="nomClient" v-on:input="searchClient">

          <v-select
          
            label="clients"
            :selected="selected"
            item-text="nomClient" item-value="id"
            :items="clients"
            v-model="selected"
          
          ></v-select>
     
          <v-card-actions>
            <v-spacer></v-spacer>

            <v-btn
              color="green darken-1"
              text
            @click="attribuer"
            >
             +
            </v-btn>

          </v-card-actions>
        </v-card>
      </v-dialog>
</div>
</template>

<script src="./addAttribution.js"></script>