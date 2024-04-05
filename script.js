var buttonLogin = document.getElementById('button-login');

//memeriksa email dan password serta menampilkan kotak dialog
buttonLogin.addEventListener('click', (e) => {
    e.preventDefault();
    var username = document.querySelector('#email').value;
    var password = document.querySelector('#password').value;

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    if (!username || !password) {
        tampilkanDialog("Email dan password harus diisi");
    } else if (!emailRegex.test(username)) {
        tampilkanDialog("Email tidak valid");
        username.value = '';
        password.value = '';
    } else if (!passwordRegex.test(password)) {
        tampilkanDialog("Password tidak memenuhi kriteria");
        password.value = '';
    } else {
        kirimPHP();
    } 
});

function tampilkanDialog(message) {
    var dialog = document.getElementById('dialog');
    var dialogMessage = document.getElementById('dialog-message');
    dialogMessage.textContent = message;
    dialog.style.display = 'block';
}

var tutupDialog = document.getElementById('tutup-dialog');
tutupDialog.addEventListener('click', (e) => {
    var dialog = document.getElementById('dialog');
    dialog.style.display = 'none';
});
// sampai sini

// pengiriman informasi email dan password secara asinkron menggunakan AJAX.
function kirimPHP(){
    var username = document.querySelector('#email').value;
    var password = document.querySelector('#password').value;
    var rememberME = document.querySelector('#rememberMe');

    fetch('cek-login.php', {
        method: 'post',
        headers: {
            "Content-Type": 'application/x-www-form-urlencoded'
        },
        body: `username=${username}&password=${password}&remember=${rememberME.checked}`
    }).then(result => result.text().then(
        text => {
            cekBerhasil(text);
        }
    ));
}


// redirect ke halaman profil
function cekBerhasil(keadaan){
    if (keadaan == "berhasil"){
        window.location.href = 'profil.php';
    } else {
        tampilkanDialog("Email atau Password Salah");
        document.querySelector('#password').value = '';
    }
}


