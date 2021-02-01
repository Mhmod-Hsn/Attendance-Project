const API_BASE_URL = 'http://localhost:3000'
const fetchOptions = {
    headers: {
        'Content-Type': 'application/json',
    }
}


const Opentime = '07:00:00 AM'
const maxLateTime = '09:30:00 AM'
const dayStartime = '09:00:00 AM'
monthNames = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
];

users = []
user = null

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


    // remove floating buttons
    if($('#register-form,#login-form').length){
        $('#floating-buttons').remove()
    }


    //get users
    getUsers()

    // get current user if logged in
    getCurrentUserInfo()

    // setInterval(updateData,2000)


    if (user?.role !== 'admin'){
        $('.admin-only').remove()
    }

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
    window.location.replace("/login.html");
}

function removeLogoutBtn(){
    document.querySelector('#logout').remove()
}

function checkAuthAdmin(){
    if (!user && user.role==='admin'){
        window.location.replace("/login.html");
    }
}

function redirectLoggedInUser(){
    let user = JSON.parse(localStorage.getItem('user'));

    // already logged in
    if (user){
        if (user.role === 'admin'){
            window.location.replace("/attendance.html");
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

function fillUsersToSelect(users){
    let emps =  []

    for (let i=0;i<users.length;i++){
        // hide admins and prople who was already registered today
        if (
            users[i].role !== 'admin' &&
            (
                // check if it was registered today or not
                new Date(users[i].absent[users[i].absent.length-1]).toLocaleDateString()
                    !==
                new Date().toLocaleDateString() &&

                new Date(users[i].late[users[i].late.length-1]).toLocaleDateString()
                    !==
                new Date().toLocaleDateString() &&

                new Date(users[i].attend[users[i].attend.length-1]).toLocaleDateString()
                    !==
                new Date().toLocaleDateString()
            )
        ){
            emps.push(users[i])
        }
    }

    emps.forEach(emp=>{
        $('select#employees').append(new Option(`${emp.firstname} ${emp.lastname}`, emp.id));
    })
}

function fillAllUsersToSelect(){
    let allEmployees =  []


    for (let i=0;i<users.length;i++){
        // hide admins
        if (
            users[i].role !== 'admin'){
            allEmployees.push(users[i])
        }
    }

    allEmployees.forEach(emp=>{
        $('select#allEmployees').append(new Option(emp.username, emp.username));
    })
}

function getUsers () {
    fetch(`${API_BASE_URL}/users`)
        .then(response => response.json())
        .then(data => {
            users = data
        })
        .catch(error => toast.fire({text: error,icon: 'error'}))
}

function getUser (id) {
    return fetch(`${API_BASE_URL}/users/${id}`)
        .then(response => response.json())
        .then(data => {
            return data
        })
}
function editUser (id,data) {
    fetch(`${API_BASE_URL}/users/${id}`, {
        ...fetchOptions,
        method: 'PUT', // or 'PUT'
        body: JSON.stringify(data)
    }).then(response => {
        return response
    })
}

function registerAttendance(id,attendanceTime){

    getUser(id)
        .then(data=>{
            let tempUser = data;
            let currentTime = new Date(attendanceTime).toLocaleTimeString()

            //wrong time
            if (
                currentTime <= Opentime
                &&
                currentTime >= '00:00:00 AM'
            ){
                toast.fire({text: 'Wrong Time',icon: 'error'})
            }


            //attend
            else if (
                currentTime <= dayStartime
                &&
                currentTime >= Opentime
            ){
                tempUser.attend.push(attendanceTime.toLocaleString())
                toast.fire({text: `${tempUser.firstname} ${tempUser.lastname} attended at ${currentTime}`})
            }

            //late
            else if (
                currentTime <= maxLateTime
                &&
                currentTime > dayStartime
            ){
                tempUser.late.push(attendanceTime.toLocaleString())
                toast.fire({text: `${tempUser.firstname} ${tempUser.lastname} attended (late) at ${currentTime}`})
            }

            //absence
            else {
                tempUser.absent.push(attendanceTime.toLocaleString())
                toast.fire({text: `${tempUser.firstname} ${tempUser.lastname} absent at ${currentTime}`})
            }

            $("#employees option[value=" + id + "]").hide();

            editUser(tempUser.id,tempUser)
        })
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



function ShowUserStatistics(user){
    // clear table
    $('#daily-table tbody tr').remove()

    user = users.find(item=>{
        return item.username === user.value
    })

    document.querySelector('#profile #username').innerHTML = `${user.firstname} ${user.lastname} (${user.username})`


    /* Get current Month only Attendance */

    let attend = user.attend.filter(once=>{
            return new Date(once).getMonth() === new Date().getMonth()
        }),
        absent =  user.absent.filter(once=>{
            return new Date(once).getMonth() === new Date().getMonth()
        }),
        late = user.late.filter(once=>{
            return new Date(once).getMonth() === new Date().getMonth()
        })


    /* Monthly Attendance */

    document.querySelector('#monthly-table .attend').innerText  = attend.length
    document.querySelector('#monthly-table .late').innerText    = late.length
    document.querySelector('#monthly-table .absent').innerText  = absent.length
    document.querySelector('#monthly-table .month-name').innerText  = monthNames[new Date().getMonth()]




    /* Daily Attendance */
    let allDays = []

    attend.forEach(item=>{
        allDays.push({data: item,type: 'attend'})
        // document.querySelector('#daily-table .attend').innerHTML  += (item + '<br/>')
    })
    late.forEach(item=>{
        allDays.push({data: item,type: 'late'})
        // document.querySelector('#daily-table .late').innerHTML  += (item + '<br/>')
    })
    absent.forEach(item=>{
        allDays.push({data: item,type: 'absent'})
        // document.querySelector('#daily-table .absent').innerHTML  += (item + '<br/>')
    })

    allDays.sort((a,b)=> {
        return new Date(a.data).getTime() > new Date(b.data).getTime() ? 1 : -1
    })
    allDays.forEach(singleDay=>{
        let bgClass;
        switch (singleDay.type){
            case 'attend':
                bgClass = 'bg-success';
                break;
            case 'late':
                bgClass = 'bg-warning';
                break;
            default:
                bgClass = 'bg-danger';
                break;
        }
        $('#daily-table').append(`<tr><th scope="row" class="font-weight-bolder ${bgClass}">${new Date(singleDay.data).toDateString()}</th><th scope="row" class="font-weight-bolder ${bgClass}">${new Date(singleDay.data).toLocaleTimeString()}</th></tr>`)
    })

    document.querySelector('#daily-table .month-name').innerText  = monthNames[new Date().getMonth()]
}




function showDashboardStatistics(){



    /* Get current Month only Attendance */
    let attend = 0,
        absent = 0,
        late = 0

    // let total = attend.length + absent.length + late.length

    users.forEach(u=>{
        let currentUser = {
            attend: 0,
            absent: 0,
            late: 0
        }
        currentUser.attend += u.attend.filter(once=>{
            return new Date(once).getMonth() === new Date().getMonth()
        }).length
        currentUser.absent += u.absent.filter(once=>{
            return new Date(once).getMonth() === new Date().getMonth()
        }).length
        currentUser.late += u.late.filter(once=>{
            return new Date(once).getMonth() === new Date().getMonth()
        }).length

        attend += currentUser.attend
        absent += currentUser.absent
        late += currentUser.late

        $('#all-emps-table').append(`<tr><td>${u.firstname||''} ${u.lastname||''}</td><td>${currentUser.attend}</td><td>${currentUser.late}</td><td>${currentUser.absent}</td></tr>`)


    })

    let total = attend + absent + late
    document.querySelector('.attendance .number').innerText = attend
    document.querySelector('.attendance .progress-bar').style.width = `${100*attend/total}%`
    document.querySelector('.absence .number').innerText = absent
    document.querySelector('.absence .progress-bar').style.width = `${100*absent/total}%`
    document.querySelector('.late .number').innerText = late
    document.querySelector('.late .progress-bar').style.width = `${100*late/total}%`



    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Attendance', 'Late', 'Absence'],
            datasets: [{
                label: '# of people',
                data: [attend, late, absent],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        },
    });



    document.querySelector('.month-name').innerText  = monthNames[new Date().getMonth()]


}


function sendEmail(to,username,password) {
    return Email.send({
        Host : "smtp.gmail.com",
        Username: 'da7doom@gmail.com',
        Password: 'gxvllqvdzjetejwg',
        To : to,
        From : "da7doom@gmail.com",
        Subject : `username & password confirmation`,
        Body : `Username ${username} <br/> Password ${password}`
    })
}
function generatePassword() {
    var length = 8,
        charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
        retVal = "";
    for (var i = 0, n = charset.length; i < length; ++i) {
        retVal += charset.charAt(Math.floor(Math.random() * n));
    }
    return retVal;
}
function generateUsername() {
    return new Date().getTime().toString();
}
