<?php

namespace App\Repositories;

use App\UserData;

interface UserDataInterface {
    public function getAllUserData();
    public function getId(int $id);
    public function create(UserData $data);
    public function update(int $id, UserData $data);
    public function delete(int $id);
    public function search(string $nama);
}