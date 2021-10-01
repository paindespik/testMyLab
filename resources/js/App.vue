<template>
    <div id="app">
        <div class="App">
            <div class="wrapper">
                <div class="workspace" ref="workspace">
                    <FreeTransform
                        v-for="element in elements"
                        :key="element.id"
                        :x="element.x"
                        :y="element.y"
                        :scale-x="1"
                        :scale-y="1"
                        :width="element.width"
                        :height="element.height"
                        :angle="element.angle"
                        :offset-x="offsetX"
                        :offset-y="offsetY"
                        :disable-scale=false
                        :selected="element.id === selectedElement"
                        :selectOn="element.selectOn"
                        @onSelect="setSelected(element.id)"
                        @unset="unsetElement()"
                        @update="update(element.id,$event)"
                        :styles="{zIndex:element.id === selectedElement?2:1}"
                        :aspect-ratio="true"
                        :scale-from-center="true"
                    >
                        <div class="element"
                             :style="getElementStyles(element)">
                            <img :src="element.cheminImage" alt="">
                        </div>
                    </FreeTransform>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="container pt-5">
                    <div class="row pb-2">
                        <div class="col-lg">
                            <button v-on:click="openModal('routeur');" id="ajouterRouteur" class="form-control"> Routeur </button>
                        </div>
                        <!--          <div class="col">
                                    <button v-on:click="ajouterPC" id="ajouterPC"></button>
                                  </div>
                                  <div class="col">
                                    <button v-on:click="ajouterServeur" id="ajouterServeur"></button>
                                  </div>
                                  <div class="col">tan
                                    <button v-on:click="ajouterSwitch" id="ajouterSwitch"></button>
                                  </div>
                                  <div class="col">
                                    <button v-on:click="ajouterModem" id="ajouterModem"></button>
                                  </div>
                                  <div class="col">
                                    <button v-on:click="ajouterFirewall" id="ajouterFirewall"></button>
                                  </div>-->
                        <div class="col-lg">
                            <button v-on:click="openModal('PC');" id="ajouterPC" class="form-control"> PC </button>
                        </div>
                    </div>
                    <div class="row pb-2">
                        <div class="col-lg">
                            <button v-on:click="openModal('serveur');" id="ajouterServeur" class="form-control"> Serveur </button>
                        </div>
                        <div class="col-lg">
                            <button v-on:click="openModal('switch')" id="ajouterSwitch" class="form-control"> Switch </button>
                        </div>
                    </div>
                    <div class="row pb-2">
                        <div class="col-lg">
                            <button v-on:click="openModal('modem')" id="ajouterModem" class="form-control"> Modem </button>
                        </div>
                        <div class="col">
                            <button v-on:click="openModal('firewall')" id="ajouterFirewall" class="form-control"> Firewall </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5" >
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="form-inline">
                                <button id="supprimerElement" style="display: none" v-on:click="supprimerElement" class="linkApp form-control" >Supprimer l'élément </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5" >
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="form-inline">
                                <button id="faireLigne" style="display: none" v-on:click="faireLien" class="linkApp form-control" >Faire un lien </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="padding-top: 15rem" id="appliquer">
                <div class="container">
                    <div class="row">
                        <div class="col-8 offset-2">
                            <div class="form-inline">
                                <button v-on:click="appliquer" class="btn btn-primary linkApp form-control"> Confirmer le shemas </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="configModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Configuration du matériel</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="divQuestion1">
                                <label id="labelQestion1" for="question1"></label>
                                <select class="form-control" id="question1">
                                    <option value="0" selected>choisissez... </option>
                                    <option value="1">Oui</option>
                                    <option value="2">Non</option>
                                </select>
                            </div>
                            <input type="hidden" id="typeElement">
                            <div id="divQuestion2">
                                <label id="labelQestion2" for="question2"></label>
                                <select class="form-control" id="question2">
                                    <option value="0" selected>choisissez... </option>
                                    <option value="1" >Oui</option>
                                    <option value="2" >Non</option>
                                </select>
                            </div>






                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"  data-dismiss="modal">Annuler</button>
                            <button type="button" v-on:click="ajouter()" id="confirmationAjout" class="btn btn-primary" data-dismiss="modal">Ajouter</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="appliquermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="labelModal">Confirmer votre infrastructure réseau</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card" id="q1">
                                <div class="card-header">
                                    Questionnaire pour votre infrastructure
                                </div>
                            <div class="card-body">
                                <p class="card-title texts">Comment est votre adressage IP ?</p>
                                <select class="form-control" name="year_subjects" id="q1rep">
                                    <option type="checkbox" value="1" id="reseau"><nav>Adresse Sectorisé (différent plage d'adresse séparé par des VLAN)</nav></option>
                                    <option  type="checkbox" value="2" id="reseaux"><nav>adresse commune (même plage d'ip sur le réseau et 1 seule VLAN)</nav></option>
                                </select>
                                <hr class="id">

                            </div>
                                </div>
                            <div class="card" id="q2" style="display: none">
                                <div class="card-header">
                                    Questionnaire pour le matériel de votre entreprise
                                </div>
                                <div class="card-body">
                                    <p class="texts">Quelles sont les marques utiliser pour votre matériel informatique ?</p>
                                    <select class="form-control" name="year_subject" id="q2rep">
                                        <option value="theme1" id="cisco"><nav>Cisco</nav></option>
                                        <option value="theme2" id="fortinet"><nav>fortinet</nav></option>
                                        <option value="theme3" id="alcatellucent"><nav>alcatel lucent</nav></option>
                                        <option value="theme4" id="netgear"><nav>netgear</nav></option>
                                        <option value="theme5" id="hp"><nav>hp</nav></option>
                                        <option value="theme6" id="dell"><nav>dell</nav></option>
                                        <option value="theme7" id="ibm"><nav>ibm</nav></option>
                                        <option value="theme8" id="autre"><nav>autre</nav></option>


                                    </select>
                                </div>
                            </div>
                            <div id="rep1" style="display: none" >
                                il vaudrais mieux mettre vos adresses en commune
                                <hr>
                            </div>
                            <div id="rep2" style="display: none">
                                Si vous avez autre qu'un cisco il faut que vous vérifié si vous avez le spanning tree activé
                                <hr>
                            </div>
                            <div id="rep3" style="display: none">
                                L'avantage du spanning tree protocole est d'éviter les boucles ou tempête de broadcast au sein du réseau et donc de garantir la continuité de service de ce dernier.
                                <hr>
                            </div>
                            <div id="rep4" style="display: none">
                                Afin d'avoir la meilleure communication entre deux routeurs, il est préconisé d'utiliser de la fibre.
                                <hr>
                            </div>
                            <div id="rep5" style="display: none">
                                il est préconisé de placer vos serveurs dans une salle fermé et climatisé afin de maintenir refroidit les serveurs et qu'ils ne surchauffent pas.
                                <hr>
                            </div>
                            <div id="rep6" style="display: none">
                                il vous faudrais un active directory sur vos postes de travail pour avoir une sécurité supplémentaire
                                <hr>
                            </div>
                            <div id="rep7" style="display: none">
                                il vous faudrais un mot de passe avec au moins 12 caractère
                                <hr>
                            </div>
                            <div id="rep8" style="display: none">
                                Il est nécessaire  déclare la totalité de vos VLAN sinon la communication ne pourra pas se faire entre le routeur et les machines de vos VLAN.
                                <hr>
                            </div>
                            <div id="rep9" style="display: none">
                                en tant que petite entité le DHCP est a privilégier pour les postes de travail, les tables de routages seront réservées aux équipements réseau (routeurs, switchs).
                                <hr>
                            </div>
                            <div id="rep10" style="display: none">
                                il faut désactiver le protocole HTTP car il n'est pas sécurisé, c'est à dire que si quelqu'un intercepte les données il verra tout apparent en clair.
                                <hr>
                            </div>
                            <div id="rep11" style="display: none">
                                Il faut désactiver le protocole telnet, ce protocole n'est pas sécurisé car il ne crypte pas les données
                                <hr>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" v-on:click="annuler" data-dismiss="modal">Annuler</button>
                            <button  class="btn btn-primary" v-on:click="suivant" > Suivant </button>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </div>
</template>

<script>
import FreeTransform from './components/Transform.vue'

export default {
    name: 'app',
    components: {
        FreeTransform
    },
    data() {
        return {
            elements: [],
            offsetX: 0,
            offsetY: 0,
            tour: 1,
            selectedElement: null,
            ajoutLien: false,
            deuxiemeSelected: null
        }
    },
    mounted() {
        this.offsetX = this.$refs.workspace.offsetLeft
        this.offsetY = this.$refs.workspace.offsetTop
    },
    methods: {

        Resultat(){
            console.log("resultat")
                if ($('#q1rep').val() === "1"){
                    $('#rep1').show();
                }
                if ($('#q2rep').val() === "theme1"){
                    $('#rep2').show();
                }
                this.elements.map(function(el, key){
                    console.log(el);
                    if (el.typeElement === "switch"){
                        if (el.response1 === 2){
                            $('#rep3').show();
                        }
                        if(el.response2 === 2){
                            $('#rep4').show();
                        }
                    }
                    else if (el.typeElement === "pc"){
                        if (el.response1 === 2){
                            $('#rep5').show();
                        }
                        if (el.response2 === 2){
                            $('#rep6').show();
                        }
                    }
                    else if (el.typeElement === "pc"){
                        if (el.response1 === 2){
                            $('#rep7').show();
                        }
                    }
                    else if (el.typeElement === "routeur"){
                        if (el.response1 === 2){
                            $('#rep8').show();
                        }
                        if (el.response2 === 2){
                            $('#rep9').show();
                        }
                    }
                    else if (el.typeElement === "firewall"){
                        if (el.response1 === 1){
                            $('#rep10').show();
                        }
                        if (el.response2 === 2){
                            $('#rep11').show();
                        }
                    }
            })
            $('#labelModal').text("Votre résultat");
        },
        openModal(type) {
            $('#typeElement').val(type);
            if (type === "routeur"){
                $('#labelQestion1').text("voulez vous mettre en place un DHCP?");
                $('#divQuestion2').hide();
            }
            else if (type === "PC"){
                $('#labelQestion1').text("Vos mots de passe respectent ils les normes demandées? Minimum 12 caractères avec des majuscule, minuscules, chiffres et caractères spéciaux");
                $('#typeElement').val("pc");
                $('#divQuestion2').hide();
            }
            else if (type === "serveur"){
                $('#labelQestion1').text("avez-vous une salle climatisé pour vos serveurs?");
                $('#divQuestion2').show();
                $('#labelQestion2').text("avez-vous 1 active directory? ");
            }
            else if (type === "switch"){
                $('#labelQestion1').text("votre protocole spanning tree est-il activé ? ");
                $('#divQuestion2').show();
                $('#labelQestion2').text("utilisez-vous la fibre entre vos switch ? ");
            }
            else if(type === "modem"){
                this.ajouter();
            }
            else if (type === "firewall"){
                $('#labelQestion1').text("avez-vous désactivé le protocole HTTP ? (port 80)");
                $('#divQuestion2').show();
                $('#labelQestion2').text("avez-vous désactivé le protocole telnet ? (Port 23)");
            }
            if (type !== "modem"){
                $('#configModal').modal("show");
            }

        },
        annuler(){
            $('#q1').show();
            $('#q2').hide();
            this.tour = 1;
        },
        appliquer(){
          $('#appliquermodal').modal('show');
        },
        suivant(){
            if (this.tour < 2){
                $('#q1').hide();
                $('#q2').show();
                this.tour = 2;
            }
            else if (this.tour === 2){
                $('#q2').hide();
                this.Resultat();
                this.tour = 3;
            }
            else {
                this.tour = 1;
                $('#appliquermodal').modal('hide');
            }
        },
        faireLien(){
            this.ajoutLien = true;
        },
        update(id, payload) {
            this.elements = this.elements.map(item => {
                if (item.id === id) {
                    return {
                        ...item,
                        ...payload
                    }
                }
                return item
            })
        },
        getElementStyles(element) {
            const styles = element.styles ? element.styles : {}
            return {
                width: `${element.width}px`,
                overflow: "hidden",
                height: `${element.height}px`,
                ...styles
            }
        },
        setSelected(id) {

            if (this.ajoutLien){
                this.deuxiemeSelected = id;
                this.confirmationLien();
            }
            else{
                this.selectedElement = id;
                $('#supprimerElement').show();
                $('#faireLigne').show();
            }


        },
        unsetElement(id) {
            this.selectedElement = -1
            $('#supprimerElement').hide();
        },

        async confirmationLien(){
            let img = new Image();
            img.src = "/assets/lien.png";
            let id = this.elements.length;
            let departId = this.selectedElement;
            console.log(this.deuxiemeSelected);
            let finId = this.deuxiemeSelected;
            console.log(departId);
            console.log(finId);
            img.onload = () => {
                let widthImage = Math.sqrt( Math.pow(this.elements[finId].x - this.elements[departId].x, 2) + Math.pow(this.elements[finId].y - this.elements[departId].y, 2));
                let scale = widthImage/img.width;
                let angle= Math.atan((this.elements[finId].y-this.elements[departId].y) / (this.elements[finId].x - this.elements[departId].x)) * 180/3.14;
                let item = {
                    id: id,
                    response1 : 0,
                    response2 : 0,
                    typeElement: "lien",
                    x: this.elements[departId].x + this.elements[departId].width-5,
                    y: this.elements[departId].y,
                    scaleX: 1,
                    scaleY: 1,
                    width: widthImage-this.elements[finId].width -5,
                    height: 20,
                    angle: angle,
                    classPrefix: "tr",
                    cheminImage: img.src,
                    text: "",
                    selectOn: 'mousedown',
                };
                console.log(item);
                this.elements.push(item);

            }
            this.ajoutLien = false;
        },

        supprimerElement(){
            this.elements.splice(this.selectedElement, 1);
            console.log(this.elements);

            this.unsetElement(this.selectedElement);
        },

        async ajouter() {

            let reponse1 = parseInt($('#question1').val());
            let reponse2 = parseInt($('#question2').val());
            let img = new Image();
            let element = $('#typeElement').val();

            img.src = "/assets/"+ element +".png";
            let idnext = this.elements.length;

            $('#faireLigne').show();


            img.onload = () => {
                let nouveau = {
                    key: idnext,
                    response1 : reponse1,
                    response2 : reponse2,
                    typeElement: element,
                    id: idnext,
                    x: 400,
                    y: 300,
                    scaleX: 1,
                    scaleY: 1,
                    width: img.width+10,
                    height: img.height+5,
                    angle: 0,
                    classPrefix: "tr",
                    cheminImage: img.src,
                    text: "",
                    selectOn: 'mousedown',
                };
                console.log(nouveau);
                this.elements.push(nouveau);
            }
            $('#question1').val("0");
            $('#question2').val("0");
        }
    }
}
</script>

<style>
#app {
    display: flex;
    background: #F8FAFC;
}

.wrapper {
    flex: 1;
}

.workspace {
    width: 800px;
    height: 700px;
    margin: 25px auto;
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.10);
    border: 1px solid rgba(0, 0, 0, 0.10);
    background: #fff;
}

