<template>

    <br>
<fieldset>
    <legend>{{index}} | Campo Radio</legend>
    <div class="col-sm-10">
        <label>Escribe la pregunta:<span style="color: rgb(255, 0, 0);">*</span></label>
        <input type="text" name="Experiencia" class="form-control required">
    </div>
    
    <div class="col-sm-3">
        <label>Opciones de respuesta</label>
        <input  type="number" 
                name="cantidad-respuesta"  
                min="1" max="4" 
                class="form-control"
                v-on:change="addOptions(this)"  
                v-model="cantidadRespuesta" />
                <br>
        <input type="text" class="form-control" v-for="(item, mIndex) in this.sizex" :placeholder="'Opcion ' + ( mIndex + 1)" :name="'radio[][\'opcion\']['+mIndex+']'" >
    </div>
</fieldset>
</template>

<script>
 
    export default {
        data: function(){
            return {
                    sizex: 0
                }
        },
        methods: {
            addOptions :  function(event){
                this.sizex = event.cantidadRespuesta
            }
        },
        props:['title', 'index', 'sizex'],
    }
</script>
