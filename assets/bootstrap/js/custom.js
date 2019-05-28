$(document).ready(function(){
  //datatables
  $('#table-food').dataTable();
  //select2
    $('#txtorder').select2({
        ajax:{
         url: base_url+"manager/show_menu_json",
         dataType: 'json',
         type: 'get',
         data: function (params) {
           return {key: params.term};
         },
         processResults: function (data) {
           return {
             results: $.map(data, function (item) {
               return {
                 id: item.food_id,
                 text: item.name,
               }
             })
           };
         },
         cache: true
       },
       minimumInputLength: 0,
       placeholder: 'Silahkan pilih',
       allowClear: true,
    });
  //login 
  $('#formlogin').submit(function(event){
    event.preventDefault();
    $.ajax({
      url : base_url+'login/login_check',
            type: 'POST',
            data: { user:$('[name=txtusername]').val(),
            pass:$('[name=txtpassword]').val()},
            success: function(data) {
                if(data == 'empty'){
                  alert('username belum terdaftar');
                }else if(data == 'wrong_pass'){
                  alert('password salah');
                }else if(data == 'success'){
                  window.location.href = base_url+'login/dashboard'; 
                }
            }
    });
  });

  //CRUD MENU
  $('.tags_cat').on('click',function(){
    var cat = $(this).data('cat');
    show_product(cat);
  });

  show_product('');
        function show_product(id = false){
            $.ajax({
                type  : 'post',
                url   : base_url+'manager/show_menu',
                data  : {id:id},
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i; var no = 1;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-warning btn-sm item_edit" data-menu_id="'+data[i].food_id+
                                                                          '" data-menu="'+data[i].name+'" data-price="'+data[i].price+
                                                                          '" data-desc="'+data[i].desc_+'" data-cat="'+data[i].food_category_id+'"><i class="fa fa-pencil"></i></a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-menu_id="'+data[i].food_id+'"><i class="fa fa-remove"></i></a>'+
                                '</td>'+
                                '<td>'+no+'</td>'+
                                '<td>'+data[i].name+'</td>'+
                                '<td>'+data[i].price+'</td>'+
                                '<td>'+data[i].desc_+'</td>'+
                                '<td><a href="'+base_url+'assets/file_uploads/menu/'+data[i].files+'" target="blank">'+data[i].files+'</a></td>'+
                                '<td><div class="primary-switch">'+
                                    '<input type="checkbox" id="default-switch'+data[i].food_id+'">'+
                                    '<label for="default-switch'+data[i].food_id+'"></label>'+
                                    '</div></td>'+
                                '</tr>';
                        no++;
                    }
                    $('#show_data').html(html);
                }
 
            });
        }

        $('#addnew').on('click',function(){
          $('#Modal_Add').modal('show');
          document.getElementById("formnewitem").reset();
          $('#exampleModalLabel').html('Add Menu');
          $('#btn_save').prop('hidden',false);
          $('#btn_edit').prop('hidden',true);
        });

        $('#btn_save').on('click',function(){
          $('#formnewitem').submit(function(event){
            event.preventDefault(); 
            var fields = $(".required")
                .find("textarea, input").serializeArray();
            var error_message = [];
            $.each(fields, function(i, field) {
              if (!field.value)
                error_message += field.name + ' is required';
             }); 
              if(error_message.length > 0){
                alert(error_message);
              }else{
                $.ajax({
                     url:base_url+'manager/add_menu',
                     type:"post",
                     data:new FormData(this),
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                      success: function(data){
                          alert("Success add new menu");
                          document.getElementById("formnewitem").reset()
                          $('#Modal_Add').modal('hide');
                          show_product('');
                   }
                });
              }
          });
        });
 
        $('#show_data').on('click','.item_edit',function(){
            var menu_id = $(this).data('menu_id');
            var menu    = $(this).data('menu');
            var price   = $(this).data('price');
            var desc   = $(this).data('desc');
            var cat   = $(this).data('cat');

            $('#Modal_Add').modal('show');
            $('#exampleModalLabel').html('Edit Menu');
            $('#btn_save').prop('hidden',true);
            $('#btn_edit').prop('hidden',false);
            
            $('[name="inpid"]').val(menu_id);
            $('[name="inpmenu"]').val(menu);
            $('[name="inpprice"]').val(price);
            $('[name="txtdesc"]').val(desc);
            $('[name="slccategory"]').val(cat);
        });

        $('#btn_edit').on('click',function(){
          $('#formnewitem').submit(function(event){
            event.preventDefault(); 
            var fields = $(".required")
                .find("textarea, input").serializeArray();
            var error_message = [];
            $.each(fields, function(i, field) {
              if (!field.value)
                error_message += field.name + ' is required';
             }); 
              if(error_message.length > 0){
                alert(error_message);
              }else{
                $.ajax({
                     url:base_url+'manager/edit_menu',
                     type:"post",
                     data:new FormData(this),
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                      success: function(data){
                          alert("Success edit menu");
                          document.getElementById("formnewitem").reset()
                          $('#Modal_Add').modal('hide');
                          show_product('');
                   }
                });
              }
          });
        });
 
        $('#show_data').on('click','.item_delete',function(){
            var menu_id = $(this).data('menu_id');
            if (confirm('are you sure to delete this menu?')) {
                $.ajax({
                       url:base_url+'manager/delete_menu',
                       type:"post",
                       data: { id:menu_id},
                        success: function(data){
                            alert(menu+"was deleted");
                            show_product('');
                     }
                  });
            } else {
                return false;
            }
        });


  //CRUD ORDER
});