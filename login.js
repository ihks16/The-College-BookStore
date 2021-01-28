var firebaseConfig =
{
  apiKey: "AIzaSyDwB6OJJqJiwmSrSKo2oANQfNN4rqQOLyI",
  authDomain: "bookshop-4b09f.firebaseapp.com",
  databaseURL: "https://bookshop-4b09f.firebaseio.com",
  projectId: "bookshop-4b09f",
  storageBucket: "bookshop-4b09f.appspot.com",
  messagingSenderId: "264769852546",
  appId: "1:264769852546:web:04ba99753063e6bdd6109b",
  measurementId: "G-RPY9ST0DXV"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
firebase.analytics();

var con = firebase.database().ref('users');

document.getElementById("form").addEventListener("submit",(e)=>{
   e.preventDefault();
   

   var userInfo = con.push();

   userInfo.set({

    name: getElementById("name"),
    age : getElementById("age"),
    email : getElementById("email"),
    password: getElementById("con_password")    
   });

   alert("sent");
   console.log("sent");
   document.getElementById("form").requestFullscreen;

  });


  function getElementById(id){

     return document.getElementById(id).value;
  }
  