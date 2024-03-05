<?php

namespace App\Controller;

use App\Entity\RequestCompanyAccount;
use App\Form\RequestCompanyAccountType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RequestCompanyAccountController extends AbstractController
{
    #[Route('/request-company-account', name: 'app_request_company_account')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $requestCompanyAccount = new RequestCompanyAccount();

        $form = $this->createForm(RequestCompanyAccountType::class, $requestCompanyAccount);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $em->persist($requestCompanyAccount);
            $em->flush();
        }

        
        return $this->render('request_company_account/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
