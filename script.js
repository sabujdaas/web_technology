function toggleAddress() {
    var addressContainer = document.getElementById("addressContainer");
    var checkbox = document.getElementById("showAddress");
    
    if (checkbox.checked) {
        addressContainer.style.display = "block";
    } else {
        addressContainer.style.display = "none";
    }
}