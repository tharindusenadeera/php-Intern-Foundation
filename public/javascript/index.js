/**
 * Created by acer on 2017-01-09.
 */



function validateIndex() {
    var IsOk;
    var nic = document.getElementsByName('nic').value;

    if (nic.match(/^[0-9]{9}[vVxX]$/)){
        alert('NIC is Invalid');
        IsOk = false;
    } else {
        IsOk = false;
    }

    return IsOk;
}

