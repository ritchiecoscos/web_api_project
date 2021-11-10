<?php

namespace App\Repositories;

use App\Models\Travel;
use App\Repositories\BaseRepository;

/**
 * Class TravelRepository
 * @package App\Repositories
 * @version October 28, 2021, 10:38 am UTC
*/

class TravelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Place',
        'Country',
        'Zip code',
        'date'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Travel::class;
    }
}
