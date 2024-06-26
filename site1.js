let label = document.getElementById("label3");
let btn = document.getElementById("button1");
let fieldset = document.getElementById("fieldset");


btn.addEventListener("click", function(event) {
    let name = document.getElementById("Name").value;
    let email = document.getElementById("Mail").value;
    let contact = document.getElementById("Contact").value;

    if (name === "" || email === "" || contact === "") {
        let message =  `<p style="color:black">Please fill out all the fields!</p>`;
        message.className = "warning-text";
        label.innerHTML += message;
        event.preventDefault();
        btn.style.visibility = "hidden";
        setTimeout(function() {
            btn.style.visibility = "visible";
        }, 2000);
    }

    else {
        fieldset.innerHTML = "";
        let message =  `<p style="color:black">Form Submitted Successfully!</p>`;
        message.className = "submit-text";
        fieldset.innerHTML += message;
        // event.preventDefault();
    }

});


