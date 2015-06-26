<?php

namespace Artesaos\Defender\Controllers;

use Artesaos\Defender\Contracts\UserRepository;
use Illuminate\Foundation\Http\FormRequest as Request;

/**
 * 
 */
class UsersController extends Controller
{
    /**
     * The UserRepository contract
     * 
     * @var \Artesaos\Defender\Contracts\UserRepository
     */
    protected $userRepo;

    /**
     * UserController construct
     * 
     * @param UserRepository $userRepo [description]
     */
    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    /**
     * [index description]
     *
     * @return [type] [description]
     */
    public function index()
    {
        $users = $this->userRepo->all();

        if (count($users) === 0) {
            flash()->error('Nenhum usuário cadastrado no sistema.');

            return redirect('defender');
        }

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

        if (is_null($user)) {
            flash()->error('Usuário não encontrado.');

            return redirect('defender/users');
        }

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
        // code...
    }
}
