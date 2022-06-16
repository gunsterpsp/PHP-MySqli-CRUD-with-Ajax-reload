const addUser = () => {

    const name = $('#name').val();
    const email = $('#email').val();
    const mobile = $('#mobile').val();
    const city = $('#city').val();
    
    $.ajax({
        url: "insert.php",
        type: "post",
        data: {
            name: name,
            email: email,
            mobile: mobile,
            city: city
        },
        success: function(data, status){
            $('#createModal').modal('hide');
            $('#example').DataTable().ajax.reload();

        }

    });
    
    $("#form")[0].reset();

}



$(document).ready(function () {

    $('#example').dataTable({
        "destroy": true,
        "order": [[0, "desc"]],
        ajax: {
            url: "server_processing.php",
            'dataSrc': ""
        },
        "columns": [
            { "data": "id"  },
            { "data": "name"  },
            { "data": "email"  },
            { "data": "mobile"  },
            { "data": "city"  },
            { "data": "update"  },
            
            
            
            
        ]
    });
    
    
    });



const DeleteUser = (deleteid) => {

    const confirm_delete = confirm("Are you sure you want delete this id# "+ deleteid +" record?");
    if(confirm_delete == true){

        $.ajax({
            url: "delete.php",
            type: "POST",
            data: {
                deleteid: deleteid
            },
            success: function(data, status){
                $('#example').DataTable().ajax.reload();
            }
        });
    }
}


const GetDetails = (updateid) => {

    $('#hiddendata').val(updateid);



    $.post("update.php", {
        updateid: updateid
    }, function(data, status){
        const userid = JSON.parse(data);
        $('#updatename').val(userid.name);
        $('#updateemail').val(userid.email);
        $('#updatemobile').val(userid.mobile);
        $('#updatecity').val(userid.city);

    });

    $('#updateModal').modal("show");


}



const UpdateDetails = () => {

    const updatename = $('#updatename').val();
    const updateemail = $('#updateemail').val();
    const updatemobile = $('#updatemobile').val();
    const updatecity = $('#updatecity').val();
    const hiddendata = $('#hiddendata').val();
    
    $.ajax({
        url: "update.php",
        type: "post",
        data: {
            updatename: updatename,
            updateemail: updateemail,
            updatemobile: updatemobile,
            updatecity: updatecity,
            hiddendata: hiddendata
        },
        success: function(data, status){
            $('#updateModal').modal('hide');
            $('#example').DataTable().ajax.reload();

        }

    });

}



// const addUser = () => {

//     const name = $('#name').val();
//     const email = $('#email').val();
//     const mobile = $('#mobile').val();
//     const city = $('#city').val();
    
//     $.ajax({
//         url: "insert.php",
//         type: "post",
//         data: {
//             name: name,
//             email: email,
//             mobile: mobile,
//             city: city
//         },
//         success: function(data, status){
//             $('#example').DataTable().ajax.reload();

//         }

//     });
    
//     $("#form")[0].reset();

// }