<?php


namespace RetailOne\Http\Controllers\Backend;

use RetailOne\Http\Controllers\Controller;

class ClientController extends Controller {
    public function index() {
        return view('backend.admin.clients.index');
    }
}
