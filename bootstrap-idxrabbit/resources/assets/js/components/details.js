import Vue from 'vue';
import qs from 'qs';

Vue.component('property-details', {
	props: {
		loadActions: {
			type: Array
		},
		listing: {
			type: Object,
			required: true
		},
		currentUrl: {
			required: true,
			type: String
		}
	},
	data() {
		return {
			http: {
				favoriting: false
			},
			on_load_actions: this.loadActions,
			actions: [
				'favorite_listing'
			],
			action_map: {
				favorite_listing: 'favoriteListing'
			},
			liked: null
		};
	},
	created() {
		for(var i = 0; i < this.on_load_actions.length; i++) {
			let a = this.on_load_actions[i];

			if(this.actions.indexOf(a) > -1) {
				let method = this.getMethod(a);

				if(method)
					this[method]();
			}
		}
	},
	methods: {
		getMethod(action) {
			return this.action_map[action];
		},
		favoriteListing() {
			this.http.favoriting = true;

			this.$http.post('/wp-admin/admin-ajax.php', qs.stringify({
				action: 'post_favorite_listing',
				listing_id: this.listing.ListingId,
				listing_url: this.currentUrl
			})).then(res => {
				let body = res.data;
				if(body.success)
					this.liked = true;

				this.http.favoriting = false;
			}).catch(err => {
				let error = err.response.data;
				this.http.favoriting = false;
				console.log(error);
			});
		}
	}
});
