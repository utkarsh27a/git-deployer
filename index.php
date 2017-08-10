<?php
if (isset($_GET['auth']) && $_GET['auth'] === 'YOUR_SECRET_KEY_FOR_AUTH') {
  $branch = ($_GET['branch']) ? $_GET['branch'] : 'master';
  echo shell_exec("sh deployer.sh {$branch}");
}
else {
  http_response_code(401);
  echo 'You are not authorised';
}
?>