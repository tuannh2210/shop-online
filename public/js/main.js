        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function(){
            $('#form').validate({
                rules:{
                    name: {
                        required: true,
                        minlength: 6
                    },
                    email:{
                        required: true,
                        email: true
                    },
                    price:{
                        required: true,

                    },
                    pass:{
                        required: true,
                        minlength: 2
                    },
                    cfpass: {
                        equalTo: '#pass',
                    },
                    feature_image: {
                      extension: "JPG|PNG"
                    },
                    avatar:{
                      extension: "JPG|PNG"
                  }
                },
                messages:{
                    name: {
                        required: "Vui lòng điền tên đăng nhập",
                        minlength: "Tên đăng nhập ít nhất có 6 ký tự"
                    },
                    email:{
                        required: "Vui lòng điền email",
                        email:"Vui lòng điền đúng định dạng email"
                    },
                    feature_image:{
                        extension: "Sai định dạng ảnh"
                    }

                }
            });
            $("#addnew").click(function(){
                $(".add").append(
                    "<div class='gallery'>"
                    +"<div class='form-group'>"     
                    +"<input type='file' name='url' value='' class='form-control' placeholder='Product Price' >"
                    +"</div>"
                    +"<div class='form-group'>" 
                    +"<input name='notes' value='Notes' class='form-control' placeholder='Note'>"
                    +"</div>"
                    +"</div>"
                );
            });

            $(".fa-trash").click(function(){
                if (!confirm("Are you sure you want to delete this?")){
                    return false;
                    }
              });
            $(".fa-edit").click(function(){
                if (!confirm("Are you sure you want to edit this?")){
                    return false;
                    }
              });
            
            $("input[type=file]").change(function(){
                readURL(this);
            });
            // bộ lọc form
             $('table').DataTable()
        });
            

