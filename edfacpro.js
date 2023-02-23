// firstname

document.getElementById('fn').addEventListener('input', nameValidator);//namevalid... is a callback function



function nameValidator(event) {
    let val = event.target.value;//target is a predefined keyword
    if (!val.match(/^[A-Z][^0-9]+$/)) {
        document.getElementById("fna").innerHTML = "Firstname should Start with capital Letter";
        return false;
    }
    else if (val.length < 5) {
        document.getElementById("fna").innerHTML = "Name should contain atleast 5 characters!";
        return false;
    }
    else {
        document.getElementById('fna').innerHTML = "All looks fine!";
        return true;
    }

}

