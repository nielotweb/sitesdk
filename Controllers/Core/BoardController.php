<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Controllers\Controller;

use App\Core\Database\Connection;
use App\Core\SessionManagement;

class BoardController extends Controller
{

    public $session;
    public $connection;

    /**
     * BoardController constructor.
     * @param SessionManagement $sessionManagement
     * @param Connection $connection
     */
    public function __construct(SessionManagement $sessionManagement, Connection $connection)
    {
        $this->session = $sessionManagement;
        $this->connection = $connection;
    }

    /**
     *
     */
    public function index() : void
    {

        Controller::renderView('Core/Board');

    }

}
