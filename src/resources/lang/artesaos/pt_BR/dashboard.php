<?php

/*
 * Favor ordenar pelo índice recursivamente.
 */

return [
   "general"     => [
       "actions"     => [
           "add"    => "Adicionar",
           "delete" => "Excluir",
           "edit"   => "Editar",
           "update" => "Atualizar"
       ],

       "permissions" => "Permissões",
       "roles"       => "Grupos",
       "users"       => "Usuários"
   ],

   "index"       => [
       "manage_permissions" => "Gerenciar Permissões",
       "manage_roles"       => "Gerenciar Grupos",
       "manage_users"       => "Gerenciar Usuários"
   ],

   "navigation"  => [
       "brand"       => "Defender Dashboard",
       "permissions" => "Permissões",
       "roles"       => "Grupos",
       "users"       => "Usuários"
   ],

   "permissions" => [
       "index" => [
           "empty"   => "Não existem permissões cadastrada.",
           "heading" => "Lista de Permissões"
       ]
   ],

   "roles"       => [
       "index" => [
           "add"     => [
               "action"  => "Cadastrar",
               "heading" => "Cadastrar Grupo",
               "label"   => "Nome do Grupo"
           ],

           "empty"   => "Não existem grupos cadastrados.",
           "heading" => "Lista de Grupos"
       ]
   ],

   "users"       => [
       "index" => [
           "empty"   => "Nenhum usuário cadastrado.",
           "heading" => "Usuário Registrados"
       ],
       "show"  => [
           "created_at"  => "Data de Cadastro",
           "email"       => "Email",
           "heading"     => "Detalhes do Usuário",

           "permissions" => [
               "add"   => "Permissão",
               "empty" => "Este usuário não possui permissões específicas atribuídas."
           ],

           "roles"       => [
               "add"   => "Grupo",
               "empty" => "Nenhum grupo atribuído para este usuário."
           ],
           
           "updated_at"  => "Última Atualização"
       ]
   ],
];
