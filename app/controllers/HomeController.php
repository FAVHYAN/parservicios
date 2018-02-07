<?php

namespace app\controllers;

use app\models\Cliente;
use app\models\Gestor;
use app\models\Pqr;
use \Controller;
use \Response;


class HomeController extends Controller
{
	public function actionIndex()
	{
		Response::render("home");
	}
	public function actionInicio()
	{

		Response::render("inicio");

	}
	public function actionRegistrar()
	{

		Response::render("registrar");

	}
	public function actionRegistrarOperario()
	{

		Response::render("registrar-operario");

	}
	public function actionRegistro()
	{
		$data = $_POST;
		$data = Cliente::insertar($data);
		Response::render("registrar", ["resgitroSuccess" => "registro ingreso correctamente"]);
	}
	public function actionRegistroOperario()
	{
		$data = $_POST;
		$data = Gestor::insertarOperario($data);
		Response::render("registrar-operario", ["resgitroSuccess" => "registro ingreso correctamente"]);
	}
	
	public function actionCrearPQR()
	{
		$data = $_POST;
		Response::render("crear-pqr");

	}
	public function actionRegistroPQR()
	{
		$data = $_POST;
		$data = Pqr::insertar($data);
		Response::render("crear-pqr", ["resgitroSuccess" => "registro ingreso correctamente"]);
	}

}