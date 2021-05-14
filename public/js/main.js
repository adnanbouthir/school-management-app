function validateForm() {
    var x = document.forms["myForm"]["email"].value;
    var y = document.forms["myForm"]["password"].value;
    if (x == "" && y == "") {
      alert("form fields must be filled out");
      return false;
    }
  }

  const email = document.getElementById('email');
  const password = document.getElementById('password');
  const form = document.getElementById('form');
  const errorElement = document.getElementById('error')

  form.addEventListener('submit', (e) => {
    let messages = [];
    if (email.value === '' || email.value == null) {
      messages.push('email is required')
    }
    if (messages.length > 0 ) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }
  })