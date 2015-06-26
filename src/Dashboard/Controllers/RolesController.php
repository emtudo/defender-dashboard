<?php

namespace Artesaos\Defender\Controllers;

use Artesaos\Defender\Contracts\Repositories\RoleRepository;

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
		$roles = $this->rolesRepository->getList('name');

		return view('artesaos::dashboard.roles.index', compact('roles'));
	}
}
