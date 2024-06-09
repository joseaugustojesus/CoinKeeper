function validateIfPasswordsAreTheSame() {
    const password = document.getElementById("password");
    const passwordConfirm = document.getElementById("passwordConfirm");

    if (password.value !== passwordConfirm.value) {
        notificationsToast("error", "Whoops, as senhas não coincidem. Tente de novo 😉");
    } else {
        const form = document.getElementById("formPasswordResetConfirm");
        form.submit();
    }
}