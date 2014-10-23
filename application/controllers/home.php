<?php
use libraries\layout\LayoutFactory;
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class home extends ControllerBase {
    protected $authorizationRequired = true;
    public function index()
    {
        LayoutFactory::getLayout(LayoutFactory::MAIN)->render("home");
    }
}