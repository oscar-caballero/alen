confirmAction = function(obj, text) {
    if (confirm(text)) {
        $(obj).parent().submit();
    }else{
       return false;
    }
};