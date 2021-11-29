<?php
session_start();
    $title = "Blog";
    require_once "./utils/utils.php";
    include("./views/blog.view.php");
    require_once "./core/App.php";

    $config = require_once "app/config.php";
    App::bind("config", $config);
    App::bind("connection", Connection::make($config["database"]));