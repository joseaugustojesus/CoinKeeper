function secretDownload() {
  const secret = document.getElementById("secret").innerText;
  const link = document.createElement("a");
  link.download = "coin_keeper_secret.txt";
  link.href = "data:text/plain;charset=utf-8," + encodeURIComponent(secret);
  link.style.display = "none";
  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
}

const secretCopy = () => {
  navigator.clipboard
    .writeText(document.getElementById("secret").innerText)
    .then(
      function () {
        notificationsToast("success", "A chave foi copiada com sucesso");
      },
      function (err) {
        console.error("Async: Could not copy text: ", err);
      }
    );
};
