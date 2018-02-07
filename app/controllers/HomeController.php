<?php

namespace app\controllers;

use app\models\Cliente;
use app\models\Gestor;
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
		$depto = Cliente::insertar($data);
		Response::render("registrar", ["resgitroSuccess" => "registro ingreso correctamente"]);
	}
	public function actionRegistroOperario()
	{
		$data = $_POST;
		$depto = Gestor::insertarOperario($data);
		Response::render("registrar-operario", ["resgitroSuccess" => "registro ingreso correctamente"]);
	}
	

}