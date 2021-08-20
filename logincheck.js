function validate()
{
    var username = document.getElementById("user").value;
    var password = document.getElementById("password").value;

    if(username=="supervisor" && password =="123")
    {
        window.location.raplace("index.html");
        return;
    }else{
        alert("Falha no login");
    }
}