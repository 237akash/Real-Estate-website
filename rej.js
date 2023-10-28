const firebaseConfig = {
    apiKey: "AIzaSyAaxzRzL5Tug4K0ogqTq97CzbQQSUGeoDQ",
    authDomain: "rejistration-5fd52.firebaseapp.com",
    databaseURL: "https://rejistration-5fd52-default-rtdb.firebaseio.com",
    projectId: "rejistration-5fd52",
    storageBucket: "rejistration-5fd52.appspot.com",
    messagingSenderId: "227691467956",
    appId: "1:227691467956:web:0fe3aee1185c759e7ef3e1"
  };
 
  firebase.initializeApp(firebaseConfig);

  var  rejistrationDB = firebase.database().ref('rejistration');

  document.getElementById('rejistration').addEventListener("submit" , submitform);

  function submitform(e){

e.preventDefault();

var name = getElementVal('name');
var email = getElementVal('email');
var number= getElementVal('number');
var adhar= getElementVal('adhar');
var add= getElementVal('add');
var income= getElementVal('income');
// var adhar= getElementVal('adhar');
// var adhar= getElementVal('adhar');

// console.log(username,email,number,adhar,add,income );

saveMessages(name, email, number, adhar, add, income);

  }

const saveMessages = (name,name,number,adhar,add,income) =>{

var newrejistration = rejistrationDB.push();

newrejistration.set({

    name : name,
    email : email,
    number : number,
    adhar : adhar,
    add : add,
    income : income,




});
}



const getElementVal = (id) =>
{
return document.getElementById(id).Value;

}