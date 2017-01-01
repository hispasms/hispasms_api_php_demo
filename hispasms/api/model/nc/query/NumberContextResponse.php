<?php
namespace hispasms\api\model\nc\query;

/**
 * This is a generated class and is not intended for modification!
 */
class NumberContextResponse implements \JsonSerializable
{
    private $bulkId;
    /**
     * @var \hispasms\api\model\nc\query\NumberContextResponseDetails[]
     */
    private $results;


    public function setBulkId($bulkId)
    {
        $this->bulkId = $bulkId;
    }
    public function getBulkId()
    {
        return $this->bulkId;
    }

    /**
     * @param \hispasms\api\model\nc\query\NumberContextResponseDetails[] $results
     */
    public function setResults($results)
    {
        $this->results = $results;
    }

    /**
     * @return \hispasms\api\model\nc\query\NumberContextResponseDetails[]
     */
    public function getResults()
    {
        return $this->results;
    }


  /**
   * (PHP 5 &gt;= 5.4.0)<br/>
   * Specify data which should be serialized to JSON
   * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
   * @return mixed data which can be serialized by <b>json_encode</b>,
   * which is a value of any type other than a resource.
   */
  function jsonSerialize()
  {
      return get_object_vars($this);
  }
}