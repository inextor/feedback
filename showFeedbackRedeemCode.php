<?php
namespace APP;
include_once( __DIR__.'/app.php' );
include_once( 'schema.php' );

app::connect();

if( !empty( $_GET['gift_code']) )
{
	$search_dict = array('gift_code'=>$_GET['gift_code'] );
	$feedback_response = feedback_response::searchFirst( $search_dict );
}

?><html>
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
				let r = document.getElementById('redeem_btn').addEventListener('click',()=>{
					let redeem = document.getElementById('redeem');
					redeem.value = 'redeem';
					let form = document.getElementById('form');
					form.submit();
				});
			});
		</script>
	</head>
	<body class="body">
		<div style="margin:auto auto;width:100%;max-width:960px;">
				<div class="card">
				<img class="card-img-top w-100 d-block fit-cover" src="<?=$feedback_response->gift_product?>.jpg">
					<div class="card-body p-4">
						<p class="text-primary card-text mb-0">Gracias por tu evaluacion, El siguiente codigo es valido para tu próxima visita</p>
						<div class="row">
							<div class="col-8 form-group">
								<label>Código</label>
								<div class="display-6"><?=$_GET['gift_code']??''?></div>
							</div>
							<div class="col-4 px-3">
								<label>&nbsp;</label>
							</div>
						</div>
						<?php if(!empty( $_GET['gift_code'] ) && !empty( $feedback_response ) ):?>
						<?php elseif( !empty( $_GET['gift_code'] ) ): ?>
							<div class="alert alert-danger" role="alert">
								No se encontro el código a redimir
							</div>
						<?php endif;?>
					</div>
				</div>
				<div class="card mt-3">
					<div class="row  mt-3">
						<div class="col-12">
							<div class="d-flex">
								<img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="1400x800.png">
								<div class="fw-bold mb-0">
									<?php if(!empty( $_GET['gift_code'] ) && !empty( $feedback_response ) ):?>
										<h2>Gratis: <?=$feedback_response->gift_product?></h2>
									<?php endif; ?>
									<?=getReedemedLabel(empty($feedback_response) ? NULL : $feedback_response->redeemed_timestamp,7*60*60)?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</body>
</html><?php

function getReedemedLabel($timestamp_string, $offset)
{
	if(empty( $timestamp_string ) )
	{
		return 'Sin Canjear';
	}

	$month_string = explode(',','Ene,Feb,Mar,Abr,May,Jun,Jul,Ago,Sep,Oct,Nov,Dic');
	$time = strtotime($timestamp_string)-$offset;

	$day   = date('j', $time);
	$year  = date('Y',$time);
	$month = $month_string[ date('n',$time)-1 ];
	$hour  = date(' H:i', $time);

	return 'Canjeado: '.$month.' '.$day.' del '.$year.', '.$hour;
}
function htmout($v)
{
	echo \htmlspecialchars($v, ENT_HTML5 | ENT_NOQUOTES, 'UTF-8');
}

function htmlIOValue($v)
{
	echo \htmlspecialchars($v,ENT_QUOTES | ENT_HTML5, 'UTF-8');
}
