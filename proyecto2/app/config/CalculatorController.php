<?php
namespace AppBundle\Cotroller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception;

class CalculatorController extends Controller {
    public function indexAction($age) {
        $currentYear = date('Y');

        return new Response('<html><body>Current year: '.$currentYear.
        '<br/>Year of birth: '.($currentYear - $age).'</body></html>');
    }
}