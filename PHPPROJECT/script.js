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
            var currentLeft = parseInt(window.getComputedStyle(fixedDiv).left, 10);
            
            if (currentLeft === 0) {
                fixedDiv.style.left = "50%";
            } else {
                fixedDiv.style.left = "0";
            }
        });

        let isMoved = false;

        document.getElementById("shifter").addEventListener("click", function() {
            var fixedDiv = document.getElementById("FixedDiv");
            var button = document.getElementById("shifter");

            if (!isMoved) {
                fixedDiv.style.left = "50%";

                document.getElementById('shifterText').innerText = 'Already have an Account?';
                button.innerText = 'Login Now';
                fixedDiv.style.backgroundImage = "url('PICS/MODELS/RegistrationModel.jpg')";

                button.classList.add("moved");

            } else {
                fixedDiv.style.left = "0";

                document.getElementById('shifterText').innerText = 'No Account yet?';
                button.innerText = 'Create an Account Now';
                fixedDiv.style.backgroundImage = "url('PICS/MODELS/LoginModel.jpg')";

                button.classList.remove("moved");
            }

            isMoved = !isMoved;
        });