function updateRoleDescription() {
    var roleSelect = document.getElementById("role_name");
    var roleDescriptionInput = document.getElementById("role_description");

 
    var selectedRole = roleSelect.value;


    if (selectedRole === "Member") {
        roleDescriptionInput.value = "Main Workforce of the organization";
    } else if (selectedRole === "Secretary") {
        roleDescriptionInput.value = "Responsible for administrative tasks";
    } else if (selectedRole === "Admin") {
        roleDescriptionInput.value = "Oversees the website";
    }
}
