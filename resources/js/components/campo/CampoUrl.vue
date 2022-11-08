<template>
    <br>

    <fieldset style="border-style: solid; border:2px;">
        <legend>{{index}} | Campo Url</legend>
        <div class="col-sm-10">
            <input type="text" min="1" max="255" name="url" class="form-control" />
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
