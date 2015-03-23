<?php

echo "TEST";

session_regenerate_id(true); 
session_set_cookie_params(200);
session_start();