@extends('layout')
@section('content')

{{-- Link for CSS Styling --}}

<link rel="stylesheet" href="{{asset('css/transaction.css')}}">

{{-- Code --}}

<section>
    <div class="layout-transaction">
        <div class="header-transaction">
            <h1>Transfer</h1>
       </div>
    
        <div class="transaction">
            <form action="">
                <div class="transaction-form">
                    <label class="input-box">
                        <p class="begin-box">Account Number Destination :</p>
                        <input type="number" id="no-rekening" required>
                    </label>
                </div>
    
                <div class="transaction-form">
                    <label class="input-box">
                        <p>Transfer Amount :</p>
                        <input type="number" id="nominal" required>
                    </label>
                </div>
    
                <div class="transaction-form">
                    <label class="input-box">
                        <p>Notes :</p>
                        <input type="text" id="berita">
                    </label>
                </div>
    
                <div class="transaction-choice">
                     <label class="choice-box">
                        <p>Transfer Type :</p>
                        <div class="rad-transfer">
                            <input type="radio" id="transfer-type" name="rad-trans" value="Online"/>Online</br>
                            <input type="radio" id="transfer-type" name="rad-trans" value="BI-FAST"/>BI-FAST</br>
                        </div>
                    </label>
                </div>
    
                <div class="button">
                    <button type="button" id="transfer-btn" class="tf-btn">Transfer</button>
                </div>
            </form>
        </div>
            
        <div class="illustration-transaction">
            <img src="images/ilustrasi_transaction.png" alt="">
        </div>
    </div>
   
    <div class="popup">
        <div class="container-ovl">
            <div class="overlay"></div>
        </div>
        
        <!-- pop up overlay -->
        <div class="confirm-popup">
            <div class="header-popup">
                <h1>Transaction Confirmation</h1>
            </div>
        
            <div class="confirm-content">
            <div class="table-box">
                    <div class="field-acc">
                        <p>Account Destination Name</p>
                    </div>
                    <div class="data-input"></div>
                </div>

                <div class="table-box">
                    <div class="field-acc">
                        <p>Account Destination Number</p>
                    </div>
                    <div class="data-input"></div>
                </div>
            
                <div class="table-box">
                    <div class="field-box">
                        <p>Transfer Amount</p>
                    </div>
                    <div class="data-input"></div>
                </div>
            
                <div class="table-box">
                    <div class="field-box">
                        <p>Transaction Type</p>
                    </div>
                    <div class="data-input"></div>
                </div>
            </div>    
        
            <div class="conf-box">
                <p>Do you want to proceed?</p>
                <div class="buttons">
                    <button class="confirm-btn" onclick="window.location.href='/token_authorization';">Yes</button>
                    <button class="close-btn">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const section = document.querySelector("section"),
        overlay = document.querySelector(".overlay"),
        tfbtn = document.querySelector(".tf-btn"),
        et_norek = document.querySelector(".no-rekening"),
        closebtn = document.querySelector(".close-btn"),
        popup = document.querySelector(".confirm-popup");

    document.getElementById("transfer-btn").onclick = function (){
        const noRekening = document.getElementById("no-rekening").value,
            nominaltf = document.getElementById("nominal").value,
            tftype = document.querySelector('input[name="rad-trans"]:checked');

        if (noRekening != ""  && nominaltf != "" && tftype != null) {
            console.log("testtrigger")
            section.classList.add("active")
        }
        
        closebtn.addEventListener("click", () => section.classList.remove("active"));
    }
</script>

@endsection  