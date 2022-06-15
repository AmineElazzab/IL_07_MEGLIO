function submitForm($id) {
    const input = document.querySelector("#id_prod");
    const form = document.querySelector("#form");
    input.value = $id;
    form.submit();
}

function deleteForm($id) {
    const input = document.querySelector("#delete_id_prod");
    const form = document.querySelector("#delete_form");
    input.value = $id;
    form.submit();
}

function deleteFormCat($id) {
    const input = document.querySelector("#delete_cat_id");
    const form = document.querySelector("#delete_form_cat");
    input.value = $id;
    form.submit();
}