<?php
namespace APP;

use AKOU\DBTable;

use function APP\htmout as APPHtmout;

include_once( __DIR__.'/app.php' );
include_once( 'schema.php' );

app::connect();

$feedback = feedback::get( 1 );
$ip =	getIpAddress();


$time = time()-24*60*60;
$date = date('Y-m-d H:i:s',$time);

$sql = 'SELECT * FROM feedback_response WHERE redeemed_timestamp > "'.$date.'" OR redeemed_timestamp IS NULL ORDER by redeemed_timestamp DESC';
$feedback_response_array = feedback_response::getArrayFromQuery( $sql );

$question_indexes = array();


foreach($feedback_response_array as $fr)
{
	$fr->responses_decoded = json_decode( $fr->response, false );

	foreach($fr->responses_decoded as $response)
	{
		$section_question = $response->feedback_section != $response->feedback_question 
				? htmesc( $response->feedback_section).'<br>'.htmesc($response->feedback_question)
				: htmesc( $response->feedback_question );
		$index = array_search( $section_question, $question_indexes );

		if( $index === FALSE )
		{
			$question_indexes[] = $section_question;
		}
	}
}


function getAnswerToQuestion($fr, $question)
{
	foreach($fr->responses_decoded as $response)
	{
		$section_question = $response->feedback_section != $response->feedback_question 
				? htmesc( $response->feedback_section).'<br>'.htmesc($response->feedback_question)
				: htmesc( $response->feedback_question );
		if( $section_question == $question )
		{
			return $response;
		}
	}
	return NULL;
}

function getIpAddress()
{
	$ip = '';
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) 
	{
			$ip = $_SERVER['HTTP_CLIENT_IP'];
	} 
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
	{
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} 
	else 
	{
			$ip = $_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}

function htmesc($v)
{
	return \htmlspecialchars($v, ENT_HTML5 | ENT_NOQUOTES, 'UTF-8');
}
function htmout($v)
{
	echo htmesc( $v );
}

function htmlIOValue($v)
{
	echo \htmlspecialchars($v,ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

?>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
		<style>
			.custom_radio
			{
				font-size: 20px!important;
			}
			body.body{
				min-height: 100vh!important;
				background-color: #EEEEEE!important;
			}

			table td,table th
			{
				border: solid 1px black;
			}

		</style>
	</head>
	<body class="body">
		<div style="margin:auto auto;width:100%;">
			<table style="border: 1px solid black;width:100%">
				<thead>
					<tr style="border: 1px solid black">
						<th rowspan="2">IP:</th>
						<th rowspan="2">fecha:</th>
						<th rowspan="2">Producto:</th>
						<th rowspan="2">Redimido:</th>
						<?php foreach($question_indexes as $question): ?>
							<th colspan="2"><?=$question?></th>
						<?php endforeach; ?>
					</tr>
					<tr>
						<?php foreach($question_indexes as $question): ?>
							<th>Respuesta</th>
							<th>Numerica</th>
						<?php endforeach; ?>
					</tr>
				</thead>
				<tbody>
					<?php foreach($feedback_response_array as $fr): ?>
						<tr>
							<td><?=$fr->session_hash?></td>
							<td><?=$fr->ip?></td>
							<td><?=$fr->gift_product?></td>
							<td><?=($fr->redeemed_timestamp??'')?></td>
							<?php
								foreach($question_indexes as $question)
								{
									$answer = getAnswerToQuestion($fr, $question);

									if( $answer === NULL )
									{
										?>
											<td></td>
											<td></td>
										<?php
									}
									else
									{
										?>
											<td>
												<?=($answer->response!= $answer->numeric_response?$answer->response:'')?>
											</td>
											<td><?=$answer->numeric_response?></td>
										<?php
									}
								}
							?>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</body>
</html>
