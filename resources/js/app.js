/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./jquery-3.5.1.min.js');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('test-component', require('./components/TestComponent.vue').default);
Vue.component('input-component', require('./components/InputComponent.vue').default);
Vue.component('flash-message', require('./components/FlashMessage.vue').default);
// Vue.component('profile-edit-form', require('./components/ProfileEditForm.vue').default);
Vue.component('icon-edit', require('./components/IconEdit.vue').default);
Vue.component('ideas-list', require('./components/IdeasList.vue').default);
Vue.component('hamburger-menu', require('./components/HamburgerMenu.vue').default);
Vue.component('interest-component', require('./components/InterestComponent.vue').default);
Vue.component('buy-component', require('./components/BuyComponent.vue').default);
Vue.component('category-menu', require('./components/CategoryMenu.vue').default);
Vue.component('pagination', require('./components/Pagination.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app',

    // data: function() {
    //   return {
    //     menu: false
    //   }
    // },

      data: {
        page: 1,
        items: []
      },
      methods: {
        getItems() {
    
          const url = '/ajax/ideas-list?page=' + this.page;
          // const url = '/ajax/ideas-list';
          axios.get(url)
            .then((response) => {
              this.items = response.data;
            });
          }
        },
        mounted() {
          
          this.getItems();

          // console.log(this.items)
    
      }
    
});

