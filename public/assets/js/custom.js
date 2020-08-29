// ------select2-----
$('.single-select').select2({
    width: '100%'
});
$('.multiple-select').select2({
    multiple: true,
    width: '100%',
});
$('select.area-m-select').select2({
    multiple: true,
    width: '100%',
    placeholder: "Select tuition provide area",
});
$('select.subject-m-select').select2({
    multiple: true,
    width: '100%',
    placeholder: "Select tuition Preferred Subjects",
});
$('select.medium-m-select').select2({
    multiple: false,
    width: '100%',
    placeholder: "Select tuition Preferred Medium",
});
$('select.class-m-select').select2({
    multiple: true,
    width: '100%',
    placeholder: "Select provide tuition Classes",
});
$('select.days-m-select').select2({
    multiple: true,
    width: '100%',
    placeholder: "Select provide tuition days",
});
$('select.timing-m-select').select2({
    multiple: true,
    width: '100%',
    placeholder: "Select timing shift",
});
$('select.tutoring-m-select').select2({
    multiple: true,
    width: '100%',
    placeholder: "Select tutoring style",
});

// ------------------------ All Ajax Code Start ------------------------
$(document).ready(function(){
    $('select.districts').on('change', function() {
        var stateID = $(this).val();
        $(".selectArea").hide();
        $(".loadingImgArea").show();
        $.ajax({
            type: "get",
            url: '/area-list',
            data:{'id':stateID},
            dataType: "json",
            success:function(data) {
                var len = data.length;
                $(".loadingImgArea").hide();
                $(".selectArea").show();
                $(".area").empty();
                $(".area").append("<option value=''>" + 'Select Area' + "</option>");
                for (var i = 0; i < len; i++) {
                    var id = data[i]['id'];
                    var areaName = data[i]['areaName'];
                    $(".area").append("<option value='" + areaName + "'>" + areaName + "</option>");
                }
            }
        });
    });
    
    $('select.districts').filter(function() {
        var stateID = $(this).val();
        $(".selectArea").hide();
        $(".loadingImgArea").show();
        $.ajax({
            type: "get",
            url: '/area-list',
            data:{'id':stateID},
            dataType: "json",
            success:function(data) {
                var len = data.length;
                $(".loadingImgArea").hide();
                $(".selectArea").show();
                $(".area").empty();
                $(".area").append("<option value=''>" + 'Select Area' + "</option>");
                const urlParams = new URLSearchParams(window.location.search);
                const myParam = urlParams.get('area');                    
                for (var i = 0; i < len; i++) {
                    var id = data[i]['id'];
                    var areaName = data[i]['areaName'];
                    if (areaName == myParam) {
                        var selected = "selected='selected'";
                    } else {
                        selected = "";
                    }
                    $(".area").append("<option value='" + areaName + "' " + selected + ">" + areaName + "</option>");
                }
            }
        });            
    });
});

$(document).ready(function(){
    $('select.medium').on('change', function() {
        var mediumName = $(this).val();
        $(".selectClass").hide();
        $(".loadingImgClass").show();
        $.ajax({
            type: "get",
            url: '/class-list',
            data:{'mname':mediumName},
            dataType: "json",
            success:function(data) {
                var len = data.length;
                $(".loadingImgClass").hide();
                $(".selectClass").show();
                $(".class").empty();
                $(".class").append("<option value=''>" + 'Select Class' + "</option>");
                for (var i = 0; i < len; i++) {
                    var id = data[i]['id'];
                    var className = data[i]['className'];
                    $(".class").append("<option value='" + className + "'>" + className + "</option>");
                }
            }
        });
    });
    
    $('select.medium').filter(function() {
        var mediumName = $(this).val();
        $(".selectClass").hide();
        $(".loadingImgClass").show();
        $.ajax({
            type: "get",
            url: '/class-list',
            data:{'mname':mediumName},
            dataType: "json",
            success:function(data) {
                var len = data.length;
                $(".loadingImgClass").hide();
                $(".selectClass").show();
                $(".class").empty();
                $(".class").append("<option value=''>" + 'Select Class' + "</option>");
                const urlParams = new URLSearchParams(window.location.search);
                const myParam = urlParams.get('class');                    
                for (var i = 0; i < len; i++) {
                    var id = data[i]['id'];
                    var className = data[i]['className'];
                    if (className == myParam) {
                        var selected = "selected='selected'";
                    } else {
                        selected = "";
                    }
                    $(".class").append("<option value='" + className + "' " + selected + ">" + className + "</option>");
                }
            }
        });            
    });
});


$(document).ready(function(){
    $('select.medium, select.class').on('change', function() {
        var className = $('select.class').val();
        $(".selectSubject").hide();
        $(".loadingImgSubject").show();
        $.ajax({
            type: "get",
            url: '/subject-list',
            data:{'cname':className},
            dataType: "json",
            success:function(data) {
                var len = data.length;
                $(".loadingImgSubject").hide();
                $(".selectSubject").show();
                $(".subject").empty();
                $(".subject").append("<option value=''>" + 'Select Subject' + "</option>");
                for (var i = 0; i < len; i++) {
                    var id = data[i]['id'];
                    var subjectName = data[i]['subjectName'];
                    $(".subject").append("<option value='" + subjectName + "'>" + subjectName + "</option>");
                }
            }
        });
    });
    
    $('select.class').filter(function() {
        var className = $(this).val();
        const urlParams = new URLSearchParams(window.location.search);
        const myParam = urlParams.get('class'); 
        if (className == '' && myParam != '') {
            className = myParam;
        }
        $(".selectSubject").hide();
        $(".loadingImgSubject").show();
        $.ajax({
            type: "get",
            url: '/subject-list',
            data:{'cname':className},
            dataType: "json",
            success:function(data) {
                var len = data.length;
                $(".loadingImgSubject").hide();
                $(".selectSubject").show();
                $(".subject").empty();
                $(".subject").append("<option value=''>" + 'Select Subject' + "</option>");
                const urlParams = new URLSearchParams(window.location.search);
                const myParam = urlParams.get('subject');                    
                for (var i = 0; i < len; i++) {
                    var id = data[i]['id'];
                    var subjectName = data[i]['subjectName'];
                    if (subjectName == myParam) {
                        var selected = "selected='selected'";
                    } else {
                        selected = "";
                    }
                    $(".subject").append("<option value='" + subjectName + "' " + selected + ">" + subjectName + "</option>");
                }
            }
        });            
    });
});
// ------------------------ / All Ajax Code End ------------------------


$("#imagesUpload").change(function () {
    readURL(this);
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#imagePreview').attr('src', e.target.result).fadeIn('slow');
        };
        reader.readAsDataURL(input.files[0]);
    }
}
$("#nid_card").change(function () {
    nidURL(this);
});
$("#student_card").change(function () {
    studentURL(this);
});
function nidURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#editNidPreview').attr('src', e.target.result).fadeIn('slow');
        };
        reader.readAsDataURL(input.files[0]);
    }
}
function studentURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#editStudentPreview').attr('src', e.target.result).fadeIn('slow');
        };
        reader.readAsDataURL(input.files[0]);
    }
}


window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-151387081-1');