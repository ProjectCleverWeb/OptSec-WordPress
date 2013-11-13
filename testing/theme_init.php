<?php
/**
 * This file simply calls wordpress in its currently
 * configured state. If there is an error, or PHP exits
 * with an error code >0, this test fails. If there are
 * no errors, or PHP exits with an error code of 0,
 * this test passes.
 */

echo "Starting theme test...".PHP_EOL;
echo "If there is output there was a fatal error where the output stops.".PHP_EOL;
sleep(3); // give them some time to read
ob_start();
// this test must occur after the installation is built
require_once(realpath(__DIR__.'/../public/index.php'));
ob_end_clean();
echo "No fatal errors";