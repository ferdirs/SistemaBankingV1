// const section = document.querySelector("section"),
//         overlay = document.querySelector(".overlay"),
//         tfbtn = document.querySelector(".tf-btn"),
//         et_norek = document.querySelector(".no-rekening"),
//         closebtn = document.querySelector(".close-btn"),
//         popup = document.querySelector(".confirm-popup");

//     // tfbtn.addEventListener("click", function () {
//     //     popup.classList.add("active");
//     // });
//     // closebtn.addEventListener("click", function () {
//     //     popup.classList.remove("active");
//     // });

//     document.getElementById("transfer-btn").onclick = function (){
        
//         console.log("test")
//         const noRekening = document.getElementById("no-rekening").value,
//             nominaltf = document.getElementById("nominal").value,
//             tftype = document.querySelector('input[name="rad-trans"]:checked');
//         if (noRekening != ""  && nominaltf != "" && tftype != null) {
//             console.log("testtrigger")
//             section.classList.add("active")
//         }

//         // if (noRekening != "" && tftype != "") {
//         //     console.log("testtrigger")
//         //     section.classList.add("active")
//         // }

//         // if(tftype != ""){
//         //     console.log(tftype.value)
//         //     section.classList.add("active")
//         // }

//         // section.classList.add("active")


//         // tfbtn.classList.add("active")
//         // overlay.classList.remove("active")
//         // closebtn.classList.remove("active")

//         // tfbtn.addEventListener("click", () => section.classList.add("active"));
//         // overlay.addEventListener("click",() => section.classList.remove("active") );
//         closebtn.addEventListener("click", () => section.classList.remove("active"));
//     }