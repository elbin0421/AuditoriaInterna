<?php
session_start();
session_destroy();
// Reridecciona al login
header('Location: index.html');
