import bootstrap from 'bootstrap';
import Vue from 'vue';
import Swiper from 'swiper';
import axios from 'axios';
import Promise from 'bluebird';

axios.interceptors.request.use((config) => {
	if(config.method === 'post')
		config.headers['Content-Type'] = 'application/x-www-form-urlencoded';
	
	return config;
}, (error) => {
	return Promise.reject(error);
});

Vue.prototype.$http = axios;

window.Vue = Vue;

//Pull in components
import './components/bootstrap';