* {
    box-sizing: border-box;
}

.tr-transform--active {
    position: absolute;
    z-index: 5;
}

.tr-transform__content {
    user-select: none;
}
.tr-transform__content .element{
    padding:5px;
}


.linkApp:hover{
    color: blue;
    text-decoration: underline;
}

.tr-transform__rotator {
    top: -45px;
    left: calc(50% - 7px);
}

.tr-transform__rotator,
.tr-transform__scale-point {
    background: #fff;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    position: absolute;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(0, 0, 0, 0.1);
    cursor: pointer;
}

.tr-transform__rotator:hover,
.tr-transform__scale-point:hover {
    background: #F1F5F8;
}

.tr-transform__rotator:active,
.tr-transform__scale-point:active {
    background: #DAE1E7;
}

.tr-transform__scale-point {

}

.tr-transform__scale-point--tl {
    top: -7px;
    left: -7px;
}

.tr-transform__scale-point--ml {
    top: calc(50% - 7px);
    left: -7px;
}

.tr-transform__scale-point--tr {
    left: calc(100% - 7px);
    top: -7px;
}

.tr-transform__scale-point--tm {
    left: calc(50% - 7px);
    top: -7px;
}

.tr-transform__scale-point--mr {
    left: calc(100% - 7px);
    top: calc(50% - 7px);
}

.tr-transform__scale-point--bl {
    left: -7px;
    top: calc(100% - 7px);
}

.tr-transform__scale-point--bm {
    left: calc(50% - 7px);
    top: calc(100% - 7px);
}

.tr-transform__scale-point--br {
    left: calc(100% - 7px);
    top: calc(100% - 7px);
}

</style>
