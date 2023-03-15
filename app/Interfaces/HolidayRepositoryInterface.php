<?php

namespace App\Interfaces;

interface HolidayRepositoryInterface
{
    public function all();
    public function find($id);
    public function update(array $data, $id);
    public function delete($id);
    public function addHoliday($request);
}
