$(document).ready(function () {
    //Admin Login Animation
    AOS.init();
$('.login-section').slideDown(2000);
$('.url-form').slideDown(2000);
$('.paragraph').slideDown(2500,function () {
    $('.social-menu ul li').fadeIn(3000);
});
//ajax
})
let arr_data='';
const xhr = new XMLHttpRequest();
const URL ="https://www.postman.com/collections/ef82866a785be8319b45"
xhr.open('GET', URL);
    xhr.onreadystatechange = $.ajax({
                                        url:URL ,
                                        method:'get',
                                        context: document.body,
                                        processData: false,
                                        enctype : 'multipart/form-data',
                                        contentType : false,
                                        dataType: "json",
                                        data: {
                                            'action': "exec_find",
                                            'data': arr_data
                                        },
                                   }).done(function(data) {
                                    for(let i=0 ;i<= data.item.length;i++){
                                        arr_data =data.item[i];
                                        console.log( "re:",arr_data );
                                    }
                                });
xhr.send();
