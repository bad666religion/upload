<?php
namespace Getresponse\Sdk\Operation\Contacts\GetContacts;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetContactsSortParams extends SortParams
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'email',
            'name',
            'createdOn',
            'changedOn',
            'campaignId',
        ];
    }
}
