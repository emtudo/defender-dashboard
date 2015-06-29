(function() {

    /* global base_prefix, Vue */

    'use strict';

    var rolesList = new Vue({

        el: '#roles-list-container',

        data: {
            roles: {
                data: []
            }
        },

        ready: function() {
            return this.fetchRoles();
        },

        methods: {
            fetchRoles: function() {
                return this.$http.get(base_prefix + 'api/roles', function(data) {
                    this.$set('roles', data);
                });
            }
        }
    })

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
