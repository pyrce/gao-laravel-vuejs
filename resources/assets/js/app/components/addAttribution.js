import Axios from "axios";
export default{
    name:"addAttribution",
    event:"recharge",
    props:{
        heure:{
            default: function () {
                return {}
            }
        },
        postes:{
            default: function () {
                return {}
            }
        },
        clientId:{
            default: function () {
                return {}
            }
        }
    },
    data () {
        return {
          dialog: false,nomClient:"",nom:"",form:{},selected:null,clients:[]
        }
      },computed:{
      
      },created(){
     
          
      },methods:{
          searchClient(){
            //console.log(this.nomClient);
            this.form.nom=this.nomClient;
            if(this.nomClient.length>4){
                Axios.get("/client/search",{params:{nom:this.nomClient} }).then( ({data})=>{this.clients=[];
                    data.forEach(element => {
                        this.clients.push({id:element.id,nomClient:element.nomClient+" - "+element.prenomClient });
                        /*this.clients.nomClient=element.nomClient+" - "+element.prenomClient;
                        this.clients.id=element.id;*/
                    })
                })
            }console.log(clients);
          },
          attribuer(){
            //  console.log("heure : "+this.heure+", poste : "+this.postes+" client :"+this.selected)
              this.form.clientId=this.selected;
              this.form.posteId=this.postes;
              this.form.heure=this.heure;
              Axios.post("/api/attributions",this.form ).then(data=>{
                  console.log(data);
                  this.dialog=false;
                  this.$emit("recharge-vue");
              })
          }
      }
    
}