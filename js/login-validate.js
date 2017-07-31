$(document).ready(function() {
//验证登录表单
    $("#login-form").validate({
        //debug:true,
        rules: {
            email: {
                required: true,
            },
            password: {
                required: true,
            }
        },
        errorPlacement: function(error, element) {
            element.next().remove(); //删除显示的√图标
            // 加上×图标
            element.after('<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
            element.closest('.form-group').append(error); //显示错误消息提示
        },
        //给未通过验证的元素进行处理
        highlight: function(element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-feedback has-error');
        },
        //验证通过的处理
        success: function(label) {
            var el = label.closest('.form-group').find("input");
            el.next().remove(); //与errorPlacement相似，删除×图标
            el.after('<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');
            label.closest('.form-group').removeClass('has-error').addClass("has-feedback has-success");
            label.remove(); //删掉错误消息
        }
    })
});
