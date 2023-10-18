<?php
namespace APP;

use AKOU\DBTable;

include_once( __DIR__.'/app.php' );
include_once( 'schema.php' );

app::connect();



if( empty( $_POST ) )
{


}
else
{
	if( empty( $_POST['feedback_id'] ) )
	{
		$response  = array();
		foreach($_POST as $index=> $answer )
		{
			if( $index == 'feedback_id' )
				continue;

			$id = explode('_',$index);
			$feedback_question = feedback_question::get( $question[1] );
			$feedback_secton = feedback_section::get( $feedback_question->feedback_section_id );
			$response[] = array( $feedback_question->question, $feedback_secton->name, $answer );
		}
	}
}

