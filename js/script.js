// Example starter JavaScript for disabling form submissions if there are invalid fields

window.addEventListener('load', function() {

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });


    // hide Loader
    document.querySelector('#loader').classList.add('hidden');

    // init tooltip
    $('[data-toggle="tooltip"]').tooltip()


    // Sweet Alert preparation
    window.swal = swal.mixin({
        confirmButtonColor: 'var(--secondary)',
        cancelButtonColor: 'var(--primary)',
    });
    window.toast = swal.mixin({
        toast: true,
        position: 'top',
        icon: 'success',
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
        onOpen: (toast) => {
            toast.addEventListener('mouseenter', swal.stopTimer);
            toast.addEventListener('mouseleave', swal.resumeTimer)
        }
    });


    //get users
    getUsers()

    // get current user if logged in
    getCurrentUserInfo()

});


function getCurrentUserInfo(){
    if (localStorage.getItem('user')){
        saveUserInfo(JSON.parse(localStorage.getItem('user')))
    }
}
function saveUserInfo(info){
    user = info;
}

function logout(){
    localStorage.removeItem('user')
    window.location.replace("/login.php");
}

function removeLogoutBtn(){
    document.querySelector('#logout').remove()
}

function checkAuthAdmin(){
    let user = JSON.parse(localStorage.getItem('user'));

    if (!user && user.role==='admin'){
        window.location.replace("/login.php");
    }
}

function redirectLoggedInUser(){
    let user = JSON.parse(localStorage.getItem('user'));

    // already logged in
    if (user){
        if (user.role === 'admin'){
            window.location.replace("/attendance.php");
        } else {
            window.location.replace("/emp.php");
        }
    }
}

function getUsers () {
    // http://localhost:8080
    fetch('db/users.json')
        .then(response => {
            if (!response.ok) {
                throw new Error("HTTP error " + response.status);
            }
            return response.json();
        })
        .then(json => {
            users = json;
            console.log(users)
        })
        .catch(function () {
            toast.fire({
                text: 'Error happened in importing users file',
                icon: 'error'
            })
        })

        .then(()=>{
            fillUsersToSelect()
        })
}

