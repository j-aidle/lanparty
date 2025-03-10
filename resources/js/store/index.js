import Vue from 'vue'
import pinia from 'pinia'
import users from './modules/users'
import numbers from './modules/numbers'
import tickets from './modules/tickets'
import auth from './modules/auth'
import newsletter from './modules/newsletter'
import events from './modules/events'

Vue.use(pinia)

const debug = process.env.NODE_ENV !== 'production'

export default new pinia.Store({
  modules: {
    users,
    numbers,
    tickets,
    auth,
    newsletter,
    events
  },
  strict: debug
})
