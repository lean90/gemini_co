<?php
use libraries\layout\LayoutFactory;
use services\ServiceSecurity;
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class lotto extends ControllerBase {
    protected $authorizationRequired = true;
    public function index()
    {
        $serviceSecurity = new ServiceSecurity();
        $data = array(
            'token' => $serviceSecurity->getTokenKey($this->user)
        );
        LayoutFactory::getLayout(LayoutFactory::MAIN)->setJavascript(array("/js/controllers/LottoController.js"))->setData($data)->render("lotto");
    }
}