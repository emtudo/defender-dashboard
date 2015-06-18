<?php

namespace Artesaos\Defender\Controllers;

use Artesaos\Defender\Contracts\UserRepository;
use Illuminate\Foundation\Http\FormRequest as Request;

class UsersController extends Controller
{
    protected $userRepo;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function index()
    {
        $users = $this->userRepo->all();

        return view('artesaos::dashboard.users.index', compact('users'));
    }

    /**
     * Shows a single user
     * 
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function show($id)
    {
        $user = $this->userRepo->findById($id);

        return view('artesaos::dashboard.users.show', compact('user'));
    }

    public function create()
    {
        return view('artesaos::dashboard.users.create');
    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {
        return view('artesaos::dashboard.users.edit');
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy(Request $request, $id)
    {
        # code...
    }
}
