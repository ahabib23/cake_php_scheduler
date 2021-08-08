<?php


namespace App\Controller;

use Cake\Controller\Controller;
use App\Controller\AppController;
use Cake\Log\Log;

class CronController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function initialize()
    {
        parent::initialize();

    }

    public function index()
    {
//        $this->autoRender = FALSE;
        Log::write('debug', 'Something did not work');
        return 'ok';

    }
}
