<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of
 * conditions and the following disclaimer in the documentation and/or other materials
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its
 * contributors may be used to endorse or promote products derived from this software
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS;
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF
 * SUCH DAMAGE.
 *
 */

 namespace MasterCard\Api\Moneysend;

 use MasterCard\Core\Model\BaseObject;
 use MasterCard\Core\Model\RequestMap;
 use MasterCard\Core\Model\OperationMetadata;
 use MasterCard\Core\Model\OperationConfig;


/**
 * 
 */
class CardMapping extends BaseObject {


    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "5f8dfd3b-dc69-4a70-a512-79af28eaa3e5":
                return new OperationConfig("/moneysend/v3/mapping/card", "update", array(), array());
            case "e0b22d94-fa49-4ef5-8b8d-fdbb5d87a3fb":
                return new OperationConfig("/moneysend/v3/mapping/card", "create", array(), array());
            case "50fb50aa-a148-4473-aba7-7f573ce4f458":
                return new OperationConfig("/moneysend/v3/mapping/card/{mappingId}", "update", array(), array());
            case "03ff066d-d0d2-4f60-a580-61995e16c625":
                return new OperationConfig("/moneysend/v3/mapping/card/{mappingId}", "delete", array(), array());
            case "f6c0907a-1b73-4913-b535-a71c7afbaec1":
                return new OperationConfig("/moneysend/v3/mapping/subscriber", "update", array(), array());
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        return new OperationMetadata(SDKConfig::getVersion(), SDKConfig::getHost());
    }



   /**
    * Updates an object of type CardMapping
    *
    * @return A CardMapping object representing the response.
    */
    public function read()  {
        return self::execute("5f8dfd3b-dc69-4a70-a512-79af28eaa3e5",$this);
    }




   /**
    * Creates object of type CardMapping
    *
    * @param Map map, containing the required parameters to create a new object
    * @return CardMapping of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("e0b22d94-fa49-4ef5-8b8d-fdbb5d87a3fb", new CardMapping($map));
    }






   /**
    * Updates an object of type CardMapping
    *
    * @return A CardMapping object representing the response.
    */
    public function update()  {
        return self::execute("50fb50aa-a148-4473-aba7-7f573ce4f458",$this);
    }







   /**
    * Delete object of type CardMapping by id
    *
    * @param String id
    * @return CardMapping of the response of the deleted instance.
    */
    public static function deleteById($id, $requestMap = null)
    {
        $map = new RequestMap();
        if (!empty($id)) {
            $map->set("id", $id);
        }
        if (!empty($requestMap)) {
            $map->setAll($requestMap);
        }
        return self::execute("03ff066d-d0d2-4f60-a580-61995e16c625", new CardMapping($map));
    }

   /**
    * Delete this object of type CardMapping
    *
    * @return CardMapping of the response of the deleted instance.
    */
    public function delete()
    {
        return self::execute("03ff066d-d0d2-4f60-a580-61995e16c625", $this);
    }



   /**
    * Updates an object of type CardMapping
    *
    * @return A CardMapping object representing the response.
    */
    public function deleteSubscriberID()  {
        return self::execute("f6c0907a-1b73-4913-b535-a71c7afbaec1",$this);
    }






}

