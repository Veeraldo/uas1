<?php

// Forward Vercel requests to normal index.php
require __DIR__ . '/../public/index.php';
if (!file_exists($requestedFile)) {
    http_response_code(404);
    echo "Page Not Found";
    exit;
}
