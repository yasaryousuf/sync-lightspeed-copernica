@extends('admin.master')

@section('light_active', 'kt-menu__item--open')

@section('light_order_sub_active', 'kt-menu__item--active')

@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Subheader -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title"> Orders</h3>

                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                    <div class="kt-subheader__group" id="kt_subheader_search">
                        <span class="kt-subheader__desc" id="kt_subheader_total">
                            from Lightspeed
                        </span>

                    </div>
                </div>
                <div class="kt-subheader__toolbar">
                    <div class="kt-subheader__wrapper">
                        <a href="{{ url('/') }}" class="btn kt-subheader__btn-primary">
                            Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Subheader -->

        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon">
                            <i class="kt-font-brand flaticon2-line-chart"></i>
                        </span>
                        <h3 class="kt-portlet__head-title">
                            Order table
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            {{-- <a href="{{ url('lightspeed/orders/import') }}"
                                class="btn btn-brand btn-icon-sm">
                                <i class="flaticon-upload"></i>
                                Import
                            </a> --}}
                        </div>
                    </div>
                </div>

                <div class="kt-portlet__body">
                    <table class="table table-striped table-responsive table-bordered table-hover table-checkable"
                        id="kt_table_1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Number</th>
                                <th>Status</th>
                                <th>PriceIncl</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Email</th>

                            </tr>
                        </thead>

                        <tbody>
                            @if (!empty($orders))
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->orderId }}</td>
                                        <td>{{ $order->createdAt }}</td>
                                        <td>{{ $order->updatedAt }}</td>
                                        <td>{{ $order->orderNumber }}</td>
                                        <td>{{ $order->status }}</td>
                                        <td>&euro;{{ number_format($order->priceIncl, 2) }}</td>
                                        <td>{{ $order->firstName }}</td>
                                        <td>{{ $order->lastName }}</td>
                                        <td>{{ $order->email }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="16">No data found</td>
                                </tr>
                            @endif
                        </tbody>

                    </table>
                    <!--end: Datatable -->
                </div>
            </div>
        </div>
        <!-- end:: Content -->
    </div>
@endsection
