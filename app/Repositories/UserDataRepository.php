<?php

namespace App\Repositories;

use App\UserData;

class UserDataRepository implements UserDataInterface
{

    public function getAllUserData()
    {
        return UserData::all();
    }

    public function getId(int $id)
    {
        return UserData::findOrFail($id);
    }

    public function create(UserData $data)
    {
        $data->save();
    }

    public function update(int $id, UserData $data)
    {
        $this->getId($id)->update(['nama' => $data->nama, 'telepon' => $data->telepon, 'email' => $data->email, 'alamat' => $data->alamat]);
    }

    public function delete(int $id)
    {
        $this->getId($id)->delete();
    }

    public function search(string $nama)
    {
        return UserData::where('nama', 'LIKE', '%' . $nama . '%');
    }
}
