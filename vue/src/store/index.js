import { createStore } from "vuex";

const store = createStore({
	state: {
		user: {
			data:{name: 'Test'},
			token: null
		}
	},
	getters: {},
	actions: {},
	modules: {},
	mutations: {}
})

export default store;
