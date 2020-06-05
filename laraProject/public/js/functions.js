function getErrorHtml(elemErrors) {
    if ((typeof (elemErrors) === 'undefined') || (elemErrors.length < 1))
        return;
    var out = '<ul class="errors">';
    for (var i = 0; i < elemErrors.length; i++) {
        out += '<li>' + elemErrors[i] + '</li>';
    }
    out += '</ul>';
    return out;
}

function doElemValidation(id, actionUrl, formId) {

    var formElems;

    function addFormToken() {
        var tokenVal = $("#" + formId + " input[name=_token]").val();
        formElems.append('_token', tokenVal);
    }

    function sendAjaxReq() {
        $.ajax({
            type: 'POST',
            url: actionUrl,
            data: formElems,
            dataType: "json",
            error: function (data) {
                if (data.status === 422) {
                    var errMsgs = JSON.parse(data.responseText);
                    $("#" + id).parent().find('.errors').html(' ');
                    $("#" + id).after(getErrorHtml(errMsgs[id]));
                }
            },
            contentType: false,
            processData: false
        });
    }

    var elem = $("#" + formId + " :input[name=" + id + "]");
    if (elem.attr('type') === 'file') {
    // elemento di input type=file valorizzato
        if (elem.val() !== '') {
            inputVal = elem.get(0).files[0];
        } else {
            inputVal = new File([""], "");
        }
    } else {
        // elemento di input type != file
        inputVal = elem.val();
    }
    formElems = new FormData();
    formElems.append(id, inputVal);
    addFormToken();
    sendAjaxReq();

}

function doFormValidation(actionUrl, formId) {

    var form = new FormData(document.getElementById(formId));
    $.ajax({
        type: 'POST',
        url: actionUrl,
        data: form,
        dataType: "json",
        error: function (data) {
            if (data.status === 422) {
                var errMsgs = JSON.parse(data.responseText);
                $.each(errMsgs, function (id) {
                    $("#" + id).parent().find('.errors').html(' ');
                    $("#" + id).after(getErrorHtml(errMsgs[id]));
                });
            }
        },
        success: function (data) {
            window.location.replace(data.redirect);
        },
        contentType: false,
        processData: false
    });
}

function slideshow(n, t1, t2) {
    /* inizializzo le variabili e gli elementi */
    var x = 0;
    var txt = 0;
    var stato = 1;
    $("#foto2").animate({"opacity":"0"}, 0);
    $("#foto2").animate({"left":"100%"}, 0);
    $("#foto2").animate({"opacity":"1"}, 0);      
    $("#foto1").attr("src",fotografie(x, n));
    x++;
    $("#foto2").attr("src",fotografie(x, n));
     
    /* eseguo l'intervallo dello slide */
    var intervallo = setInterval(function(){
        x++;
        txt++;
        if(x>n-1) {
            x=0;
        }
        stato = cambiaSlide(x, n, stato, t1);
    }, t2);
}

function cambiaSlide(x, n, stato, t) {
    if(stato==1){
        var elemento1 = "#foto1";
        var elemento2 = "#foto2";
    } else {
        var elemento1 = "#foto2";
        var elemento2 = "#foto1";
    }
    $(elemento2).animate({"left":"0px"}, t);
    $(elemento1).animate({"left":"-100%"}, t, function(){
        $(elemento1).animate({"opacity":"0"}, 0);
        $(elemento1).animate({"left":"100%"}, 0);
        $(elemento1).animate({"opacity":"1"}, 0, function() {
            $(elemento1).attr("src",fotografie(x, n));        
        });
    });
    if(stato==1) {
        stato=0;
    } else {
        stato=1;
    }
    return stato;
}



