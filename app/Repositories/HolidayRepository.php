<?php

namespace App\Repositories;

use App\Interfaces\HolidayRepositoryInterface;

use App\Models\Holiday;

/**
 * Summary of HolidayRepository
 */
class HolidayRepository implements HolidayRepositoryInterface
{
    public function all()
    {
        return Holiday::all();
    }

    public function find($id)
    {
        return Holiday::find($id);
    }

    public function update(array $data, $id)
    {
        $Holiday = Holiday::find($id);
        $Holiday->update($data);
        return $Holiday;
    }

    public function delete($id)
    {
        $post = Holiday::find($id);
        if ($post) {
            return $post->delete();
        }
    }
    public function addHoliday($request){
        return Holiday::create([
            'name_holiday' => $request->name,
            'date_holiday' => $request->date,
        ]);
    }
}
