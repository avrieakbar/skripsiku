<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['auth'];

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
        session();
        function filterData($text, $pattern)
        {
            $patlen = strlen($pattern);
            $textlen = strlen($text);
            $table = makeCharTable($pattern);

            for ($i = $patlen - 1; $i < $textlen;) {
                $t = $i;
                for ($j = $patlen - 1; $pattern[$j] == $text[$i]; $j--, $i--) {
                    if ($j == 0) return $i;
                }
                $i = $t;
                if (array_key_exists($text[$i], $table))
                    $i = $i + max($table[$text[$i]], 1);
                else
                    $i += $patlen;
            }
            return -1;
        }

        function makeCharTable($string)
        {
            $len = strlen($string);
            $table = array();
            for ($i = 0; $i < $len; $i++) {
                $table[$string[$i]] = $len - $i - 1;
            }
            return $table;
        }
    }
}
