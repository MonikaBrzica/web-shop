
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#categories',
    data: {
        showByIndex: null,
    },
    methods: {
        showOptions: function () {
            console.log("aaa");
        }
    }
});

const articles = new Vue({
    el: '#articles',
    delimiters: ["((", "))"],
    data: {
        values: [
            { name: "Plugin Foo", id: 2, hits: 33 },
            { name: "Plugin Bar", id: 1, hits: 42 },
            { name: "Plugin Foo Bar", id: 3, hits: 79 }
        ]
    },
    created: function () {
        console.log(this.values);
    }
});

const menuFour = document.querySelector('.menuFour');

function addClassFunFour() {
    this.classList.toggle("clickMenuFour");
}

menuFour.addEventListener('click', addClassFunFour);

$(".mat-input").focus(function(){
    $(this).parent().addClass("is-active is-completed");
});

$(".mat-input").focusout(function(){
    if($(this).val() === "")
        $(this).parent().removeClass("is-completed");
    $(this).parent().removeClass("is-active");
});