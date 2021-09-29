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
                        :disable-scale="element.disableScale === true"
                        :selected="element.id === selectedElement"
                        :selectOn="element.selectOn"
                        @onSelect="setSelected(element.id)"
                        @update="update(element.id,$event)"
                        :styles="{zIndex:element.id === selectedElement?2:1}"
                        :aspect-ratio="false"
                        :scale-from-center="false"
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
                <div class="col">
                    <button v-on:click="ajouterRouteur" id="ajouterRouteur"></button>
                </div>
                <!--          <div class="col">
                            <button v-on:click="ajouterPC" id="ajouterPC"></button>
                          </div>
                          <div class="col">
                            <button v-on:click="ajouterServeur" id="ajouterServeur"></button>
                          </div>
                          <div class="col">
                            <button v-on:click="ajouterSwitch" id="ajouterSwitch"></button>
                          </div>
                          <div class="col">
                            <button v-on:click="ajouterModem" id="ajouterModem"></button>
                          </div>
                          <div class="col">
                            <button v-on:click="ajouterFirewall" id="ajouterFirewall"></button>
                          </div>-->
                <div class="col">
                    <button v-on:click="ajouterPC" id="ajouterPC"></button>
                </div>
                <div class="col">
                    <button v-on:click="ajouterServeur" id="ajouterServeur"></button>
                </div>
                <div class="col">
                    <button v-on:click="ajouterSwitch" id="ajouterSwitch"></button>
                </div>
                <div class="col">
                    <button v-on:click="ajouterModem" id="ajouterModem"></button>
                </div>
                <div class="col">
                    <button v-on:click="ajouterFirewall" id="ajouterFirewall"></button>
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
            selectedElement: null
        }
    },
    mounted() {
        this.offsetX = this.$refs.workspace.offsetLeft
        this.offsetY = this.$refs.workspace.offsetTop
    },
    methods: {
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
                height: `${element.height}px`,
                ...styles
            }
        },
        setSelected(id) {
            this.selectedElement = id
        },
        async ajouterRouteur() {
            let img = new Image();

            img.src = "/assets/routeur.png";
            let id = Math.random() * 1000;

            img.onload = () => {
                console.log(`the image dimensions are ${img.width}x${img.height}`);
                this.elements.push({
                    id: id,
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
                    selectOn: 'click',
                });
            }
        },
        async ajouterPC() {
            let img = new Image();

            img.src = "/assets/pc.png";
            let id = Math.random() * 1000;


            img.onload = () => {
                console.log(`the image dimensions are ${img.width}x${img.height}`);
                this.elements.push({
                    id: id,
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
                    selectOn: 'click',
                });
            }
        },
        async ajouterServeur() {
            let img = new Image();

            img.src = "/assets/serveur.png";
            let id = Math.random() * 1000;


            img.onload = () => {
                console.log(`the image dimensions are ${img.width}x${img.height}`);
                this.elements.push({
                    id: id,
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
                    selectOn: 'click',
                });
            }
        },
        async ajouterSwitch() {
            let img = new Image();

            img.src = "/assets/switch.png";
            let id = Math.random() * 1000;


            img.onload = () => {
                console.log(`the image dimensions are ${img.width}x${img.height}`);
                this.elements.push({
                    id: id,
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
                    selectOn: 'click',
                });
            }
        },
        async ajouterModem() {
            let img = new Image();

            img.src = "/assets/modem.png";
            let id = Math.random() * 1000;


            img.onload = () => {
                console.log(`the image dimensions are ${img.width}x${img.height}`);
                this.elements.push({
                    id: id,
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
                    selectOn: 'click',
                });
            }
        },
        async ajouterFirewall() {
            let img = new Image();

            img.src = "/assets/firewall.png";
            let id = Math.random() * 1000;


            img.onload = () => {
                console.log(`the image dimensions are ${img.width}x${img.height}`);
                this.elements.push({
                    id: id,
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
                    selectOn: 'click',
                });
            }
        },
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
    height: 800px;
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
