<template>
    <br>

    <fieldset style="border-style: solid; border:2px;">
        <legend>{{index}} | Campo Foto</legend>
        <div class="col-sm-10">
            <label>Escribe la pregunta:<span style="color: rgb(255, 0, 0);">*</span></label>
            <input type="text" name="Experiencia" class="form-control required">
            <div class="col-sm-10"></div>
            <input type="file" accept="image/*;capture=camera">
            <div id="foto">
                <img name="photo-captured" />
            </div>
        </div>
    </fieldset>
</template>

<script>
    import { Plugins, CameraResultType } from '@capacitor/core';
    export default {
        data: function(){
            return {
                    campos: null,
                    components: []
                }
        },
        props:['title', 'index', 'sizex'],
        methods: {
            sacarFoto() {
                var canvas = this.$refs.canvas;
                this.imagenBase64 = tutorial.utils.cameraUtils.tomarFoto(canvas);
            },
            iniciarCamara() {
                var self = this;
                self.actualizarEstadoCamara("CARGANDO");
                self.limpiarImagen();
                Vue.nextTick(() => {
                    tutorial.utils.cameraUtils.iniciarCamara().then(function (video) {
                        self.actualizarEstadoCamara("LISTO");
                        var canvas = self.$refs.canvas;
                        self.mostrarVideo(canvas, video);
                    }).catch(function (e) {
                        console.error(e);
                        alert("Ha ocurrido un error al iniciar la cámara");
                        self.actualizarEstadoCamara("APAGADO");
                    });
                });
            },
            actualizarEstadoCamara(estado) {
                this.estadoCamara = estado;
            },
            limpiarImagen() {
                this.imagenBase64 = "";
            },
            mostrarVideo(canvas, video) {
                var self = this;
                video.onloadstart = function () {
                    function loop() {
                        if (self.estadoCamara === "LISTO") {
                            ctx.drawImage(video,0,0);
                            setTimeout(loop, 1000 / 30); // 30fps
                        } else {
                            ctx.clearRect(0, 0, canvas.width, canvas.height);
                        }
                    }
                    canvas.parentNode.appendChild(video);
                    video.play();
                    var ctx = canvas.getContext('2d');
                    loop();
                };
            }
        }
    }
</script>
