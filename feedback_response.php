<?php
namespace APP;

use AKOU\DBTable;

use function APP\getIpAddress as APPGetIpAddress;

include_once( __DIR__.'/app.php' );
include_once( 'schema.php' );

app::connect();


function getIpAddress()
{
	$ip = '';
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
			$ip = $_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}

function getRandomString($length)
{
	$characters = '2346789ABCDEFGHIJKLMNPQRSTUVWXYZ';
	$charactersLength = strlen($characters);

	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}


if( !empty( $_POST['feedback_id'] ) )
{
	$ip = APPGetIpAddress();

	$response_dictionary = array();

	$fr_search = array('session_hash'=> $_POST['session_hash']);

	$feedback_response = feedback_response::searchFirst( $fr_search );

	if( $feedback_response )
	{
		http_response_code(200);
		echo json_encode($feedback_response->toArray());
		return;
	}

	$feedback_response = new feedback_response();

	$response	= array();
	foreach($_POST as $index=> $answer )
	{
		if( in_array( $index , array('feedback_id', 'session_hash') ) )
		{
			continue;
		}
		$id = explode('_',$index);
		$feedback_question	= feedback_question::get( $id[1] );
		$feedback_section 	= feedback_section::get( $feedback_question->feedback_section_id );

		$numeric_response = '';

		$answer_values	= explode(',',$feedback_question->values );

		if( ctype_digit( $answer ) )
		{
			$numeric_response = $answer;
		}
		else if(count( $answer_values ) > 1 )
		{
			$index = array_search($answer, $answer_values);

			if( $index !== FALSE )
			{
				$numeric_response = $index+1;
			}
		}


		$response[] = array
		(
			'feedback_question_id'=>$feedback_question->id,
			'feedback_question'=>$feedback_question->question,
			'feedback_section'=>$feedback_section->name,
			'response'=> $answer,
			'numeric_response'=> $numeric_response
		);
	}

	$gift_code = date("ymd").getRandomString(4);

	$feedback_response->assignFromArray
	(
		array
		(
			'session_hash'=>$_POST['session_hash'],
			'ip'=>$ip,
			'gift_product'=> getProduct(),
			'gift_code'=> $gift_code,
			'response' => json_encode( $response ),
			'created'=>'CURRENT_TIMESTAMP'
		)
	);

	if( $feedback_response->insert() )
	{
		http_response_code(200);
		echo json_encode($feedback_response->toArray());
		return;
	}
	http_response_code(400);
}


function getProduct()
{
	// Definimos las probabilidades
	$probabilidades = [
		"Nachos" => 10,
		"Cerveza" => 15,
		"Bebida" => 25,
		"Postre" => 50,
	];

	// Generamos un número aleatorio entre 0 y 100
	$numeroAleatorio = rand(0, 100);

	// Recorremos las probabilidades para encontrar la que coincida con el número aleatorio
	foreach ($probabilidades as $producto => $probabilidad)
	{
		if ($numeroAleatorio <= $probabilidad) {
			// Devolvemos la cadena con el producto
			return $producto;
		}
	}

	// Si no se encuentra ninguna coincidencia, devolvemos un valor vacío
	return "Postre";
}
