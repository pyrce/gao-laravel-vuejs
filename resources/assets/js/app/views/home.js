const { defaults } = require("lodash");
import Axios from 'axios';
import ordinateur from './ordinateur.vue';
import addPosteModal from '../components/addPosteModal.vue';

export default {
name:"home",
 data(){
 return{listepostes:[],dialog:false,disabled:false,jour:"",listeattributions:{}};
 },
    components: { ordinateur,addPosteModal },
    created(){
        console.log("composant home");
        
  
        this.initialize();
           
    },methods:{
        initialize(){
            this.listepostes=[]
                  Axios.get("/api/postes").then(({ data })=>{
                      console.log("data")
                      console.log(data)
                    data.forEach(element => {
                        this.listepostes.push(element);
                    })
        })


        },
        setDate(date){
           // console.log(date)
           //this.$set(this.done,0,date);
            this.jour=date;
        
           this.$emit("reload-attr", this.listeattributions);
           //this.initialize();
        }
    }
};
