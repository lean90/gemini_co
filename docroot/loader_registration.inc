<?php
use Composer\Autoload\ClassLoader;
$autoLoader = new ClassLoader ();
$classPaths = array (APPPATH);
$autoLoader->setPsr4 ( '', $classPaths );
$autoLoader->register ( true );