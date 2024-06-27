<?php
declare(strict_types = 1);

use NatOkpe\Wp\Plugin\ImpactSetup\Engine;

$meta_dir = __DIR__ . DIRECTORY_SEPARATOR . 'meta' . DIRECTORY_SEPARATOR;
$meta     = [];

$meta[] = require($meta_dir . 'meta-course.php');
$meta[] = require($meta_dir . 'meta-class.php');

$meta = array_merge(...$meta);

return $meta;


// 'register'         => [
//     'title' => 'Register',
//     'tpl' => '',
// ],
// 'login'            => [],
// 'password-recover' => [],
// 'password-reset'   => [],
// 'dashboard'        => [],
// 'profile'          => [],
// 'notifications'    => [],
// 'chat'             => [],
// 'settings'         => [],
// 'logout'           => [],

// 'list-courses'     => 'no_pg_lcourses',
// 'list-classes'     => 'no_pg_lclasses',
// 'assessments'      => 'no_pg_asm',
// 'badges'           => 'no_pg_bdg',
// 'certificates'     => 'no_pg_certs',

// 'payment'          => 'no_pg_payment',
// 'contact'          => 'no_pg_contact',
// 'about'            => 'no_pg_about',
// 'terms'            => 'no_pg_terms',
// 'faq'              => 'no_pg_faq',
