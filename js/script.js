
const maxLateTime = '9:30:00 AM'
const dayStartime = '9:00:00 AM'
users = []
monthNames = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
];


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

    setInterval(updateData,2000)
});

// this function is for testing purposes >>ONLY<<
function updateData(){
    getUsers()
    if (users && user ){
        for (let i=0;i<users.length;i++){
            if (user.username === users[i].username){
                user = users[i]
                asyncLocalStorage.setItem('user',JSON.stringify(user))
                break
            }
        }
    }
}

function getCurrentUserInfo(){
    if (localStorage.getItem('user')){
        user = JSON.parse(localStorage.getItem('user'))
    }
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
            window.location.replace("/profile.php");
        }
    }
}


/*
function fillAttendanceDateTime(fireToast = true){
    $('#attendance-time').val(new Date().toLocaleTimeString('en-EG',{ hour12: false }))
    if (fireToast)
        toast.fire('Time updated successfully')
}
*/

function fillUsersToSelect(){
    let emps =  []

    for (let i=0;i<users.length;i++){
        // hide admins and prople who was already registered today
        if (
            users[i].role !== 'admin' &&
            !(
                // check if it was registered today or not
                new Date(users[i].absent[users[i].absent.length-1]).toLocaleDateString() === new Date().toLocaleDateString() ||
                new Date(users[i].late[users[i].late.length-1]).toLocaleDateString() === new Date().toLocaleDateString() ||
                new Date(users[i].attend[users[i].attend.length-1]).toLocaleDateString() === new Date().toLocaleDateString()
            )
        ){
            emps.push(users[i])
        }
    }

    emps.forEach(emp=>{
        $('select#employees').append(new Option(emp.username, emp.username));
    })
}
function setUsers (){
    asyncLocalStorage.setItem('users',JSON.stringify(users))
        .then(res=>{
            // toast.fire('successfully saved')
        })
}
function getUsers () {


/*    asyncLocalStorage.getItem('users')
        .then(res=>{
            users = JSON.parse(res)
            fillUsersToSelect()
        })*/


    fetch('db/users.json')
        .then(response => {
            if (!response.ok) {
                throw new Error("HTTP error " + response.status);
            }
            return response.json();
        })
        .then(json => {
            users = json;
            setUsers()
        })
        .then(()=>{
            fillUsersToSelect()
        })
}

function SaveAsFile(content, fileName, contentType='application/json;charset=utf-8') {

    let a = document.createElement("a");
    let file = new Blob([content], {type: contentType});
    a.href = URL.createObjectURL(file);
    a.download = fileName;
    a.click();

/*
    saveAs('user.json', data, (err) => {
        if (err) {
            throw err;
        }
        console.log("JSON data is saved.");
    });
*/

}


function registerAttendance(username,attendanceTime){
    for (let i=0;i<users.length;i++){
        if (username === users[i].username){

            //attend
            if (new Date(attendanceTime).toLocaleTimeString() <= dayStartime){
                users[i].attend.push(attendanceTime)
            } else if (new Date(attendanceTime).toLocaleTimeString() <= maxLateTime){
                users[i].late.push(attendanceTime)
            } else {
                users[i].absent.push(attendanceTime)
            }

        }
        $("#employees option[value=" + username + "]").hide();
    }

    setUsers()
}

const asyncLocalStorage = {
    setItem: function (key, value) {
        return Promise.resolve().then(function () {
            localStorage.setItem(key, value);
        });
    },
    getItem: function (key) {
        return Promise.resolve().then(function () {
            return localStorage.getItem(key);
        });
    }
};
