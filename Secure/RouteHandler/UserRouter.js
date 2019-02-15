//Register new user
function RegisterUser() {

    const UI = $(".UI");
    const APP_URL = "http://localhost:8008/Git/Secure/Serialize/";
    const Form = $(".form-class").serialize();


    $.post(`${APP_URL}UserAPI.php?action=Reg`, Form, function (data, status) {

        const Loading = $("#hidden");
        if (status === "success") {
            Loading.hide();
            UI.empty().append(data);
        } else {
            Loading.hide();
            UI.empty().append("<h5>Sorry there was an error.</h5>");
        }


    });


}//Register new user
function LoginForm() {

    const UI = $(".UI");
    const APP_URL = "http://localhost:8008/Git/Secure/Serialize/";
    const Form = $(".LoginForm").serialize();


    $.post(`${APP_URL}UserAPI.php?action=Login`, Form, function (data, status) {

        const Loading = $("#hidden");
        if (status === "success") {
            Loading.hide();
            UI.empty().append(data);
        } else {
            Loading.hide();
            UI.empty().append("<h5>Sorry there was an error.</h5>");
        }


    });


}