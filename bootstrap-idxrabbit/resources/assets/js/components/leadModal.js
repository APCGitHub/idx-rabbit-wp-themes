import Vue from 'vue';

Vue.component('leadModal', {
	prop: {
		prospect: Object
	},
	data() {
		return {
			first_name: '',
			last_name: ''
		};
	},
	created() {
		if(this.prospect) {
			this.first_name = this.prospect.first_name;
			this.last_name = this.prospect.last_name;
		}
	},
	computed: {
		name() {
			if(!this.first_name || !this.last_name)
				return '';
			
			return `${this.first_name} ${this.last_name}`;
		}
	}
});