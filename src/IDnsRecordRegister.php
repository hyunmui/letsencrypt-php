<?php

namespace App;

use App\Domain\DnsRecord;

/**
 * DNS Record Register Interface
 * 
 * @author Martin Seon
 * @package App
 */
interface IDnsRecordRegister
{
    function registerRecord(DnsRecord $record);
}

/** End of IDnsRecordRegister.php */
