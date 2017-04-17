import "./bootstrap";

if(document.getElementById('idxrabbit-app')) {
	const app = new Vue({
		el: '#idxrabbit-app',
		delimiters: ['[[', ']]'],
	});
}