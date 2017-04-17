import Vue from 'vue';
import Parse from 'url-parse';
import UrlHelper from 'url-query-builder';

Vue.component('searchResults', {
	props: {
		defaultOrder: {
			type: String,
			default: 'ListPrice desc'
		},
		defaultPaging: {
			type: String,
			default: 12
		},
		defaultPage: {
			default: 0
		},
		searchId: {
			default: 0
		}
	},
    data() {
        return {
            order: [{
                label: 'Sort Order',
                value: ''
            }, {
                label: 'Price Descending',
                value: 'ListPrice desc'
            }, {
                label: 'Price Ascending',
                value: 'ListPrice asc'
            }],
            paging: [12, 24, 36],
            query: {
            	search_id: parseInt(this.searchId),
            	orderby: this.defaultOrder,
            	per_page: this.defaultPaging,
            	skip: this.defaultPage
            }
        };
    },
    watch: {
    	'query.orderby'(val) {
    		this.search();
    	},
    	'query.per_page'(val) {
    		this.search();
    	}
    },
    methods: {
    	search() {
    		let base = Parse(window.location.href);
    		let url = `${base.origin}${base.pathname}`;
    		let urlHelper = new UrlHelper(url);

    		for(let key of Object.keys(this.query)) {
    			let val = this.query[key];

    			urlHelper.add(key, val);
    		}

    		window.location = urlHelper.getUrl();
    	},
    	prev() {
    		--this.query.skip;

    		this.search();
    	},
    	next() {
    		++this.query.skip;

    		this.search();
    	}
    }
});
