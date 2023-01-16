<?php

namespace App\Repositories\Admin;

use App\Models\Customer\Customer;
use App\Models\Image\Image;
use Illuminate\Support\Str;

class CustomerRepository extends BaseRepository
{
    public function getAll()
    {
        return Customer::query()
            ->select([
                'id',
                'title',
                'is_active'
            ])
            ->with('images')
            ->paginate(10);
    }

    public function getCustomer($customer)
    {
        return Customer::query()
            ->select([
                'id',
                'title',
                'is_active'
            ])
            ->with('images')
            ->where('id', $customer)
            ->first();
    }

    public function store($request)
    {
        $item = new Customer();
        $item->title = $request->input('title');
        $item->is_active = $request->input('is_active');
        $item->save();
        $image = new Image();
        $image->url = $request->input('url');
        $item->images()->save($image);
        alert()->success('مشتری مورد نظر با موفقیت ثبت شد', 'باتشکر');
        return $item;
    }

    public function update($request, $customer)
    {
        $customer->title = $request->input('title');
        $customer->is_active = $request->input('is_active');
        $customer->save();
        $customer->images()->update(['url' => $request->input('url')]);
        alert()->success('مشتری مورد نظر با موفقیت ویرایش شد', 'باتشکر');
    }

    public function destroy($customer)
    {
        $customer->images->delete();
        $customer->delete();
        alert()->success('اسلاید مورد نظر با موفقیت حذف شد', 'باتشکر');

    }
}
