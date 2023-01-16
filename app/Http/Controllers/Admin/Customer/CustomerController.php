<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Customer\CustomerStoreRequest;
use App\Http\Requests\Admin\Customer\CustomerUpdateRequest;
use App\Repositories\Admin\CustomerRepository;

class CustomerController extends Controller
{
    protected $customerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function index()
    {
        $customers = $this->customerRepository->getAll();
        return view('admin.customers.index', compact('customers'));
    }

    public function create()
    {
        return view('admin.customers.create');
    }

    public function store(CustomerStoreRequest $request)
    {
        $this->customerRepository->store($request);
        return redirect()->route('admin.customers.index');
    }

    public function edit($customer)
    {
        $customer = $this->customerRepository->getCustomer($customer);
        return view('admin.customers.edit', compact('customer'));
    }

    public function update(CustomerUpdateRequest $request, $customer)
    {
        $customer = $this->customerRepository->getCustomer($customer);
        $this->customerRepository->update($request, $customer);
        return redirect()->route('admin.customers.index');
    }

    public function destroy($customer)
    {
        $customer = $this->customerRepository->getCustomer($customer);
        $this->customerRepository->destroy($customer);
        return redirect()->route('admin.customers.index');
    }
}
