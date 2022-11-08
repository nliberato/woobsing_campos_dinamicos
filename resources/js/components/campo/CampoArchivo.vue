<template>
    <br>

    <fieldset style="border-style: solid; border:2px;">
        <legend>{{index}} | Campo Archivo</legend>
        <div class="col-sm-10">
            <label>Peso Máximo:<span style="color: rgb(255, 0, 0);">*</span></label>  
            <input type="file" min="0" max="255" name="max-size-file" class="form-control" />
            <label>Nota:
                En Upa work admitimos archivos tipo .JPG, .PNG, .CVS, .CSV, .DOC, .PDF, .MOV, .AVI, .MP4, Con un un peso no superior a 25 MB.
            </label>  
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
