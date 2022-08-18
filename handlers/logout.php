<?php

session_regenerate_id();
session_destroy();
header('Location: /reg22');
exit;