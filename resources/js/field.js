Nova.booting((Vue, router, store) => {
  Vue.component('index-nova-relationships-link-list', require('./components/IndexField'))
  Vue.component('detail-nova-relationships-link-list', require('./components/DetailField'))
  Vue.component('form-nova-relationships-link-list', require('./components/FormField'))
})
