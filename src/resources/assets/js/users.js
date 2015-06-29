(function() {

    /* global base_prefix, Vue */

    // Setup the token
    Vue.http.headers.common['X-CSRF-TOKEN'] = $('#csrf-token').attr('value');

    /**
     * User details
     *
     * @type {Vue}
     */
    var userShow = new Vue({

        el: '#user-details',

        data: {

            user: {},

            roles: [],

            permissions: []

        }

    });

}).call(this);
