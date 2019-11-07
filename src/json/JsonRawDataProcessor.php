<?php


namespace ndashutin\tools\rawdataprocessor\json;

use JsonException;
use ndashutin\tools\rawdataprocessor\exception\RawDataProcessorException;
use ndashutin\tools\rawdataprocessor\RawDataProcessorInterface;

/**
 * Class JsonRawDataProcessor
 * @package ndashutin\tools\rawdataprocessor\json
 */
class JsonRawDataProcessor implements RawDataProcessorInterface
{
    /**
     * @inheritDoc
     */
    public function encode(array $dataForEncoding): string
    {
        return json_encode($dataForEncoding, JSON_THROW_ON_ERROR | JSON_NUMERIC_CHECK, 512);
    }

    /**
     * @inheritdoc
     */
    public function decode(string $dataForDecoding): array
    {
        try {
            $decodedArray = json_decode($dataForDecoding, JSON_OBJECT_AS_ARRAY, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $exception) {
            throw new RawDataProcessorException(
                'Unable to decode json data. Error: ' . $exception->getMessage() . '! Error code: ' . $exception->getCode(),
                $exception->getCode(),
                $exception
            );
        }
        return $decodedArray;
    }
}