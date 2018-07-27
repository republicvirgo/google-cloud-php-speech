<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1p1beta1/cloud_speech.proto

namespace Google\Cloud\Speech\V1p1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Alternative hypotheses (a.k.a. n-best list).
 *
 * Generated from protobuf message <code>google.cloud.speech.v1p1beta1.SpeechRecognitionAlternative</code>
 */
class SpeechRecognitionAlternative extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Transcript text representing the words that the user spoke.
     *
     * Generated from protobuf field <code>string transcript = 1;</code>
     */
    private $transcript = '';
    /**
     * Output only. The confidence estimate between 0.0 and 1.0. A higher number
     * indicates an estimated greater likelihood that the recognized words are
     * correct. This field is set only for the top alternative of a non-streaming
     * result or, of a streaming result where `is_final=true`.
     * This field is not guaranteed to be accurate and users should not rely on it
     * to be always provided.
     * The default of 0.0 is a sentinel value indicating `confidence` was not set.
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     */
    private $confidence = 0.0;
    /**
     * Output only. A list of word-specific information for each recognized word.
     * Note: When enable_speaker_diarization is true, you will see all the words
     * from the beginning of the audio.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1p1beta1.WordInfo words = 3;</code>
     */
    private $words;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $transcript
     *           Output only. Transcript text representing the words that the user spoke.
     *     @type float $confidence
     *           Output only. The confidence estimate between 0.0 and 1.0. A higher number
     *           indicates an estimated greater likelihood that the recognized words are
     *           correct. This field is set only for the top alternative of a non-streaming
     *           result or, of a streaming result where `is_final=true`.
     *           This field is not guaranteed to be accurate and users should not rely on it
     *           to be always provided.
     *           The default of 0.0 is a sentinel value indicating `confidence` was not set.
     *     @type \Google\Cloud\Speech\V1p1beta1\WordInfo[]|\Google\Protobuf\Internal\RepeatedField $words
     *           Output only. A list of word-specific information for each recognized word.
     *           Note: When enable_speaker_diarization is true, you will see all the words
     *           from the beginning of the audio.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V1P1Beta1\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Transcript text representing the words that the user spoke.
     *
     * Generated from protobuf field <code>string transcript = 1;</code>
     * @return string
     */
    public function getTranscript()
    {
        return $this->transcript;
    }

    /**
     * Output only. Transcript text representing the words that the user spoke.
     *
     * Generated from protobuf field <code>string transcript = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTranscript($var)
    {
        GPBUtil::checkString($var, True);
        $this->transcript = $var;

        return $this;
    }

    /**
     * Output only. The confidence estimate between 0.0 and 1.0. A higher number
     * indicates an estimated greater likelihood that the recognized words are
     * correct. This field is set only for the top alternative of a non-streaming
     * result or, of a streaming result where `is_final=true`.
     * This field is not guaranteed to be accurate and users should not rely on it
     * to be always provided.
     * The default of 0.0 is a sentinel value indicating `confidence` was not set.
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * Output only. The confidence estimate between 0.0 and 1.0. A higher number
     * indicates an estimated greater likelihood that the recognized words are
     * correct. This field is set only for the top alternative of a non-streaming
     * result or, of a streaming result where `is_final=true`.
     * This field is not guaranteed to be accurate and users should not rely on it
     * to be always provided.
     * The default of 0.0 is a sentinel value indicating `confidence` was not set.
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;

        return $this;
    }

    /**
     * Output only. A list of word-specific information for each recognized word.
     * Note: When enable_speaker_diarization is true, you will see all the words
     * from the beginning of the audio.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1p1beta1.WordInfo words = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWords()
    {
        return $this->words;
    }

    /**
     * Output only. A list of word-specific information for each recognized word.
     * Note: When enable_speaker_diarization is true, you will see all the words
     * from the beginning of the audio.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1p1beta1.WordInfo words = 3;</code>
     * @param \Google\Cloud\Speech\V1p1beta1\WordInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWords($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Speech\V1p1beta1\WordInfo::class);
        $this->words = $arr;

        return $this;
    }

}

