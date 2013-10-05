<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Downloads\Controller\Downloads' => 'Downloads\Controller\DownloadsController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'downloads' => array(
                'type'    => 'Literal',
                'options' => array(
                    // Change this to something specific to your module
                    'route'    => '/download',
                    'defaults' => array(
                        // Change this value to reflect the namespace in which
                        // the controllers for your module are found
                        '__NAMESPACE__' => 'Downloads\Controller',
                        'controller'    => 'Downloads',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    // This route is a sane default when developing a module;
                    // as you solidify the routes for your module, however,
                    // you may want to remove it and replace it with more
                    // specific routes.
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'Downloads' => __DIR__ . '/../view',
        ),
    ),
    'service_manager' => array(
        	'invokables' => array(
    	       'downloadsService'=>'Downloads\DownloadsService'
        ),
    ),
'view_helpers' => array(
'invokables' => array(
	'readableBytes' => 'Downloads\readableBytes',
		),
	)
);
