document.addEventListener("DOMContentLoaded", function () {
    const openFormButton = document.getElementById("openFormButton");
    const productForm = document.getElementById("productForm");
    const productList = document.getElementById("productList");
    const submitProductButton = document.getElementById("submitProductButton");
    const productTableBody = document.getElementById("productTableBody");

    openFormButton.addEventListener("click", function () {
        productForm.classList.toggle("hidden");
    });

    submitProductButton.addEventListener("click", function () {
        const productName = document.getElementById("productName").value;
        const productDescription = document.getElementById("productDescription").value;
        const productValue = parseFloat(document.getElementById("productValue").value).toFixed(2);
        const productAvailability = document.getElementById("productAvailability").value;

        if (productName && productDescription && !isNaN(productValue)) {
            const newRow = productTableBody.insertRow();
            const nameCell = newRow.insertCell(0);
            const valueCell = newRow.insertCell(1);
            nameCell.textContent = productName;
            valueCell.textContent = `R$ ${productValue}`;
            productForm.classList.add("hidden");
        }
    });
});
