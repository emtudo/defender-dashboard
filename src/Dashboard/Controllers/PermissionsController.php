<?php  namespace Artesaos\Defender\Controllers;

use Artesaos\Defender\Contracts\Repositories\PermissionRepository;

/**
 * Class PermissionsController
 *
 * @author Andreo Vieira <andreoav@gmail.com>
 * @package Artesaos\Defender\Controllers
 */
class PermissionsController extends Controller
{
	/**
	 * @var PermissionRepository
	 */
	protected $permissionsRepository;

	/**
	 * @param PermissionRepository $permissionsRepository
	 */
	function __construct(PermissionRepository $permissionsRepository)
	{
		$this->permissionsRepository = $permissionsRepository;
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		$permissions = $this->permissionsRepository->getList('readable_name');

		return view('artesaos::dashboard.permissions.index', compact('permissions'));
	}
}
