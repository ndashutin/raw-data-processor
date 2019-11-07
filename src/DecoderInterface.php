<?php


namespace ndashutin\tools\rawdataprocessor;

use ndashutin\tools\rawdataprocessor\exception\RawDataProcessorException;

/**
 * Interface DecoderInterface
 * @package ndashutin\tools\rawdataprocessor
 */
interface DecoderInterface
{
    /**
     * Decodes string to array
     *
     * @param string $dataForDecoding
     * @return array
     * @throws RawDataProcessorException when $dataForDecoding is invalid json structure
     */
    public function decode(string $dataForDecoding): array;
}