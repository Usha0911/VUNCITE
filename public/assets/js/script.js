document.querySelectorAll(".password-toggle").forEach(function(toggle){

    toggle.addEventListener("click",function(){

        let input=this.parentElement.querySelector("input");

        let icon=this.querySelector("i");

        if(input.type==="password"){

            input.type="text";

            icon.classList.remove("bi-eye");

            icon.classList.add("bi-eye-slash");

        }else{

            input.type="password";

            icon.classList.remove("bi-eye-slash");

            icon.classList.add("bi-eye");

        }

    });

});