@extends('layout')
@section('content')

<link rel="stylesheet" href="{{asset('css/transaction_success.css')}}">

<div class="container-dashboard">
    <div class="white-box-dashboard">  
        <h1 class="trans-text">Transaction Successful</h1>
        <img src="{{URL('images/Transaction.png')}}" alt="" class="transaction-sucessful">
        <h3 class="trans-text-des">Your transaction already completed</h3>
        <h3>Thank you for using Sistema Bank. </h3>
        <div class="buttons">
            <button class="ok-btn" onclick="window.location.href='/transaction';">Ok</button>
            <button class="history-btn" onclick="window.location.href='/transaction_history';">History</button>
        </div>
    </div>
</div>

@endsection