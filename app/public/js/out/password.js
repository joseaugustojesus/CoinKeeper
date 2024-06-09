async function preflight(buttonElement) {
    let email = document.getElementById("email");
    let secret = document.getElementById("secret");

    if (email.value == "" || secret.value == "") {
        email.focus();
        notificationsToast("error", "Whoops, preencha todos os campos antes de continuar");
    } else {
        try {
            let endpoint = `${APP_URL}` + "/account/password/reset/preflight";
            const response = await axios.get(endpoint, {
                params: {
                    email: email.value,
                    secret: secret.value
                }
            });

            window.location.href = response.data.redirect;
        } catch (error) {
            notificationsToast("error", error.response.data.message)
        }
    }
}