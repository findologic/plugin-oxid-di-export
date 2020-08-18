<?php

require_once __DIR__ . '/vendor/autoload.php';

use FINDOLOGIC\OxidExport\Example\XmlExample;

class FindologicExport
{
    /**
     * @return string The generated XML export, as string.
     */
    public function startExport($shopkey, $start, $count)
    {
        // INSERT YOUR EXPORT LOGIC HERE

        $xmlExample = new XmlExample();
        return $xmlExample->createExport();
    }
}
