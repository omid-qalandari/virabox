import Vue from 'vue'

import User from '../components/User'

let userApp = new Vue({
    el: '#user-app',
    render: h => h(User)
})
