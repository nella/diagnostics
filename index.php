<?php

$message = 'THE DEVELOPMENT OF NELLA DIAGNOSTICS HAS BEEN ABANDONED';

if (PHP_SAPI === 'cli') {
	$message .= PHP_EOL . 'Please use stable version (v0.8.0) or vrtak-cz/newrelic-nette' . PHP_EOL;
} else {
	$message .= PHP_EOL . '<br>' . PHP_EOL . 'Please use stable version (v0.8.0) or <a href="https://github.com/Vrtak-CZ/NewRelic-Nette">vrtak-cz/newrelic-nette</a>';
}

die($message);
