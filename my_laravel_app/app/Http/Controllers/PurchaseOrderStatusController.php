<?php

namespace App\Http\Controllers;

use App\Models\PurchaseOrderStatus;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PurchaseOrderStatusRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PurchaseOrderStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $purchaseOrderStatuses = PurchaseOrderStatus::paginate();

        return view('purchase-order-status.index', compact('purchaseOrderStatuses'))
            ->with('i', ($request->input('page', 1) - 1) * $purchaseOrderStatuses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $purchaseOrderStatus = new PurchaseOrderStatus();

        return view('purchase-order-status.create', compact('purchaseOrderStatus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PurchaseOrderStatusRequest $request): RedirectResponse
    {
        PurchaseOrderStatus::create($request->validated());

        return Redirect::route('purchase-order-status.index')
            ->with('success', 'PurchaseOrderStatus created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $purchaseOrderStatus = PurchaseOrderStatus::find($id);

        return view('purchase-order-status.show', compact('purchaseOrderStatus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $purchaseOrderStatus = PurchaseOrderStatus::find($id);

        return view('purchase-order-status.edit', compact('purchaseOrderStatus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PurchaseOrderStatusRequest $request, PurchaseOrderStatus $purchaseOrderStatus): RedirectResponse
    {
        $purchaseOrderStatus->update($request->validated());

        return Redirect::route('purchase-order-status.index')
            ->with('success', 'PurchaseOrderStatus updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        PurchaseOrderStatus::find($id)->delete();

        return Redirect::route('purchase-order-status.index')
            ->with('success', 'PurchaseOrderStatus deleted successfully');
    }
}
