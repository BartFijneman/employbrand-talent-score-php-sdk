<?php

namespace EmploybrandTS\Api;


use EmploybrandTS\Entity\RespondentField as RespondentFieldEntity;


class RespondentField extends AbstractApi
{

    /**
     * Get all respondent fields
     *
     * @return ApiList
     */
    public function list(): ApiList
    {
        return new ApiList($this->client, 'respondent-fields', RespondentFieldEntity::class);
    }


    /**
     * Get respondent fields by id
     *
     * @param $id
     * @return RespondentFieldEntity
     */
    public function getById($id): RespondentFieldEntity
    {
        return new RespondentFieldEntity($this->getRequest('respondent-fields/' . $id));
    }


    /**
     * Create a new respondent field
     *
     * @param array|RespondentFieldEntity $data
     * @return RespondentFieldEntity
     */
    public function create(array|RespondentFieldEntity $data): RespondentFieldEntity
    {
        return new RespondentFieldEntity($this->postRequest('respondent-fields', $data));
    }


    /**
     * Update an existing respondent field
     *
     * @param $id
     * @param array|RespondentFieldEntity $data
     * @return RespondentFieldEntity
     */
    public function update($id, array|RespondentFieldEntity $data): RespondentFieldEntity
    {
        return new RespondentFieldEntity($this->putRequest('respondent-fields/' . $id, $data));
    }


    /**
     * Delete a respondent field
     *
     * @param $id
     * @return RespondentFieldEntity
     */
    public function delete($id): RespondentFieldEntity
    {
        return new RespondentFieldEntity($this->deleteRequest('respondent-fields/' . $id));
    }


}
