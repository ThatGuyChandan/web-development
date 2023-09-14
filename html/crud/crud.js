var roll,Name,age;
function readForm(){
 roll=document.getElementById("roll").value;
 Name=document.getElementById("name").value;
 age=document.getElementById("age").value;

}

function create(){
    readForm();
firebase
.database()
.ref("info/"+roll)
.set(
    {
        rollNumb:roll,
        Name:Name,
        Age:age,
    }
)
alert("data created");
}


function read(){
    readForm();
    firebase
.database()
.ref("info/"+roll)
.on("value",function(snap){
    document.getElementById("roll").value=snap.val().rollNumb;
    document.getElementById("name").value=snap.val().Name;
    document.getElementById("age").value=snap.val().Age;
})
}


function update(){
    readForm();
    firebase
.database()
.ref("info/"+roll)
.update(
    {
        // rollNumb:roll,
        Name:Name,
        Age:age,
    }
)
alert("data updated");
}


function Remove(){
    readForm();
    firebase
    .database()
    .ref("info/"+roll)   
    .remove();
    alert("data removed");
}