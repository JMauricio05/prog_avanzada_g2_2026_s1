<?php

namespace App\Contactos\Presentation\Repositories;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Contactos\Controllers\ContactosController;
use Exception;

class ContactosRepository
{

    function all(Request $request, Response $response)
    {
        $controller = new ContactosController();
        $contactos = $controller->getContactos();
        $response->getBody()->write($contactos);
        return $response->withHeader("Content-Type", "application/json");
    }

    function create(Request $request, Response $response)
    {
        $bodyRequest = $request->getBody()->getContents();
        $data = json_decode($bodyRequest, true);
        $controller = new ContactosController();
        $contacto = $controller->guardarContacto($data);
        $response->getBody()->write($contacto);
        return $response
            ->withStatus(201)
            ->withHeader("Content-Type", "application/json");
    }

    function detail(Request $req, Response $resp, $args)
    {
        try {
            $id = $args['id'];

            $controller = new ContactosController();
            $contacto = $controller->getContacto($id);

            $resposeBody = $contacto->toJson();
            $resp->getBody()->write($resposeBody);
            return $resp->withHeader("Content-Type", "application/json");
        } catch (Exception $ex) {
            $resp->getBody()->write("Error: " . $ex->getMessage());
            $code = 400;
            if ($ex->getCode() == 1) {
                $code = 404;
            }
            return $resp->withStatus($code);
        }
    }

    function update(Request $req, Response $resp, $args)
    {
        try {
            $id = $args['id'];
            $body = $req->getBody()->getContents();
            $data = json_decode($body, true);

            $controller = new ContactosController();
            $contacto = $controller->modificarContacto($id, $data);

            $dataResponse = $contacto->toJson();
            $resp->getBody()->write($dataResponse);
            return $resp
                ->withStatus(200)
                ->withHeader("Content-Type", "application/json");
        } catch (Exception $ex) {
            $resp->getBody()->write("Error: " . $ex->getMessage());
            $code = 400;
            if ($ex->getCode() == 1) {
                $code = 404;
            }
            return $resp->withStatus($code);
        }
    }

    function delete(Request $req, Response $resp, $args)
    {
        try {
            $id = $args['id'];

            $controller = new ContactosController();
            $controller->borrarContacto($id);

            $dataResponse = json_encode(['mgs' => 'Contacto borrado']);
            $resp->getBody()->write($dataResponse);
            return $resp
                ->withStatus(200)
                ->withHeader("Content-Type", "application/json");
        } catch (Exception $ex) {
            $resp->getBody()->write("Error: " . $ex->getMessage());
            $code = 400;
            if ($ex->getCode() == 1) {
                $code = 404;
            }
            return $resp->withStatus($code);
        }
    }
}
