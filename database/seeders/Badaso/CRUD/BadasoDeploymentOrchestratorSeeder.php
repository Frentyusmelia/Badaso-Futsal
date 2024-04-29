<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Traits\Seedable;

class BadasoDeploymentOrchestratorSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath = 'database/seeders/Badaso/CRUD/';

    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $this->seed(BadasoUsersCRUDDataTypeAdded::class);
        $this->seed(BadasoUsersCRUDDataRowAdded::class);
        
        
        
        
        
        
        
        
        $this->seed(RentalsCRUDDataDeleted::class);
        
        
        
        
        
        
        
        
        
        
        
        
        $this->seed(ScheduleCourtsCRUDDataDeleted::class);
        
        
        $this->seed(CourtsCRUDDataDeleted::class);
        
        
        
        
        
        
        
        
        $this->seed(CourtsCRUDDataTypeAdded::class);
        $this->seed(CourtsCRUDDataRowAdded::class);
        $this->seed(ListCourtsCRUDDataDeleted::class);
        
        
        
        
        
        
        $this->seed(FutsalsCRUDDataDeleted::class);
        $this->seed(SchedulesCRUDDataDeleted::class);
        
        
        
        
        
        
        
        
        
        
        $this->seed(FieldsCRUDDataDeleted::class);
        $this->seed(FieldsCRUDDataTypeAdded::class);
        $this->seed(FieldsCRUDDataRowAdded::class);
        
        
        
        
        
        
        
        
        $this->seed(SchedulesCRUDDataTypeAdded::class);
        $this->seed(SchedulesCRUDDataRowAdded::class);
        
        
        $this->seed(RentalsCRUDDataTypeAdded::class);
        $this->seed(RentalsCRUDDataRowAdded::class);
    }
}
