window.onload = function () {
    getLastname(0);
    getChassisNumber(0);
    getCustomerData(0);
    getNote(0);
}
function getLastname(firstname) {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if(this.readyState == 4 && this.status == 200) {
            let selectDiv = document.getElementById("lastname");
            selectDiv.innerHTML = this.responseText;
        }
    }

    xhr.open("GET", "getLastName.php?firstname="+firstname);
    xhr.send();
}
function selectedNameChanged(e) {
    getLastname(e.value);
}
function getChassisNumber(chassisHistory)
{
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if(this.readyState == 4 && this.status == 200) {
            let selectDiv = document.getElementById("ChassisTable");
            selectDiv.innerHTML = this.responseText;
        }
    }

    xhr.open("GET", "getAllRepairsFromVehicle.php?chassisHistory="+chassisHistory);
    xhr.send();
}
function selectedChassisNumber(e)
{
    getChassisNumber(e.value);
}
function getCustomerData(FirstnameLastnameChassis)
{
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if(this.readyState == 4 && this.status == 200) {
            let selectDiv = document.getElementById("tableCustomerData");
            selectDiv.innerHTML = this.responseText;
        }
    }

    xhr.open("GET", "CustomerData.php?FirstnameLastnameChassis="+FirstnameLastnameChassis);
    xhr.send();
}
function selectedUpdateOrDelete(e)
{
    getCustomerData(e.value);
}
function getNote(DataToMechanic)
{
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if(this.readyState == 4 && this.status == 200) {
            let selectDiv = document.getElementById("DivDisplayProblem");
            selectDiv.innerHTML = this.responseText;
        }
    }

    xhr.open("GET", "displayProblem.php?DataToMechanic="+DataToMechanic);
    xhr.send();
}

function showNote(e)
{
    getNote(e.value);
}

