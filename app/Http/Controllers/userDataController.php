<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserData as userDataModel;
use App\Repositories\UserDataRepository;


class userDataController extends Controller
{
    private $userRepo;

    public function __construct()
    {
        $this->userRepo = new UserDataRepository();
    }

    public function index()
    {
        $datas = $this->userRepo->getAllUserData();
        return view('userdata.index', ['datas' => $datas]);
    }

    public function create_form()
    {
        return view('userdata.create');
    }

    public function create(Request $request)
    {
        $data = new userDataModel;
        $data->nama = $request->input('nama');
        $data->telepon = $request->input('telepon');
        $data->email = $request->input('email');
        $data->alamat = $request->input('alamat');
        $this->userRepo->create($data);
        return redirect()->route('userDataIndex');
    }

    public function edit(int $id)
    {
        $data = $this->userRepo->getId($id);
        return view('userdata.edit', ['data' => $data]);
    }

    public function update(Request $request, int $id)
    {
        $data = new userDataModel;
        $data->nama = $request->input('nama');
        $data->telepon = $request->input('telepon');
        $data->email = $request->input('email');
        $data->alamat = $request->input('alamat');
        $this->userRepo->update($id, $data);
        return redirect()->route('userDataIndex');
    }

    public function delete(int $id)
    {
        $this->userRepo->delete($id);
        return redirect()->route('userDataIndex');
    }

    public function search(Request $request) {
        $datas = userDataModel::when($request->keyword, function ($query) use ($request) {
            $query->where('nama', 'like', '%{$request->keyword}%');
        })->get();
        return view('userdata.search', ['datas' => $datas]);
    }
}