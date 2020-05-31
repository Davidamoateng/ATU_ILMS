var pwd = document.getElementById('pwd');
var eye = document.getElementById('fa_eye');

eye.addEventListener('click', togglePass);

function togglePass() {
    eye.classList.toggle('active');

    (pwd.type == 'password') ? pwd.type = 'text' : pwd.type = 'password';
}