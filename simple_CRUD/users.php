<?php

function getUsers()
{
    return json_decode(file_get_contents(__DIR__.'/users.json'), true);
}

function getUserById($id)
{
    $users = getUsers();
    foreach ($users as $user) {
        if ($id == $user['id']) {
            return $user;
        }
    }
    return null;
}

function createUser($data)
{

}

function updateUser($data, $id)
{

}

function deleteUser($id)
{

}