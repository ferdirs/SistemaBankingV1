@extends('layout')
@section('content')

{{-- Link for CSS Styling --}}

<link rel="stylesheet" href="{{asset('css/transaction_history.css')}}">

{{-- Code --}}

<div class="layout-history">
    <div class="header-history">
        <h1>Transaction History</h1>
    </div>
    <div class="history-table">
        <table>
            <tr>
                <th class="begin">Date</th>
                <th>Account Destination</th>
                <th>Transaction Type</th>
                <th>Nominal</th>
                <th>Status</th>
                <th class="end">Notes</th>
            </tr>
            <tr>
                <td>17/08</td>
                <td>1000000001</td>
                <td>Lalu Lintas Giro</td>
                <td>75.000,00</td>
                <td>Approve</td>
                <td>Sample Note 32</td>
            </tr>
        </table>
    </div>
</div>


@endsection