/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

//import ExampleComponent from './components/ExampleComponent.vue';
//app.component('example-component', ExampleComponent);


import FormularioOferta from './components/FormularioOferta.vue';
app.component('formulario-oferta', FormularioOferta);


import CamposDinamicos from './components/CamposDinamicos.vue';
app.component('campos-dimamicos', CamposDinamicos);


// Componente por cada input

 
import CampoTexto from './components/campo/CampoTexto.vue';
app.component('CampoTexto',CampoTexto);

import CampoLista from './components/campo/CampoLista.vue';
app.component('CampoLista',CampoLista);

import CampoArchivo from './components/campo/CampoArchivo.vue';
app.component('CampoArchivo',CampoArchivo);

import CampoUrl from './components/campo/CampoUrl.vue';
app.component('CampoUrl',CampoUrl);
                          

import CampoFecha from './components/campo/CampoFecha.vue';
app.component('CampoFecha',CampoFecha);

import CampoFechaYHora from './components/campo/CampoFechayHora.vue';
app.component('CampoFechaYHora',CampoFechaYHora);

import CampoRadio from './components/campo/CampoRadio.vue';
app.component('CampoRadio',CampoRadio);


import CampoFoto from './components/campo/CampoFoto.vue';
app.component('CampoFoto',CampoFoto);


import CampoTextoLargo from './components/campo/CampoTextoLargo.vue';
app.component('CampoTextoLargo',CampoTextoLargo);
 






/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');
