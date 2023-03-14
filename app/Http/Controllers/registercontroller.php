<?php

namespace App\Http\Controllers;

use App\Interfaces\AuthRepositoryInterface;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

/**
 * Summary of registercontroller
 */
class RegisterController extends Controller
{

    private $authInterface;

    /**
     * Summary of __construct
     * @param AuthRepositoryInterface $authInterface
     */
    public function __construct(AuthRepositoryInterface $authInterface)
    {
        $this->authInterface = $authInterface;
    }

    public function register() : View
    {
        return view('register');
    }

    public function registerData(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $post = $this->authInterface->createPost($request);
            if ($post) {
                return redirect("/")->with('success', 'Success! Registation complate');
            } else {
                return back()->with('failed', 'Failed! registation');
            }

    }

	/**
	 * @return mixed
	 */
	public function getAuthInterface() {
		return $this->authInterface;
	}
}
