<?php
    $title = "Single post";
    require_once "./utils/utils.php";
    include("./views/single_post.view.php");
    require_once "./core/App.php";

    $config = require_once "app/config.php";
    App::bind("config", $config);
    App::bind("connection", Connection::make($config["database"]));