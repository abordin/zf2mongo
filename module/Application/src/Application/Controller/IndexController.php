<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Document\User;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $dm = $this->getServiceLocator()->get('doctrine.documentmanager.odm_default');

        $user = new User();
        $user->setName('Bulat S.');

        $dm->persist($user);
        $dm->flush();

        return new ViewModel();
    }
}
