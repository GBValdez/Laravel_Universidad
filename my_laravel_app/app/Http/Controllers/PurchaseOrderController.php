<?php

namespace App\Http\Controllers;

use App\Models\PurchaseOrder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PurchaseOrderRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PurchaseOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $purchaseOrders = PurchaseOrder::paginate();

        return view('purchase-order.index', compact('purchaseOrders'))
            ->with('i', ($request->input('page', 1) - 1) * $purchaseOrders->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $purchaseOrder = new PurchaseOrder();

        return view('purchase-order.create', compact('purchaseOrder'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PurchaseOrderRequest $request): RedirectResponse
    {
        PurchaseOrder::create($request->validated());

        return Redirect::route('purchase-orders.index')
            ->with('success', 'PurchaseOrder created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $purchaseOrder = PurchaseOrder::find($id);

        return view('purchase-order.show', compact('purchaseOrder'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $purchaseOrder = PurchaseOrder::find($id);

        return view('purchase-order.edit', compact('purchaseOrder'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PurchaseOrderRequest $request, PurchaseOrder $purchaseOrder): RedirectResponse
    {
        $purchaseOrder->update($request->validated());

        return Redirect::route('purchase-orders.index')
            ->with('success', 'PurchaseOrder updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        PurchaseOrder::find($id)->delete();

        return Redirect::route('purchase-orders.index')
            ->with('success', 'PurchaseOrder deleted successfully');
    }
}
