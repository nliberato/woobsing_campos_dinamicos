<template>

  <section class="container">
    <form novalidate @submit.prevent="validateForm" enctype="multipart/form-data" accept="image/*">
    <div class="row">
      <section class="col-sm-12 col-md-6 col-lg-6">
          <div class="form-group">
            <label>Título de la Oferta<span style="color:#ff0000">*</span></label>
            <div class="margin-bottom">
              <input ref="Título de la Oferta" type="text" name="Título de la Oferta"   class="form-control required" placeholder="Ej. Administrador de Empresas">
              
                
  
            </div>
          </div>
          <div class="form-group">
            <label>Descripción corta<span style="color:#ff0000">*</span></label>
            <textarea ref="Descripción corta" name="Descripción corta" placeholder="Describa en pocas palabras su oferta" rows="3" v-model="shortDescription"  class="form-control required">
            </textarea>
            
              

          </div>
          <div class="form-group">
            <label>Descripción completa<span style="color:#ff0000">*</span></label>
            <textarea ref="Descripción completa" name="Descripción completa" placeholder="Descripción completa de su oferta" rows="3" v-model="description"  class="form-control required">
            </textarea>
            
              

          </div>
          <div class="form-group">
            <label>Experiencia (Años)<span style="color:#ff0000">*</span></label>
            <input type="text" ref="Experiencia" name="Experiencia" v-model="experience"  class="form-control required">
            
              

          </div>
          <div class="form-group">
            <label for="idioma">Idioma<span style="color:#ff0000">*</span></label>
            <input type="text" ref="Idioma" name="Idioma" v-model="language"  class="form-control required">
            
              

          </div>
          <div class="form-group">
            <label>Escolaridad</label>
            <select name="Escolaridad" class="form-control" v-model="education">
              <option value="">Seleccione...</option>
              <option v-for="education in this.educations" :value="education.escolaridad">{{education.escolaridad}}</option>
            </select>
          </div>
          <div class="form-group">
            <label class="control-label">País</label>
            <select name="País" class="form-control" v-model="country">
              <option value="">Seleccione...</option>
              <option v-for="country in this.countries" :value="country.nombre">{{country.nombre}}</option>
            </select>
          </div>
          <div class="form-group" v-if="country == 'COLOMBIA' || country == 'ECUADOR'">
            <label class="control-label">Departamento</label>
            <select name="Departamento" class="form-control" v-model="locationState">
              <option value="">Seleccione...</option>
              <option v-for="op in this.listLocationStates[0]" :value="op.nombre">{{op.nombre}}</option>
            </select>
          </div>
          <div class="form-group" v-if="country == 'COLOMBIA' || country == 'ECUADOR'">
            <label class="control-label">Ciudad</label>
            <select name="Ciudad" class="form-control" v-model="city">
              <option value="">Seleccione...</option>
              <option v-for="op in listCity[0]" :value="op.nombre">{{op.nombre}}</option>
            </select>
          </div>
        </section>
  
        <section class="col-sm-12 col-md-6 col-lg-6">
          <div class="form-group">
            <label for="salario">Salario<span style="color:#ff0000">*</span></label>
            <div class="input-group">
              <select ref="Salario" name="Salario" v-model="salary"   class="form-control required">
                <option value="">Seleccione...</option>
                <option v-for="op in listSalary" value="op.option">{{op.option}}</option>
              </select>
            </div>
            
              

          </div>
          <div class="form-group">
            <label>Fecha estimada de contratación</label>
            <input type="text" name="Fecha estimada de contratación" class="form-control" v-model="dateStartContract">
          </div>
          <div class="form-group">
            <label>Tipo de contrato</label>
            <select name="Tipo de contrato" class="form-control" v-model="typeContract">
              <option value="">Seleccione...</option>
              <option value="Término fijo">Contrato a término fijo</option>
              <option value="Término indefinido">Contrato a término indefinido</option>
              <option value="Obra labor">Contrato de obra labor</option>
              <option value="Contrato de aprendizaje">Contrato de aprendizaje</option>
              <option value="Contrato civil por prestación de servicios">Contrato civil por prestación de servicios</option>
            </select>
          </div>
          <div class="form-group">
            <label>Área de trabajo<span style="color:#ff0000">*</span></label>
            <input type="text" ref="Área de trabajo" name="Área de trabajo" v-model="area"   class="form-control required" placeholder="Ej. Gestión Humana">
            
              

          </div>
          <div class="form-group" v-if="typeContract != 'Término indefinido'">
            <label>Duración del Contrato (Meses)</label>
            <input type="number" name="Duración del contrato" class="form-control" min="0" v-model="duration">
          </div>
          <div class="form-group">
            <label>Imagen de la oferta <b>(Recomendado 1200x630)</b></label>
            <input type="file" name="Imagen de la oferta" class="form-control" lang="es" @change="showPicture"  >
            
              

          </div>
          <div class="form-group">
            <label class="form-check-label">¿Crear cuestionario para aplicantes?</label>
            <div class="form-group mt-2">
              <label class="form-check-label">SI</label>
              <input @click="openFormulary" type="radio" name="Formulario" value="1" v-model="formulary">
              <label class="form-check-label">NO</label>
              <input type="radio" name="Formulario" value="0" checked v-model="formulary">
            </div>
          </div>
          <div class="form-group">
            <label>Fecha de publicación</label>
            <input type="date" name="Fecha de publicación" class="form-control" v-model="datePublication">
          </div>
          <div class="form-group">
            <label>Fecha de vencimiento</label>
            <input type="date" name="Fecha de vencimiento" class="form-control" v-model="dateEnd">
          </div>
          <div class="form-group">
            <label>Empresa</label>
            <select name="Empresa" class="form-control required" v-model="company"  >
              <option value="" checked>Seleccione...</option>
              <option v-for="op in companies" :value="op.id">{{op.nombre}}</option>
            </select>
          </div>
          <div class="form-group">
            <label class="form-check-label">¿Publicar Oferta?</label>
            <div class="form-group mt-2">
              <label class="form-check-label">SI</label>
              <input type="radio" name="active" value="1" checked v-model="publicOffer">
              <label class="form-check-label">NO</label>
              <input type="radio" name="active" value="0" v-model="publicOffer">
            </div>
          </div>
        </section>
        <section class="mt-2 form-group col-12 d-flex justify-content-center">
            <div class="d-flex justify-content-center">
              <button id="button-submit" class="btn btn-color-2"><i class="fas fa-save"></i> Guardar</button>
            </div>
        </section>
      </div>
      <modal-info :message="message" :url="url" v-if="showModalInfo"></modal-info>
      <formulary v-if="showModalFormulary"></formulary>
    </form>
  </section>

  </template>
  <script>
    
    export default {
      
      data: function() {
        return {
          titleOffer: "",
          shortDescription: "",
          description: "",
          experience: "",
          language: "",
          education: "",
          country: "",
          locationState: "",
          city: "",
          salary: "",
          listSalary: [],
          dateStartContract: "",
          typeContract: "",
          area: "",
          duration: "",
          formulary: 0,
          datePublication: "",
          dateEnd: "",
          publicOffer: 1,
          company: "",
          listLocationStates: [],
          listCity: [],
          showModalInfo: false,
          showModalFormulary: false,
          message: "",
          url: "",
          arrayQuestion: [],
          image: "",
          offerId: "",
          change: 0
        }
      },
      props: ['countries','cities','location-states','companies','educations','company_id','edit','offer','list-formulary'],
      methods: {
        handleValidationError () {
          const firstField = Object.keys(this.errors.collect())[0]
          this.$refs[firstField].focus()
        },
        validateForm: function () {
          this.$validator.validateAll().then(result => {
            if(result){
              $("#button-submit i").remove();
              $("#button-submit").attr('disabled', true);
              $("#button-submit").html('<i class="fas fa-spinner fa-spin"></i> Guardando');
              if(this.edit === false)
                this.saveOffer()
              else
                this.updateOffer()
            }
            else
              return this.handleValidationError()
          }).catch(error => {
            console.log(error)
          })
        },
        searchCity: function (nameState) {
          this.listCity = []
          var filterCites = _.filter(this.cities,['nivelId', 3])
          var filterState = _.filter(filterCites, ['nombre', nameState ])
          if(filterState.length > 0)
            this.listCity.push(_.filter(this.cities, ['superiorId', filterState[0].idGeografia ]))
        },
        searchLocationState: function (nameState) {
          this.listLocationStates = []
          var filterStates = _.filter(this.cities,['nivelId', 2])
          var filterState = _.filter(filterStates, ['nombre', nameState ])
          if(filterState.length > 0)
            this.listLocationStates.push(_.filter(this.cities, ['superiorId', filterState[0].idGeografia ]))
        },
        openFormulary: function () {
          this.showModalFormulary = true
        },
        showPicture(e) {
          let files = e.target.files || e.dataTransfer.files;
          if (!files.length)
              return;
          this.createImage(files[0]);
        },
        createImage(file) {
          let reader = new FileReader();
          reader.onload = (e) => {
              this.image = e.target.result;
          };
          reader.readAsDataURL(file);
        },
        saveImage(id) {
          let url = 'storePicture'
          if(this.edit === true)
            url = '../storePicture'
          axios.post(url,{'image': this.image, 'id': id}).then(response => {
            return
          }).catch(error => {
            //this.message = "No es posible registrar la oferta."
            //this.showModalInfo = true
          });
        },
        saveOffer: function () {
          axios.post('store', {
            'titulo': this.titleOffer,
            'descripcion_corta': this.shortDescription,
            'description': this.description,
            'experiencia': this.experience,
            'idioma': this.language,
            'escolaridad': this.education,
            'pais': this.country,
            'departamento': this.locationState,
            'ciudad': this.city,
            'salario': this.salary,
            'fecha_contratacion': this.dateStartContract,
            'tipo_contrato': this.typeContract,
            'categoria': this.area,
            'duracion': this.duration,
            'formulario': this.formulary,
            'fecha_inicio': this.datePublication,
            'fecha_fin': this.dateEnd,
            'activa': this.publicOffer,
            'empresa_id': this.company == '' ? this.company_id : this.company,
            'arrayQuestion': this.arrayQuestion,
          })
          .then(response => {
            this.saveImage(response.data.id)
            this.message = "Oferta registrada con éxito"
            this.url = 'oferta'
            this.showModalInfo = true
            this.infoPerson = false
            $("#button-submit i").remove();
            $("#button-submit").html('<i class="fas fa-check"></i> Guardado');
          })
          .catch(error => {
            //catch the error, check it has a response object with lodash
            var errfill = 'No es posible registrar la oferta. Verifique los siguientes campos y vuelva a intentarlo:  ';
            $.each(error.response.data.errors,function(filed_name,msgs){
              $.each(msgs,function(index,msg){
                  errfill = errfill+' | '+msg;
              });
            });
            this.message = errfill;
            this.url = ''
            this.showModalInfo = true
            $("#button-submit i").remove();
            $("#button-submit").html('<i class="fas fa-times"></i> Error al guardar');
  
            setTimeout(() => {
              $("#button-submit i").remove();
              $("#button-submit").html('<i class="fas fa-repeat"></i> Reintentar');
              $("#button-submit").attr('disabled', false);
            }, 1500);
          })
        },
        updateOffer: function () {
          axios.put('../update', {
            'titulo': this.titleOffer,
            'descripcion_corta': this.shortDescription,
            'description': this.description,
            'experiencia': this.experience,
            'idioma': this.language,
            'escolaridad': this.education,
            'pais': this.country,
            'departamento': this.locationState,
            'ciudad': this.city,
            'salario': this.salary,
            'fecha_contratacion': this.dateStartContract,
            'tipo_contrato': this.typeContract,
            'categoria': this.area,
            'duracion': this.duration,
            'formulario': this.formulary,
            'fecha_inicio': this.datePublication,
            'fecha_fin': this.dateEnd,
            'activa': this.publicOffer,
            'empresa_id': this.company_id,
            // 'empresa_id': this.company == '' ? this.company_id : this.company,
            'arrayQuestion': this.arrayQuestion,
            'id': this.offerId,
            'arrayQuestion': this.arrayQuestion,
          })
          .then(response => {
            this.saveImage(this.offerId)
            this.message = "Oferta registrada con éxito"
            this.url = 'oferta'
            this.showModalInfo = true
            this.infoPerson = false
            $("#button-submit i").remove();
            $("#button-submit").html('<i class="fas fa-check"></i> Actualizado');
          })
          .catch(error => {
            this.message = "No es posible registrar la oferta"
            this.url = ''
            this.showModalInfo = true
            $("#button-submit i").remove();
            $("#button-submit").html('<i class="fas fa-times"></i> Error al actualizar');
  
            setTimeout(() => {
              $("#button-submit i").remove();
              $("#button-submit").html('<i class="fas fa-repeat"></i> Reintentar');
              $("#button-submit").attr('disabled', false);
            }, 1500);
          })
        },
        loadData: function () {
          this.titleOffer = this.offer.titulo ? this.offer.titulo : ""
          this.shortDescription = this.offer.descripcion_corta ? this.offer.descripcion_corta : ""
          this.description = this.offer.description ? this.offer.description : ""
          this.experience = this.offer.experiencia ? this.offer.experiencia : ""
          this.language = this.offer.idioma ? this.offer.idioma : ""
          this.education = this.offer.escolaridad ? this.offer.escolaridad : ""
          this.country = this.offer.pais ? this.offer.pais : ""
          this.locationState = this.offer.departamento
          this.city = this.offer.ciudad
          this.salary = this.offer.salario ? this.offer.salario : ""
          this.dateStartContract = this.offer.fecha_contratacion ? this.offer.fecha_contratacion : ""
          this.typeContract = this.offer.tipo_contrato ? this.offer.tipo_contrato : ""
          this.area = this.offer.categoria ? this.offer.categoria : ""
          this.duration = this.offer.duracion ? this.offer.duracion : ""
          this.formulary = this.offer.formulario ? this.offer.formulario : 0
          this.datePublication = this.offer.fecha_inicio ? this.offer.fecha_inicio : ""
          this.dateEnd = this.offer.fecha_fin ? this.offer.fecha_fin : ""
          this.publicOffer = this.offer.activa ? this.offer.activa : ""
          this.company = this.offer.empresa_id ? this.offer.empresa_id : ""
          this.image = this.offer.imagen ? this.offer.imagen : ""
          this.offerId = this.offer.id ? this.offer.id : ""
        }
      },
      watch: {
        locationState: function (val) {
          this.searchCity(val)
        },
        country: function (val) {
          if(this.change != 0) {
            if(val == 'COLOMBIA' || val == 'ECUADOR') {
              this.locationState = ""
              this.searchLocationState(val)
              this.city = ""
            }
          }
          else {
            this.searchLocationState(val)
            this.locationState = this.offer.departamento ? this.offer.departamento : ""
            this.city = this.offer.ciudad ? this.offer.ciudad : ""
            this.change++
          }
        }
      },
      mounted() {
        this.listLocationStates = [this.locationStates]
        this.country = 'COLOMBIA'
        if(this.listFormulary === false)
          this.arrayQuestion = []
        else
          this.arrayQuestion = this.listFormulary
        if(this.edit === true)
          this.loadData()
        this.listSalary = [
          {'option': "A convenir"},
          {'option': "SMMLV"},
          {'option': "$1 a $1,5 Millones"},
          {'option': "$1,5 a $2 Millones"},
          {'option': "$2 a $2,5 Millones"},
          {'option': "$2,5 a $3 Millones"},
          {'option': "$3 a $3,5 Millones"},
          {'option': "$3,5 a $4 Millones"},
          {'option': "$4 a $4,5 Millones"},
          {'option': "$4,5 a $5 Millones"},
          {'option': "Más de $5 Millones"},
        ]
  
      }
    }
  
  </script>
  