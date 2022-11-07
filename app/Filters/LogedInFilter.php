<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class LogedInFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(!session()->get('LoggedUserData')){
			session()->setFlashData("Error", "You have Logged Out, Please Login Again");
			return redirect()->to(base_url()."/login");
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}