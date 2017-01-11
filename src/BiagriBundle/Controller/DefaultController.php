<?php

namespace BiagriBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {


        $data = array();
        $form = $this->createFormBuilder($data)
            ->add('villeDepart', TextType::class, array(
                'mapped' => false
            ))
            ->add('save', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $result = $form->get('villeDepart')->getData();

            return $this->render(':default:index.html.twig', array(
                'form' => $form->createView()
            ));




        }
    }

    private function fraisTransport($villeDepart){

                $destination = "Rouen";
                $fraisTransport = 0;
                $distance = 0;

                $rouens_km[0] = 140;
                $rouens_km[1] = 150;
                $rouens_km[2] = 160;
                $rouens_km[3] = 170;
                $rouens_km[4] = 180;
                $rouens_km[5] = 190;
                $rouens_km[6] = 200;
                $rouens_km[7] = 210;
                $rouens_km[8] = 220;
                $rouens_km[9] = 230;
                $rouens_km[10] = 240;
                $rouens_km[11] = 250;
                $rouens_km[12] = 250;
                $rouens_km[13] = 260;
                $rouens_km[14] = 270;
                $rouens_km[15] = 280;
                $rouens_km[16] = 290;
                $rouens_km[17] = 300;
                $rouens_tarif[0] = 11.63;
                $rouens_tarif[1] = 12.05;
                $rouens_tarif[2] = 11.54;
                $rouens_tarif[3] = 11.90;
                $rouens_tarif[4] = 12.29;
                $rouens_tarif[5] = 12.67;
                $rouens_tarif[6] = 13.05;
                $rouens_tarif[7] = 13.43;
                $rouens_tarif[8] = 13.79;
                $rouens_tarif[9] = 14.18;
                $rouens_tarif[10] = 14.55;
                $rouens_tarif[11] = 14.95;
                $rouens_tarif[12] = 15.30;
                $rouens_tarif[13] = 15.69;
                $rouens_tarif[14] = 16.07;
                $rouens_tarif[15] = 16.45;
                $rouens_tarif[16] = 16.83;
                $rouens_tarif[17] = 17.20;

                /* API GOOGLE DISTANCE MATRIX*/
                $jsrc = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=".$villeDepart."&destinations=Rouen&mode=driving&language=fr-FR";
                $json = file_get_contents($jsrc);
                $jset = json_decode($json, true);

                $distance = $jset["rows"][0]["elements"][0]["distance"]["value"];

//        $em = $this->getDoctrine()->getManager(); // appel doctrine;

//        $resultats = $em->getRepository('BiagriBundle:Offre')->getResultsByCity($destinations);
                $distance = round($distance/1000);

                /* Recherche tarif par rapport aux kilometres*/
                for ($i = 0; $i <= 16; $i++) {

                    if ($distance < $rouens_km[$i]) {
                        $ind = $i;
                        break;
                    }

                }

                $fraisTransport = $rouens_tarif[$ind];

                return $fraisTransport*30;

            }


    }
