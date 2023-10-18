<?php
namespace APP;

use AKOU\DBTable;

include_once( __DIR__.'/app.php' );
include_once( 'schema.php' );

app::connect();

$feedback = feedback::get( 1 );
#$feedback_section_array = feedback_section::search(array('id'.DBTable::LT_SYMBOL=> 3, 'feedback_id'=>$feedback->id), true, 'id' );
$feedback_section_array = feedback_section::search(array('feedback_id'=>$feedback->id), true, 'id' );
$feedback_question_dict =	feedback_question::searchGroupByIndex(array('feedback_section_id'=>array_keys($feedback_section_array) ), true, 'feedback_section_id');
$ip =	getIpAddress();
$session_hash = uniqid( $ip,true);


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

		</style>
		<script>
			window.addEventListener('load',()=>{
				let form = document.getElementById('form');
				form.addEventListener('submit',function(evt)
				{
					evt.preventDefault();
					evt.stopPropagation();
					console.log('Enviando');
					console.log('what has', evt );

					evt.stopPropagation();
					let form_data = new FormData( form );
					console.log( form_data );

					console.log( form_data.keys() );
					console.log( form_data.values() );


					let params = {
						 method: 'POST',
						 headers: { },
						 body: form_data,
					};

					fetch( 'feedback_response.php', params )
					.then((response)=>
					{
						if (response.status === 200) 
						{
							// Success!
							return response.json();
						} 
						else 
						{
							 throw 'Ocurrio un error al guardar la informacion';
						}
					})
					.then((response)=>
					{
						window.location.href = '/showFeedbackRedeemCode.php?gift_code='+reponse.gift_code;
					});
				},true);
			});

			function sendForm(evt)
			{
		
			}
		</script>
	</head>
	<body class="body">
	<div style="margin:auto auto;width:100%;max-width:960px;">
	<form name="form" method="POST" id="form" action="">
	<input type="hidden" name="feedback_id" value="<?=$feedback->id?>">
	<input type="hidden" name="session_hash" value="<?=$session_hash?>">
<?php
foreach($feedback_section_array as $feedback_section )
{
	$feedback_question_array = $feedback_question_dict[ $feedback_section->id ]??array();
	?>
		<div class="card p-3 m-3" style="margin-bottom:10px;">
			<h2><?=htmout($feedback_section->name)?></h2>
			<p><?=htmout($feedback_section->description)?></p>
			<?php if($feedback_section->is_table ): ?>
				<table style="width:100%;">
					<?=renderSectionValues($feedback_section)?>
					<?php foreach($feedback_question_array as $feedback_question ):?>
						<?=renderQuestion($feedback_question, $feedback_section->is_table)?>
					<?php endforeach; ?>
				</table>
			<?php else:?>
				<?=renderSectionValues($feedback_section)?>
				<?php foreach($feedback_question_array as $feedback_question ):?>
					<?=renderQuestion($feedback_question, $feedback_section->is_table)?>
				<?php endforeach; ?>
			<?php endif;?>
		</div>
	<?php
}
?>
	<div class="px-3">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
	</form>
</body>
</html><?php

function renderSectionValues($feedback_section)
{
	if( !$feedback_section->values )
		return '';

	$values_array = explode(',',$feedback_section->values);
	?>
	<td style="width: <?=100/(count($values_array)+1)?>%"></td>
	<?php foreach($values_array as $value) :?>
	<td class="py-2" style="width: <?=100/(count($values_array)+1)?>%">
		<?=htmout($value)?>
	</td>
	<?php endforeach;?>
	<?php
}

function renderQuestion($feedback_question,$is_table)
{
	$values_array = \explode(',',$feedback_question->values??'' );

	if( $is_table )
	{
		?>
		<tr>
			<td class="py-2"><?=htmout($feedback_question->question)?></td>
			<?php foreach($values_array as $value) :?>
			<td class="py-2" style="width: <?=100/(count($values_array)+1)?>%">
					<!-- <?=htmout($value)?> -->
					<input type="radio" class="form-check-input" name="question_<?=$feedback_question->id?>" value="<?=$value?>" required>
				</td>
			<?php endforeach;?>
		</tr>
		<?php
		return;
	}

	if( $feedback_question->type == 'ONE_TO_N' )
	{
		?>
		<div><?=htmout($feedback_question->label_worst)?></div>
		<?php for($i=0;$i<$feedback_question->n;$i++):?>
			<div class="py-1">
				<label>
					<?=($i+1)?>
					<input type="radio" class="form-check-input" name="question_<?=$feedback_question->id?>" value="<?=($i+1)?>" required>
				</label>
			</div>
		<?php endfor; ?>
		<div><?=htmout($feedback_question->label_best)?></div>
		<?php
	}
	elseif( $feedback_question->type == 'OPEN' )
	{
		 ?>
		<div>
			<label>
				<input type="text" class="form-control" name="question_<?=$feedback_question->id?>" value="">
			</label>
		</div>
		<?php

	}
	elseif( $feedback_question->type == 'MULTIPLE_OPTIONS' )
	{
		$values_array = explode(',',$feedback_question->values );

		foreach($values_array as $index=>$value)
		{
			?>
			<div class="py-1">
				<label>
					<input type="radio" name="question_<?=$feedback_question->id?>" value="<?=$value?>"	required>
					<?=htmout($value)?>
				</label>
			</div>
			<?php
		}
	}
}

function renderOne2N($feedback_question)
{
	$values_array = explode(',',$feedback_question->values );
	?>
	<tr>
		<td><?=$feedback_question->question?></td>
		<?php
			foreach($values_array as $index=>$value)
			{
				?>
				<td>
					<label>
						<input type="radio" name="fq_<?=$feedback_question->id?>" value="<?=$value?>"	required>
						<!-- <?htmout($value)?> -->
					</label>
				</td>
				<?php
			}
		?>
	</tr>
	<?php
}

function htmout($v)
{
	echo \htmlspecialchars($v, ENT_HTML5 | ENT_NOQUOTES, 'UTF-8');
}

function htmlIOValue($v)
{
	echo \htmlspecialchars($v,ENT_QUOTES | ENT_HTML5, 'UTF-8');
}
