<?php  namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class UserCheck implements FilterInterface
{
  public function before (RequestInterface $request)
  {
      $uri = service('uri');
      if($uri->getSegment(1) == '/dashboard') {
        if($uri->getSegment(2) == '')
          $segment = '/login';
          else
          $segment = $uri->getSegment(2);

          return redirect()->to($segment);
      }
  }

  public function after (RequestInterface $request, ResponseInterface $response)
  {

  }
}
