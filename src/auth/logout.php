<?php

session_start();

session_unset();
session_destroy();

header("Location: ../posts/index.php");
exit();