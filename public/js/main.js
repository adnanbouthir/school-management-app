// function validateForm() {
//     var x = document.forms["myForm"]["email"].value;
//     var y = document.forms["myForm"]["password"].value;
//     if (x == "" && y == "") {
//       alert("form fields must be filled out");
//       return false;
//     }
//   }

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