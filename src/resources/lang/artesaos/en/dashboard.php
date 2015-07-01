<?php

/*
 * Please sort by index recursively.
 */

return [
   "general"     => [
       "actions"     => [
           "add"    => "Add",
           "delete" => "Delete",
           "edit"   => "Edit",
           "update" => "Update"
       ],

       "back_to_system" => "Back to the System",
       "permissions" => "Permissions",
       "roles"       => "Roles",
       "users"       => "Users"
   ],

   "index"       => [
       "manage_permissions" => "Manage Permissions",
       "manage_roles"       => "Manage Roles",
       "manage_users"       => "Manage Users"
   ],

   "navigation"  => [
       "brand"       => "Defender Dashboard",
       "permissions" => "Permissions",
       "roles"       => "Groups",
       "users"       => "Roles"
   ],

   "permissions" => [
       "index" => [
           "empty"   => "There are no registred permissions.",
           "heading" => "Permissions List"
       ]
   ],


   "roles"       => [
       "index" => [
           "add"     => [
               "action"  => "Add",
               "heading" => "Add Role",
               "label"   => "Role Name"
           ],

           "empty"   => "There are no registred roles.",
           "heading" => "Roles List"
       ]
   ],

   "users"       => [
       "index" => [
           "empty"   => "There are no registred users.",
           "heading" => "Registred Users"
       ],

       "show"  => [
           "created_at"  => "Created At",
           "email"       => "Email",
           "heading"     => "User Details",

           "permissions" => [
               "add"   => "Permission",
               "empty" => "This user has no specific permission."
           ],

           "roles"       => [
               "add"   => "Role",
               "empty" => "This user has no roles."
           ],
           
           "updated_at"  => "Updated At"
       ]
   ],
];
