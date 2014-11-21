<?php

/**
 * Ensure that environment variables are set
 */
function check_environment() {
    if (!(getenv("DATABASE_URL")))
        throw new Exception('Must set a DATABASE_URL environment variable');
}
