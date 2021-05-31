// function validateForm() {
//     var x = document.forms["myForm"]["email"].value;
//     var y = document.forms["myForm"]["password"].value;
//     if (x == "" && y == "") {
//       alert("form fields must be filled out");profe//     }
//   }
let prof_link = document.querySelector(".proof-link");
let student_link = document.querySelector(".student-link");
let parent_link = document.querySelector(".parent-link");
let search_form = document.querySelector(".search-form");
let page_title = document.querySelector(".titlejs");

if (page_title.innerHTML == 'Students') {
    search_form.action = "http://localhost/school-management-app/search/fetchStudents";
}else if (page_title.innerHTML == 'professors') {
  search_form.action = "http://localhost/school-management-app/search/fetchProfs";
}else if(page_title.innerHTML == 'parents'){
  search_form.action = "http://localhost/school-management-app/search/fetchParents";
}




console.log(search_form);
// prof_link.addEventListener("click", function(e){
//   e.preventDefault();
//   window.location.replace("http://localhost/school-management-app/profs");
//   // search_form.action = "school-management-app/profs/fetchProfs";
//   if (search_form.action !== "") {
//     search_form.action = profAction;
//   }
//   console.log(search_form);
// });
// student_link.addEventListener("click", function(e){
//   e.preventDefault();
//   window.location.replace("http://localhost/school-management-app/students");
//   // search_form.action = "school-management-app/profs/fetchStudents";
//   if (search_form.action !== "") {
//     search_form.action = studAction;
//   }
//   console.log(search_form);
// });
// parent_link.addEventListener("click", function(e){
//   e.preventDefault();
//   window.location.replace("http://localhost/school-management-app/parents");
//   // search_form.action = "school-management-app/profs/fetchProfs";
//   if (search_form.action !== "") {
//     search_form.action = parAction;
//   }
// });

  const email = document.getElementById('email');
  const password = document.getElementById('password');
  const form = document.getElementById('form');
  const errorElement = document.getElementById('error')

  form.addEventListener('submit', (e) => {
    let messages = [];
    if (email.value === '' || email.value == null) {
      messages.push('email is required')
    }
    if (password.value.length <= 6 ) {
      messages.push('password must be longer than 6 ')
    }
    if (password.value.length > 20) {
      messages.push('password cant be longer than 20')
    }
    if (messages.length > 0 ) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }
  })

  // console.log('everything is working fine');