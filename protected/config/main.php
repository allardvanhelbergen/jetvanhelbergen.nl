<?php

return array(
	'name'=>'Jet van Helbergen - Sopraan',
	'defaultController'=>'site',
	'components'=>array(
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
			  'index.html'=>'site/',
			  'beelden.html'=>'site/beelden',
			  'projecten.html'=>'site/projecten'
			),
		),
	),
);