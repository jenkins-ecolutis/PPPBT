<?php
return [
	'doctrine' => [
		'connection' => [
			'orm_default' => [
				'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
				'params' => [
					'host'     => '172.16.172.1',
					'user'     => 'envoiture',
					'password' => '!envoiturePREPROD13!',
					'dbname'   => 'envoiture_preprod'
				],  
			],
			'odm_default' => [
				'server'	=> '172.16.172.1',
				//'port'             => '27017',
				'connectionString' => null,
				'user'             => 'envoiture',
				'password'         => '!envoiturePREPROD13!',
				'dbname'           => 'envoiture_preprod',
				'options'          => []
			],  
		],  
		'entitymanager' => [
			'orm_default' => [
				'connection'    => 'orm_default',
				'configuration' => 'orm_default',
			],  
			'orm_spec' => [
				'connection'    => 'orm_spec',
				'configuration' => 'orm_spec',
			],  
		],  
		'configuration' => [
			'orm_spec' => [
				'metadata_cache'    => 'array',
				'query_cache'       => 'array',
				'result_cache'      => 'array',
				'driver'            => 'orm_spec',
				'generate_proxies'  => true,
				'proxy_dir'         => 'data/DoctrineORMModule/Proxy',
				'proxy_namespace'   => 'DoctrineORMModule\Proxy',
				'filters'           => [],
			],
			'odm_default' => [
				'metadata_cache'     => 'array',

				'driver'             => 'odm_default',
				'generate_proxies'   => true,
				'proxy_dir'          => 'data/DoctrineMongoODMModule/Proxy',
				'proxy_namespace'    => 'DoctrineMongoODMModule\Proxy',

				'generate_hydrators' => true,
				'hydrator_dir'       => 'data/DoctrineMongoODMModule/Hydrator',
				'hydrator_namespace' => 'DoctrineMongoODMModule\Hydrator',

				'default_db'         => 'test',
				'logger'             => null // 'DoctrineMongoODMModule\Logging\DebugStack'
			],
		],
		'documentmanager' => [
			'odm_default' => [
				'connection'    => 'odm_default',
				'configuration' => 'odm_default',
				'eventmanager' => 'odm_default'
			],
		],
		'eventmanager' => [
			'odm_default' => [
				'subscribers' => []
			],
		],
	],
	'neo4jogm' => [
		'configuration' => [
			'ogm_default' => [
				'host' => '172.16.172.1',
				'username' => 'envoiture',
				'password' => '!envoiturePREPROD13!',
			],
		],
	],
];
