//
const fullNameInput = document.getElementById('fullNameInput');
const emailInput = document.getElementById('emailInput');

const submitBtn = document.getElementById('submitBtn');

submitBtn.addEventListener('click', function () {
    const fullName = fullNameInput.value;
    const email = emailInput.value;

    if (fullName === '' || email === '') {
        alert('لطفا تمام مقادیر را وارد نمایید.');
        return;
    }

    fetch('/api/register', {
        method: 'POST',
        params: { fullName: fullName, email: email }
    })

})