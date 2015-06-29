(function() {

    // Setup the token
    Vue.http.headers.common['X-CSRF-TOKEN'] = $('#csrf-token').attr('value');

    var userShow = new Vue({

        el: '#user-details',

        data: {

            user: {},

            roles: [],

            permissions: []

        }

    });

    var addRole = new Vue({

        el: '#add-role-container',

        data: {

            role: { name: '' }

        },

        methods: {

            /**
             * Add a new role
             *
             * @param e The submit event
             */
            addRole: function(e) {
                e.preventDefault();

                var newRole = this.role;
                this.role = { name: '' };

                // Start loading
                var createBtn = Ladda.create(this.$$.createRoleButton);
                createBtn.start();

                // Send the post request to the server
                this.$http.post(base_prefix + 'roles', newRole, function (data, status, request) {
                    createBtn.stop();
                }).error(function (data, status, request) { console.log(data); createBtn.stop(); });

            }

        }

    });

}).call(this);
