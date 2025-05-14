const quantityInput = document.getElementById("quantity");

function updateQuantity() {
    quantityInput.value = parseInt(quantityInput.value);
}

function incrementQuantity() {
    quantityInput.value = parseInt(quantityInput.value) + 1;
    updateQuantity();
}

function decrementQuantity() {
    quantityInput.value = parseInt(quantityInput.value) - 1;
    updateQuantity();
}

quantityInput.addEventListener("input", updateQuantity);
document.getElementById("decrement").addEventListener("click", decrementQuantity);
document.getElementById("increment").addEventListener("click", incrementQuantity);
