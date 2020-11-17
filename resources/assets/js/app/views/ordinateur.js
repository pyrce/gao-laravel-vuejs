import Axios from 'axios'
import attributions from "../components/attributions.vue";
import addAttribution from "../components/addAttribution.vue";
export default {
    name:"ordinateur",data(){ return{ heures:{}} },
    props: {
        ordinateurId: {
            default: function() {
                return {}
            }
        },
        ordinateurName: {
            default: function () {
                return {}
            }
        },date:{
            default: function () {
                return {}
            }
        },listeattributions:{
            default: function () {
                return {}
            }
        }
    },created(){
this.initialize();
    } ,methods:{
        affiche(){
            console.log("date:"+this.date);
            
        },
     initialize(){

        //this.listeattributions=[];

        this.heures=["8","9","10","11","12","13","14","15","16","17","18"];
   
        Axios.get("/api/attributions",{data:{jour:this.date}}).then( data=>{

            this.listeattributions=data.data;
           //this.$emit("reload-attr", this.listeattributions);
     
    });
           
     },test(){
         console.log("test");
     }
    },
    components:{attributions,addAttribution}
}