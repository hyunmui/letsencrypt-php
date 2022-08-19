<?php

namespace App\Domain;

/**
 * DNS Record
 * 
 * @author Martin Seon
 * @package App\Domain
 */
class DnsRecord
{
    /**
     * 
     * @var string
     */
    public $type;

    /**
     * 
     * @var string
     */
    public $name;

    /**
     * 
     * @var string
     */
    public $value;

    /**
     * 
     * @var int
     */
    public $ttl;
}

/** End of DnsRecord.php */
