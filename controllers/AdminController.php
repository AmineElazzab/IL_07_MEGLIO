<?php

class AdminController{
    public function index($page) {
        include('Views/admin/' . $page . '.php');
    }
}