function resetForm()
{
    var firstname = document.getElementById("firstname");
    var lastname = document.getElementById("lastname");
    var phone = document.getElementById("phone");
    var address = document.getElementById("address");
    var email = document.getElementById("email");
    var manufacturer = document.getElementById("manufacturer");
    var model = document.getElementById("model");
    var year = document.getElementById("year");
    var fuel = document.getElementById("fuel");
    var engine = document.getElementById("engine");
    var mileage = document.getElementById("mileage");
    var chassis = document.getElementById("chassis");
    var note = document.getElementById("note");
    var radioNo=document.getElementById("notifyNo")
    var radioYes=document.getElementById("notifyYes")

    firstname.selectedIndex = 0;
    lastname.selectedIndex = 0;
    phone.value = "";
    address.value = "";
    manufacturer.value = "";
    model.value = "";
    email.value = "";
    year.value = "";
    fuel.value = "";
    engine.value = "";
    mileage.value = "";
    chassis.selectedIndex = 0;
    note.value = "";
    radioNo.checked=false;
    radioYes.checked=false;
}
function NewResetForm() {
    var Firstname = document.getElementById("Firstname");
    var Lastname = document.getElementById("Lastname");
    var Phone = document.getElementById("Phone");
    var Address = document.getElementById("Address");
    var Email = document.getElementById("Email");
    var Manufacturer = document.getElementById("Manufacturer");
    var Model = document.getElementById("Model");
    var Year = document.getElementById("Year");
    var Fuel = document.getElementById("Fuel");
    var Engine = document.getElementById("Engine");
    var Mileage = document.getElementById("Mileage");
    var Chassis = document.getElementById("Chassis");
    var Note = document.getElementById("Note");
    var RadioNo = document.getElementById("NotifyNo")
    var RadioYes = document.getElementById("NotifyYes")

    Firstname.value="";
    Lastname.value="";
    Phone.value = "";
    Address.value = "";
    Manufacturer.value = "";
    Model.value = "";
    Email.value = "";
    Year.value = "";
    Fuel.value = "";
    Engine.value = "";
    Mileage.value = "";
    Chassis.value="";
    Note.value = "";
    RadioNo.checked = false;
    RadioYes.checked = false;
}
function validationForm() {
    $firstname = document.getElementById("firstname");
    $lastname = document.getElementById("lastname");
    $phone = document.getElementById("phone");
    $address = document.getElementById("address");
    $email = document.getElementById("email");
    $manufacturer = document.getElementById("manufacturer");
    $model = document.getElementById("model");
    $year = document.getElementById("year");
    $fuel = document.getElementById("fuel");
    $engine = document.getElementById("engine");
    $mileage = document.getElementById("mileage");
    $chassis = document.getElementById("chassis");
    $note = document.getElementById("note");
    $radioNo=document.getElementById("notifyNo")
    $radioYes=document.getElementById("notifyYes")


    if($firstname.selectedIndex<=0 || $lastname.selectedIndex<=0 || $phone.value==="" || $address.value==="" || $email.value==="" || $manufacturer.value==="" || $model.value==="" || isNaN($year.value) || $fuel.value==="" || isNaN($engine.value)|| isNaN($mileage.value) || $chassis.selectedIndex<=0 || $note.value  ==="" || ($radioNo.checked===false && $radioYes.checked===false))
    {
        alert("You must enter correct data for all fields");
        return false;
    }
}
function NewValidationForm() {
    $Firstname = document.getElementById("Firstname");
    $Lastname = document.getElementById("Lastname");
    $Phone = document.getElementById("Phone");
    $Address = document.getElementById("Address");
    $Email = document.getElementById("Email");
    $Manufacturer = document.getElementById("Manufacturer");
    $Model = document.getElementById("Model");
    $Year = document.getElementById("Year");
    $Fuel = document.getElementById("Fuel");
    $Engine = document.getElementById("Engine");
    $Mileage = document.getElementById("Mileage");
    $Chassis = document.getElementById("Chassis");
    $Note = document.getElementById("Note");
    $RadioNo=document.getElementById("NotifyNo")
    $RadioYes=document.getElementById("NotifyYes")


    if($Firstname.value==="" || $Lastname.value==="" || $Phone.value==="" || $Address.value==="" || $Email.value==="" || $Manufacturer.value==="" || $Model.value==="" || isNaN($Year.value) || $Fuel.value==="" || isNaN($Engine.value)|| isNaN($Mileage.value) || $Chassis.value==="" || $Note.value  ==="" || ($RadioNo.checked===false && $RadioYes.checked===false))
    {
        alert("You must enter correct data for all fields");
        return false;
    }
}
function UpdateValidationForm() {
    $CustomerFirstname = document.getElementById("CustomerFirstname");
    $CustomerLastname = document.getElementById("CustomerLastname");
    $CustomerPhone = document.getElementById("CustomerPhone");
    $CustomerAddress = document.getElementById("CustomerAddress");
    $CustomerEmail = document.getElementById("CustomerEmail");
    $CustomerManufacturer = document.getElementById("CustomerManufacturer");
    $CustomerModel = document.getElementById("CustomerModel");
    $CustomerYear = document.getElementById("CustomerYear");
    $CustomerFuel = document.getElementById("CustomerFuel");
    $CustomerEngine = document.getElementById("CustomerEngine");
    $CustomerMileage = document.getElementById("CustomerMileage");
    $CustomerChassis = document.getElementById("CustomerChassis");
    $CustomerNote = document.getElementById("CustomerNote");
    $CustomerRadioNo=document.getElementById("CustomerNotifyNo")
    $CustomerRadioYes=document.getElementById("CustomerNotifyYes")


    if($CustomerFirstname.value==="" || $CustomerLastname.value==="" || $CustomerPhone.value==="" || $CustomerAddress.value==="" || $CustomerEmail.value==="" || $CustomerManufacturer.value==="" || $CustomerModel.value==="" || isNaN($CustomerYear.value) || $CustomerFuel.value==="" || isNaN($CustomerEngine.value)|| isNaN($CustomerMileage.value) || $CustomerChassis.value==="" || $CustomerNote.value  ==="" || ($CustomerRadioNo.checked===false && $CustomerRadioYes.checked===false))
    {
        alert("You must enter correct data for all fields");
        return false;
    }
}
function CompleteValidation()
{
    $DataToMechanicCR=document.getElementById("DataToMechanicCR");
    $inputComment=document.getElementById("inputComment");

    if($DataToMechanicCR.selectedIndex<=0 || $inputComment.value==="")
    {
        alert("You must select vehicle and enter comment!")
        return false;
    }

}
function DischargeValidation()
{
    $dischargedRequestSelect=document.getElementById("dischargedRequestSelect");
    $clerkComment=document.getElementById("clerkComment");
    $price=document.getElementById("price");

    if($dischargedRequestSelect.selectedIndex<=0 || $clerkComment.value==="" || isNaN($price.value) || $price.value==="")
    {
        alert("You must select vehicle and enter comment and price!")
        return false;
    }
}
