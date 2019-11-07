<?php


namespace ndashutin\tools\rawdataprocessor;

/**
 * Interface EncoderInterface
 * @package ndashutin\tools\rawdataprocessor
 */
interface EncoderInterface
{
    /**
     * Returns the string representation of an array
     *
     * @param array $dataForEncoding
     * @return string
     */
    public function encode(array $dataForEncoding): string;
}