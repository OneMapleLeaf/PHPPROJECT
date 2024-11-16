const navBar = document.querySelector('.NavBar');


        window.addEventListener('scroll', () => {
    
        if (window.scrollY > 1) {
            navBar.classList.add('expanded'); 
        } else {
            navBar.classList.remove('expanded'); 
            }
        });

        document.getElementById("shifter").addEventListener("click", function() {
            var fixedDiv = document.getElementById("FixedDiv");
            var currentRight = parseInt(window.getComputedStyle(fixedDiv).right, 10);
        
            if (currentRight === 0) {
                fixedDiv.style.right = "5px";
            } else {
                fixedDiv.style.right = "0";
            }
        });
        
        let isMoved = false;

        document.getElementById("shifter").addEventListener("click", function() {
            var fixedDiv = document.getElementById("FixedDiv");
            var shifter = document.getElementById("shifter");

            if (!isMoved) {

                fixedDiv.style.right = "50%";
                fixedDiv.style.left = "0";

                document.getElementById('shifterText').innerText = 'Continue to Create?';
                document.getElementById("shifter").innerText = 'LETS GO';
                fixedDiv.style.backgroundImage = "url('PICS/MODELS/LoginModel.jpg')";

                fixedDiv.classList.add("moved");
                shifter.classList.add("moved");
            } else {

                fixedDiv.style.right = "0";
                fixedDiv.style.left = "50%";

                document.getElementById('shifterText').innerText = 'Why create an Account';
                document.getElementById("shifter").innerText = 'LEARN MORE';
                fixedDiv.style.backgroundImage = "url('PICS/MODELS/RegistrationModel.jpg')";

                fixedDiv.classList.remove("moved");
                shifter.classList.remove("moved");
            }

            isMoved = !isMoved;
        });


