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

function deleteCat($id) {
    const input = document.querySelector("#delete_id_categorie");
    const form = document.querySelector("#formCat");
    input.value = $id;
    form.submit();
}