function saveProfile() {
    // get the form input values
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var bio = document.getElementById("bio").value;
    
    // save the values to local storage
    localStorage.setItem("name", name);
    localStorage.setItem("email", email);
    localStorage.setItem("bio", bio);
    
    // show a success message
    alert("Profile saved successfully!");
  }
  