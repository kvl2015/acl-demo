<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Controller used to manage blog contents in the backend.
 *
 *
 * @Route("/admin/report")
 * @Security("is_granted('ROLE_EMPLOEE')")
 *
 */
class ReportController extends AbstractController
{
    /**
     * Report
     *
     * @Route("/", methods="GET", name="admin_report_index")
     */
    public function index(): Response
    {
        return $this->render('admin/report/index.html.twig');
    }

}
