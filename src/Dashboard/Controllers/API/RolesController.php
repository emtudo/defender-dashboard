<?php

namespace Artesaos\Defender\Controllers\API;

use Artesaos\Defender\Contracts\Repositories\RoleRepository;
use Artesaos\Defender\Controllers\Controller;

class RolesController extends Controller
{
	/**
	 * @var RoleRepository
	 */
	protected $roleRepository;

	/**
	 * @param RoleRepository $roleRepository
	 */
	function __construct(RoleRepository $roleRepository)
	{
		$this->roleRepository = $roleRepository;
	}

	/**
	 * Returns all roles - paginated
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function index()
	{
		$roles = $this->roleRepository->paginate(10);

		return response()->json($roles, 200);
	}

	/**
	 * Get a role by id
	 *
	 * @param $id role_id
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function show($id)
	{
		$role = $this->roleRepository->findById($id);

		return response()->json($role, 200);
	}

}
