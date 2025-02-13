<?php

namespace App\Controller;

use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class FDGE_Controller extends AbstractController
{
    private Connection $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    #[Route('/api/fdgecontroller', name: 'get_db')]
    public function index(): JsonResponse
    {
        // Consulta para recuperar el primer mensaje de la tabla "messages"
        $sql = 'SELECT frasefdge FROM secretosfdge LIMIT 1';
        $result = $this->connection->fetchOne($sql);
        // Si no hay mensaje en la BD, devolver un mensaje de error
        if (!$result) {
        return $this->json(['secretosfdge' => 'No messages found in the database!']);
        }
        $result = 'Backend operativo, respuesta de la BD: ' . $result;
        return $this->json(['secretosfdge' => $result]);
    }
}