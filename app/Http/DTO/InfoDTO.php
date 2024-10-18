<?php

namespace App\Http\DTO;

class InfoDTO
{
    public string $phpVersion;
    public string $serverSoftware;
    public string $clientIp;
    public string $clientUserAgent;
    public string $databaseName;

    public function __construct($phpVersion, $serverSoftware, $clientIp, $clientUserAgent, $databaseName)
    {
        $this->phpVersion = $phpVersion;
        $this->serverSoftware = $serverSoftware;
        $this->clientIp = $clientIp;
        $this->clientUserAgent = $clientUserAgent;
        $this->databaseName = $databaseName;
    }

    public function toArray(): array
    {
        return [
            'php_version' => $this->phpVersion,
            'server_software' => $this->serverSoftware,
            'client_ip' => $this->clientIp,
            'client_user_agent' => $this->clientUserAgent,
            'database_name' => $this->databaseName,
        ];
    }
}
