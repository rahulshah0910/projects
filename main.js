
// Initialize Firebase
var config = {
    //PASTE HERE YOUR CODE
    apiKey: "AIzaSyBewVldpCDuDNlTRkemPQV5EQenJNPjOsA",
    authDomain: "gym-mngt-system.firebaseapp.com",
    databaseURL: "https://gym-mngt-system.firebaseio.com",
    projectId: "gym-mngt-system",
    storageBucket: "gym-mngt-system.appspot.com",
    messagingSenderId: "907378898491",
    appId: "1:907378898491:web:1fb0c416d2ff058ca28e1e",
    measurementId: "G-JMYJ0VNN5G"
};

firebase.initializeApp(config);

//Reference messages collection
let messagesRef = firebase.database().ref('messages');

//listen to form
document.getElementById('contactForm').addEventListener('submit', submitForm);

function submitForm(e){
    e.preventDefault();

    // get Values
    let name = getInputVal('name');
    let company = getInputVal('company');
    let email = getInputVal('email');
    let phone = getInputVal('phone');
    let message = getInputVal('message');

    //save message

    saveMessage(name, company, email, phone, message);

    //show alert
    document.querySelector('.alert').style.display='block';

    //Hide alert after 3 s
    setTimeout(function(){
        document.querySelector('.alert').style.display='none';
    }, 3000)
    
    //clear form
    document.getElementById('contactForm').reset();
}
//function to get form values

function getInputVal(id){
    return document.getElementById(id).value;
}

//save message to firebase
function saveMessage(name, company, email, phone, message){
    let newMessageRef = messagesRef.push();
    newMessageRef.set({
        name: name,
        service: company,
        email: email,
        phone: phone,
        message: message
    })
}