<template>
    <div class="container" id="add-field" style="display:block;" >
        <div class="row justify-content-center">
 
            <section class="group"> 
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Tipo campo:</div>
                        <div class="card-body">
                            <select name="listaCampos"  v-on:change="addComponent(this)" class="form-control" v-model="listaCampos">
                                <option value="">Seleccione...</option>
                                <option v-for="campo in this.campos" :value="campo.id">{{campo.campo}}</option>
                            </select> 
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="col-md-8" v-for="(component, index) in components"  :id="index" >
                        <component  :is="component['field-tipe']"  
                                    :title="component.card.title" 
                                    :index="index + 1" 
                                    :sizex="component.card.sizex"
                                    :campo_id="component.card.campo_id" 
                        >
                        </component>
                </div>
            </section> 

            <section class="mt-2 form-group col-12 d-flex justify-content-center">
                <div class="d-flex justify-content-center">
                    <button id="button-submit" class="btn btn-color-2" v-on:click="saveFormAll(this)"  ><i class="fas fa-save"></i> Guardar con campos dinamic</button>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
 
    export default {
        data: function(){
            return {
                    campos: null,
                    components: []
                } 
        },
        mounted() {
            axios.get('/campos').then((response) => {
				this.campos = response.data;
			})
        },
        methods: {
            onChange(event) {
                console.log(event.target.value)
            },
            addComponent(event) {
                
                if(event.listaCampos >= 1)
                {
                    // esta lista es la que llega de la tabla de la BD, no debe ser quemada
                    let supportedFileds = {
                        1 : 'CampoTexto', 
                        2 : 'CampoLista', 
                        3 : 'CampoRadio', 
                        4 : 'CampoCaja', 
                        5 : 'CampoTextoLargo', 
                        6 : 'CampoArchivo', 
                        7 : 'CampoFoto', 
                        8 : 'CampoFecha', 
                        9 : 'CampoFechaYHora',
                        10: 'CampoUrl'
                    }
                    
                    let seed = event.listaCampos ;
                    this.components.push({'card': {
                                                    'title': this.campos[(event.listaCampos - 1)].campo,
                                                    'field-tipe': supportedFileds[seed],
                                                    'campo_id' : seed,
                                                    'sizex' : this.campos[event.listaCampos].campo
                                                 }, 
                                                    'field-tipe': supportedFileds[seed]
                                                   
                                         })

                   
                }
            },
            saveFormAll(objeto){
               
                //recorre todos los campos dinamicos para añadirlos a los metodos saveOffer / updateOffer
                try {
                    let campos = $("div.container fieldset")
                    let dataCampoDinamico = {};
                    if(campos.length > 0) {
                        return "No";
                    }
                   
                    
                } catch (error) {
                    
                }

            }
        } 
    }
</script>
