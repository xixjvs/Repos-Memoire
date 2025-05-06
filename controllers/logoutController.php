<?php

unset($_SESSION["user"]);
session_destroy();
setMessage("Merci pour votre visite", "danger");
header("Location: ?page=home");
exit();