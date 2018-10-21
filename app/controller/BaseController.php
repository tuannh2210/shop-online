<?php 
namespace App\Controller;
use Jenssegers\Blade\Blade;

use App\Model\Product;
use App\Model\Category;
use App\Model\User;
class BaseController
{
    
    protected function render($view, $var = [])
    {
        $blade = new Blade('app/views', 'storage');
        echo $blade->make($view, $var);
    }

    public function redirect($path = ""){
        header('location: ' . getUrl($path));
    }
}
?>