Vue.component('test-nav', {
  data () {
    return {
      active: 'home'
    }
  },
  methods: {
    makeActive: function (item) {
      this.active = item;
    }
  }
})

new Vue({
  el: document.getElementById('page')
})