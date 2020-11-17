
export default {
    name:"attributions",
    props: {
        client: {
            default: function() {
                return {}
            }
        },listeattributions:{
            default: function () {
                return {}
            }
        },
        poste: {
            default: function () {
                return {}
            }
        },
        heure:{
            default: function () {
                return {}
            }
        },jour :{
            default: function () {
                return {}
            }
        }
    },computed:{
        init(){console.log("attr : ")
        console.log(this.listeattributions);
  } 
 },methods:{
            initialize(){
console.log(listeattributions);

            }
    },
    components:{}
}