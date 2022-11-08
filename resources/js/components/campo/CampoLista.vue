<template>

    <br>
    <fieldset style="border-style: solid; border:2px;" id="fieldID" >
        <legend>{{index}} | Campo {{title}} ID {{campo_id}}</legend>
        <div class="col-sm-10">
            <label>Escribe la pregunta: </label>
            <input type="text" name="list[][text]" class="form-control ">
        </div>
        
        <div class="col-sm-3">
            <label>Opciones de respuesta</label>
            <input  type="number" 
                    name="opciones"  
                    min="1" max="4" 
                    class="form-control"
                    v-on:change="addOptions(this)"  
                    v-model="cantidadRespuesta" />
                    <br>
            <input type="text"  class="form-control" v-for="(item, mIndex) in this.sizex" :placeholder="'Opcion ' + ( mIndex + 1)" :name="'list[][\'opcion\']['+mIndex+']'" >
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
        props:['title', 'index', 'sizex', 'campo_id'],
    }
</script>
