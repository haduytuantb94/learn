$(document).ready(function () {
    // Khi vừa vào trang
    let data            = getLocal(ELEMENT_KEY)
    let data_success    = getLocal(ELEMENT_KEY_SUCCESS)
    let objSort     = getLocal(ELEMENT_KEY_SORT)
    objSort ? handleSort(objSort.orderBy,objSort.orderDir) : handleSort()
    showItem(data)
    showItem_succsess(data_success)

    // ĐÓNG MỞ FORM
    ELEMENT_BUTTON_ADDTASK.click(function (e) { 
        e.preventDefault();
        showformOpen = !showformOpen
        showForm(showformOpen)
    });
    // SUBMIT FORM
    ELEMENT_FORM_BUTTON_SUBMIT.click(function (e) { 
        e.preventDefault();
        let id      = ELEMENT_ID.val() ? ELEMENT_ID.val() : randomId(10)
        let name    = ELEMENT_FORM_INPUT_NAME.val();
        let level   = ELEMENT_FORM_INPUT_LEVEL.val();
        if(!name){
            $.notify("Cảnh báo: Task Name không được rỗng", "warn");
            return
        }
        let dataNew = !ELEMENT_ID.val() ? addItem({id,name,level}) : editItem({id,name,level})
        showItem(dataNew)
        resetForm()
    });
    // cancel form
    ELEMENT_FORM_BUTTON_CANCEL.click(function (e) { 
        e.preventDefault();
        resetForm()
    });
    // ấn nút tìm kiếm
    ELEMENT_SEARCH_BUTTON.click(function (e) { 
        e.preventDefault();
        showItem()
        showItem_succsess()
    });

});