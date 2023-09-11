@extends('layout')
@section('content')

{{-- Link for CSS Styling --}}

<link rel="stylesheet" href="{{asset('css/dashboard.css')}}">

{{-- Code --}}

<div class="layout-dashboard">
     
    <div class="text-dashboard">  
        <h1 class="trans-text">Dashboard</h1>
        <p class="trans-text-des">Hi, Leonardo Sumarno <br> <br> 
            It was a great day, and we serve the best to secure your perfect day.
           <br> You can make a transaction securely.
        </p>
    </div>

    <div class="white-box-dashboard">  
        <div class="details">
            <p class="details-balance">Total Balance</p>           
            <h2 class="details-amount">Rp. 9.021.243.021</h2>
        </div>
        <img src="images/coins.png" alt="" class="img-coins"> 
    </div>
     
     <div class="image-dashboard">
        <img src="images/dashboard.png" alt="" class="img-dash">
    </div>

    <div class="list-view">  
         <div class="list-details">
            <h2 class="title">Recent Transaction</h2>
                <ul>
                     <div class="profile">
                            <li class="profile-1">
                                <img src="images/profile.png" class="img-1" style="width: 90px; height:60px">
                                    <div class="contain-list">
                                        <p>pay something expensive</p>
                                        <p>Rp.100.000,00</p>
                                        <p class="date">8 August 2023, 13:31</p>
                                        <p>approved</p>
                                    </div>
                            </li>
                     </div>
                </ul>
                
                <ul>
                    <div class="profile">
                           <li class="profile-1">
                               <img src="images/profile.png" class="img-1" style="width: 90px; height:60px">
                                   <div class="contain-list">
                                       <p>pay something expensive</p>
                                       <p>Rp.100.000,00</p>
                                       <p class="date">8 August 2023, 13:31</p>
                                       <p>approved</p>
                                   </div>
                           </li>
                    </div>
               </ul>

               <ul>
                <div class="profile">
                       <li class="profile-1">
                           <img src="images/profile.png" class="img-1" style="width: 90px; height:60px">
                               <div class="contain-list">
                                   <p>pay something expensive</p>
                                   <p>Rp.100.000,00</p>
                                   <p class="date">8 August 2023, 13:31</p>
                                   <p>approved</p>
                               </div>
                       </li>
                </div>
           </ul>
           
          </div>
     </div>
</div>


    
@endsection  