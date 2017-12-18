<?php namespace Codecheck;

function run ($argc, $argv)
{
  foreach ($argv as $index=>$value) {
	$base_url = 'http://challenge-server.code-check.io/';

	$response = file_get_contents(
                  $base_url.'/api/hash/'
            );
	$result = json_decode($response,true);

	  }
}
