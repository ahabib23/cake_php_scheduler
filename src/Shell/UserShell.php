<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     3.0.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Shell;

use App\Controller\PagesController;
use App\Controller\UsersController;
use App\Controller\CronController;
use Cake\Console\ConsoleIo;
use Cake\Console\ConsoleOptionParser;
use Cake\Console\Shell;
use Cake\Log\Log;
use Cake\ORM\Locator\LocatorInterface;
use Psy\Shell as PsyShell;
use App\Model\Table\UsersTable;

/**
 * Simple console wrapper around Psy\Shell.
 */
class UserShell extends Shell
{

    /**
     * the main function is kicked off like a contructor
     *
     */
    function main() {
//	$logWright=new UsersController();
////       $result= $logWright->index();
//       $result= $logWright->add2();

       $logWright=new UsersTable();
//       $result= $logWright->index();
       $result= $logWright->add2();
       dd($result);
    }

}
