<?php

namespace Artesaos\Defender\Controllers;

use Artesaos\Defender\Contracts\Repositories\RoleRepository;
use Illuminate\Http\Request;

/**
 * Class RolesController
 *
 * @author Andre Vieira <andreoav@gmail.com>
 * @package Artesaos\Dashboard\Controllers
 */
class RolesController extends Controller
{
	/**
	 * @var RoleRepository
	 */
	protected $rolesRepository;

	/**
	 * @param RoleRepository $rolesRepository
	 */
	function __construct(RoleRepository $rolesRepository)
	{
		$this->rolesRepository = $rolesRepository;
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		$roles = $this->rolesRepository->paginate(10);

		return view('artesaos::dashboard.roles.index', compact('roles'));
	}

	/**
	 * Create a new role
	 *
	 * @param Request $request
	 * @return array
	 */
	public function store(Request $request)
	{
		$name = $request->get('name');

		$newRole = $this->rolesRepository->create($name);

		return response()->json($newRole, 201);
	}
}
