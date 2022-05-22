<?php

namespace EmploybrandTS\Api;


use EmploybrandTS\Exceptions\Http\NotFound;
use EmploybrandTS\Entity\Respondent as RespondentEntity;


class Respondent extends AbstractApi
{

    /**
     * Get respondents with pagination
     *
     * @return ApiPaginator
     */
    public function list(): ApiPaginator
    {
        return new ApiPaginator($this->client, 'respondents', RespondentEntity::class);
    }


    /**
     * Get a respondent by id
     *
     * @param $id
     * @return RespondentEntity
     */
    public function getById($id): RespondentEntity
    {
        return new RespondentEntity($this->getRequest('respondents/' . $id));
    }


    /**
     * Get a respondent by full email address
     *
     * @param $email
     * @return RespondentEntity
     * @throws NotFound
     */
    public function getByEmail($email): RespondentEntity
    {
        $response = $this->getRequest('respondents', ['email' => $email]);

        if( count($response->data) === 0 )
            throw new NotFound();

        return new RespondentEntity($response[ 'data' ][ 0 ]);
    }


    /**
     * Create a new respondent
     *
     * @param array|object $data
     * @return RespondentEntity
     */
    public function create(array|object $data): RespondentEntity
    {
        return new RespondentEntity($this->postRequest('respondents', $data));
    }


    /**
     * Update a respondent
     *
     * @param $id
     * @param array|object $data
     * @return RespondentEntity
     */
    public function update($id, array|object $data): RespondentEntity
    {
        return new RespondentEntity($this->postRequest('respondents/' . $id, $data));
    }


}
