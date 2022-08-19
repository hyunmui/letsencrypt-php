<?php


namespace App;

use LEClient\LEClient;

/**
 * Internal Server TLS/SSL Generator
 * 
 * @author Martin Seon
 * @package App
 */
class InternalServerSslGenerator
{
    /**
     * 
     * @var IDnsRecordRegister
     */
    protected $dnsRecordRegister;

    /**
     * Constructor 
     * 
     * @author Martin Seon
     * @param IDnsRecordRegister $dnsRecordRegister 
     * @return void 
     */
    public function __construct(IDnsRecordRegister $dnsRecordRegister)
    {
        $this->dnsRecordRegister = $dnsRecordRegister;
    }

    public function generate()
    {
        $email = 'hmsun.es@esgroup.net';
        $client = new LEClient($email, LEClient::LE_PRODUCTION);
    }
}

/** End of InternalServerSslGenerator.php */
