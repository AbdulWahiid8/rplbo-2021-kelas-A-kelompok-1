function actionPass() {
    let input = document.getElementById("password");
    let iconShow = document.getElementById("showEye");
    let iconHide = document.getElementById("hideEye");

    if (input.type === "password") {
        input.type = "text";
        iconShow.style.display = "block";
        iconHide.style.display = "none";
    } else {
        input.type = "password";
        iconShow.style.display = "none";
        iconHide.style.display = "block";
    }
}
