<?php

namespace EmploybrandTS\Resources;


class Respondent extends Resource
{


    public function getAll()
    {
        return $this->employbrandTS->makeAPICall('respondents');
    }


    public function get($id)
    {
        return $this->employbrandTS->makeAPICall('respondents/' . $id);
    }


}
