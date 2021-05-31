<?php

define('H_PENDING', 'pending');

return [
	'bootstrap' => \hypeJunction\Moderator\Bootstrap::class,
	'actions' => [
		'moderator/make' => [
			'controller' => \hypeJunction\Moderator\MakeModeratorAction::class,
		],
		'moderator/remove' => [
			'controller' => \hypeJunction\Moderator\RemoveModeratorAction::class,
		],
		'post/approve' => [
			'controller' => \hypeJunction\Moderator\ApproveAction::class,
		],
	],
];
