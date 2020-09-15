// import Vue from 'vue'
import VueRouter from 'vue-router'
// import Start from './views/Start'
import NewsFeed from './views/NewsFeed'
import UserShow from './views/Users/Show'


window.Vue = require('vue');

Vue.use(VueRouter)

export default new VueRouter({
	mode:'history',
	routes: [
		{
			path:'/',
			name: 'home',
			component: NewsFeed,
			meta: { title: 'NewsFeed'}
		},

		{
			path:'/users/:userId',
			name: 'user.show',
			component: UserShow,
			meta: { title: 'Profile'}

		}
	]
})