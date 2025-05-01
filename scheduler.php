<?php
// scheduler.php

// Keep the process running in a loop
while (true) {
    // Execute the Symfony command to update parking availability
    shell_exec('php bin/console app:update-parking-availability');
    
    // Sleep for 1 hour (3600 seconds) before running the command again
    sleep(3600); // 1 hour
}
