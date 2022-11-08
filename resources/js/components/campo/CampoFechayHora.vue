<template>
    <br>
    <fieldset style="border-style: solid; border:2px;">
        <legend>{{index}} | Campo Fecha y Hora</legend>
        <div class="col-sm-10">
            <label>Escribe la pregunta:</label>
            <input type="text" name="text[]['datetime']" class="form-control">     
        </div>
    </fieldset>
</template>

<script>
 
    export default {
        data: function(){
            return {
                    campos: null,
                    components: []
                }
        },
        props:['title', 'index', 'sizex']
    }
</script>
