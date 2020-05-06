 function homeFunction(){
            location.replace("main.html")
        }
        function validate(){

            var a = document.getElementById("pass1").value;
            var b = document.getElementById("pass2").value;
            if (a!=b) {
               alert("Passwords do no match");
               return false;
            }
        }