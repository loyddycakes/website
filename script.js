function showForm(formId) {
    document.querySelectorAll(".form-box.active").forEach(form => form.classList.remove("active"));
    document.getElementById(formId).classList.add("active");
}