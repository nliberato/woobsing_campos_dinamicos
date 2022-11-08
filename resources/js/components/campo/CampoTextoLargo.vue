<template>
    <br>

    <fieldset style="border-style: solid; border:2px;" id="fieldID" >
        <legend>{{index}} |  Campo {{title}} ID {{campo_id}}</legend>
        <div class="col-sm-10">
            <label>Escribe la pregunta:<span style="color: rgb(255, 0, 0);">*</span></label>
            <input type="text" name="text[]['text']" class="form-control required">
            <div class="col-sm-10"></div>
            <label> Límite de caracteres: 
                <input type="radio" value="s" name="text[]['radios']" > Si 
                <input type="radio" value="n" name="text[]['radion']" > No
           </label>
                <input type="number" min="0" max="9000" name="textolargo[]['max']" class="border-radius: 10px" />
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
        props:['title', 'index', 'sizex', 'campo_id']
    }
</script>
