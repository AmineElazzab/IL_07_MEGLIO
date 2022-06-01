function submitForm($id) {
    const input = document.querySelector("#id_prod");
    const form = document.querySelector("#form");
    input.value = $id;
    form.submit();
}