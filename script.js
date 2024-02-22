var selectedRow = null;
var nameError = document.getElementById('name-error')
var nameError1 = document.getElementById('name-error1')
var phoneError = document.getElementById('phone-error')

function validateName(){
    var name = document.getElementById('firstName').value;
    if (name.length == 0){
        nameError.innerHTML='Name is required';
        return false;
    }
    if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)){
        nameError.innerHTML='Write full name';
        return false;
    }
    nameError.innerHTML = '<i class="fas fa-check"></i>';
    return true;
}
function validatelastName(){
    var name = document.getElementById('lastName').value;
    if (name.length == 0){
        nameError1.innerHTML='Name is required';
        return false;
    }
    if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)){
        nameError1.innerHTML='Write full name';
        return false;
    }
    nameError1.innerHTML = '<i class="fas fa-check"></i>';
    return true;
}
function validatePhone(){
    var phone = document.getElementById('rollNo').value;
    if (phone.length == 0){
        phoneError.innerHTML='phone is required';
        return false;
    }
    if (phone.length !== 5){
        phoneError.innerHTML='phone no should 4 digits';
        return false;
    }
    if(phone.match(/^[0-5]{10}$/)){
        phoneError.innerHTML='phone no is required';
        return false;
    }
    phoneError.innerHTML = '<i class="fa-solid fa-check"></i>';
    return true;
}
function showAlert(message, className){
    const div = document.createElement("div");
    div.className =`alert alert-${className}`;
    div.appendChild(document.createTextNode(message));
    const container = document.querySelector(".container");
    const main = document.querySelector(".main");
    container.insertBefore(div,main);
    setTimeout(() => document.querySelector(".alert").remove(),3000)
}
function clearFields(){
    document.querySelector("#firstName").value = "";
    document.querySelector("#lastName").value = "";
    document.querySelector("#rollNo").value = "";
}
document.querySelector("#student-form").addEventListener("submit", (e) =>{
    e.preventDefault();
    const firstName = document.querySelector("#firstName").value;
    const lastName = document.querySelector("#lastName").value;
    const rollNo = document.querySelector("#rollNo").value;
    if(firstName == "" || lastName == "" || rollNo == ""){
        showAlert("please fill in all fields" , "danger");
    }
    else{
        if(selectedRow == null){
           const list = document.querySelector("#student-list");
           const row = document.createElement("tr");
           row.innerHTML = `
           <td>${firstName}</td>
           <td>${lastName}</td>
           <td>${rollNo}</td>
           <td>
           <a href="#" class="btn btn-warning btn-sm edit">edit</a>
           <a href="#" class="btn btn-danger btn-sm delete">Delete</a>
           `;
           list.appendChild(row);
           selectedRow = null;
           showAlert("Student Added", "success");
        }
        else{
            selectedRow.children[0].textContent = firstName;
            selectedRow.children[1].textContent = lastName;
            selectedRow.children[2].textContent = rollNo;
            selectedRow = null
            showAlert("student info edited", "info")
        }
        clearFields();
    }
});
document.querySelector("#student-list").addEventListener("click",(e) =>{
    target = e.target;
    if(target.classList.contains("edit")){
        selectedRow = target.parentElement.parentElement;
        document.querySelector("#firstName").value = selectedRow.children[0].textContent;
        document.querySelector("#lastName").value = selectedRow.children[1].textContent;
        document.querySelector("#rollNo").value = selectedRow.children[2].textContent;
    }
})

document.querySelector("#student-list").addEventListener("click", (e) =>{
    target = e.target;
    if (target.classList.contains("delete")){
        target.parentElement.parentElement.remove();
        showAlert("student data deleted", "danger");
    } 
});