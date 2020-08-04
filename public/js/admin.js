$(document).ready(function(){
    $('#datatable-example').DataTable();

    $('.select2').select2({
        theme: 'bootstrap4',
    });
    
    $('.select2nosearch').select2({
        theme: 'bootstrap4',
        minimumResultsForSearch: -1,
    });

    setDatatable('#datauser', '/admin/user/json', [
            { data: 'id', width: '10%', 'class': 'text-center'},
            { data: 'name'},
            { data: 'email'},
            { data: 'username'},
            { data: 'avatar', 'class': 'text-center'},
            { data: 'role'},
            { data: 'button', width: '15%', 'class': 'text-center'}
        ]
    );
    
    $(".datatables tbody").on('click', 'td .hapus-btn', function(event){
        $('#delete-form').attr('action', $(this).data('href'));
    });
});

function setDatatable(element, url, columns) {
    $(element).DataTable({
        processing: true,
        serverSide: false,
        order: [0, 'desc'],
        pageLength: 10,
        ajax: {
            url: url,
            dataType: 'json',
            type: 'GET',
        },
        columns: columns,
    });
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
  
        reader.onload = function (e) {
            $('#showgambar').attr('src', e.target.result);
        }
  
        reader.readAsDataURL(input.files[0]);
    }
}
  
$("#avatar").change(function () {
    readURL(this);
});

$(".alert").fadeTo(2000,500).slideUp(500, function(){
    $(".alert").slideUp(500);
});