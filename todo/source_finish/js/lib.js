// đóng mở form
const showForm = (open = false) => {
    if(open) {
        // mở form
        ELEMENT_FORM_ADDTASK.removeClass('dln');
        ELEMENT_BUTTON_ADDTASK.html('Close Task');
        ELEMENT_BUTTON_ADDTASK.removeClass('btn-info').addClass('btn-danger');
    }else{
        //đóng form
        ELEMENT_FORM_ADDTASK.addClass('dln');
        ELEMENT_BUTTON_ADDTASK.html('Add Task');
        ELEMENT_BUTTON_ADDTASK.addClass('btn-info').removeClass('btn-danger');
    }
}
// hiện thị data cho list task
const showItem = (data = getLocal(ELEMENT_KEY)) => {
    // [{},{}]
    let xhtml = ''
    data.sort( compare );
    data.forEach((item,index) => {
        let level = showLevel(item.level)
        let name = item.name
        let searchValue = ELEMENT_SEARCH_INPUT.val().trim()
        if(searchValue) {
            name = name.replace(new RegExp(searchValue , 'ig') , (searchResult) => {
                return `<mark>${searchResult}</mark>`
            })
        }
        xhtml += `<tr>
                <td class="text-center">${index+1}</td>
                <td>${name}</td>
                <td class="text-center">${level}</td>
                <td class="text-center">
                    <button type="button" class="btn btn-warning" onclick="handleEdit('${item.id}')" >Edit</button>
                    <button type="button" class="btn btn-success" onclick="handleCompleted('${item.id}')" >Completed</button>
                </td>
            </tr>`
    });
    ELEMENT_LIST_TASK.html(xhtml);
}
// hiện thị data cho list task succsess
const showItem_succsess = (data = getLocal(ELEMENT_KEY_SUCCESS)) => {
    let xhtml = ''
    data.sort( compare );
    data.forEach((item,index) => {
        let level = showLevel(item.level)
        let name = item.name
        let searchValue = ELEMENT_SEARCH_INPUT.val().trim()
        if(searchValue) {
            name = name.replace(new RegExp(searchValue , 'ig') , (searchResult) => {
                return `<mark>${searchResult}</mark>`
            })
        }
        xhtml += `<tr>
                <td class="text-center">${index+1}</td>
                <td style="text-decoration: line-through;">${name}</td>
                <td class="text-center">${level}</td>
                <td class="text-center">
                    <button type="button" class="btn btn-warning" onclick="handleNotCompleted('${item.id}')">Not completed</button>
                    <button type="button" class="btn btn-danger" onclick="handleDelete('${item.id}')">Delete</button>
                </td>
            </tr>`
    });
    ELEMENT_LIST_TASK_SUCCESS.html(xhtml);
}
// xóa dữ liệu form
const resetForm = () => {
    ELEMENT_FORM_INPUT_NAME.val('');
    ELEMENT_FORM_INPUT_LEVEL.val('small');
    ELEMENT_ID.val('');
    showformOpen = false
    showForm(showformOpen)
}
// thay đổi màu sắc level
const showLevel = (level) => {
    let color = 'label-danger'
    switch (level) {
        case 'medium':
            color = 'label-warning'
        break;
        case 'hight':
            color = 'label-success'
        break;
        default:
            break;
    }
    return `<span class="label ${color}">${level}</span>`
}
// Lưu vào local
const setLocal = (key , value) => {
    localStorage.setItem(key, JSON.stringify(value));
}
// Lấy từ local ra
const getLocal = (key) => {
    let value = localStorage.getItem(key);
    if (!value) return []
    value = JSON.parse(value)
    return value
}
//tạo id ngẫu nhiên
const randomId = (length) => {
    var chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz'.split('');

    if (! length) {
        length = Math.floor(Math.random() * chars.length);
    }

    var str = '';
    for (var i = 0; i < length; i++) {
        str += chars[Math.floor(Math.random() * chars.length)];
    }
    return str;
}
// hoàn thành task
const handleCompleted = (id) => {
    moveItem(id,ELEMENT_KEY,ELEMENT_KEY_SUCCESS)
}
// chưa hoàn thành task
const handleNotCompleted = (id) => {
    moveItem(id,ELEMENT_KEY_SUCCESS,ELEMENT_KEY)
}
// lấy task dựa vào id
const getItemByID = (id , key = ELEMENT_KEY) => {
    let data = getLocal(key)
    return data.find((item) => item.id == id)
}
// đi chuyển task lên xuống
const moveItem = (id , keyStart , keyEnd ) => {
    let task = getItemByID(id , keyStart)
    deleteItem(id,keyStart)
    addItem(task,keyEnd)
    showItem()
    showItem_succsess()
}
// xóa task
const deleteItem = (id , key = ELEMENT_KEY) => {
    let data = getLocal(key)
    data = data.filter((item) => item.id != id)
    setLocal(key,data)
    return data
}
// thêm mới task
const addItem = (item , key = ELEMENT_KEY) => {
    let data = getLocal(key)
    data.push(item)
    setLocal(key,data)
    return data
}
// sửa đổi task
const editItem = (item , key = ELEMENT_KEY) => {
    let data = getLocal(key)
    let idx = data.findIndex((element) => element.id == item.id)
    data[idx] = item
    setLocal(key,data)
    return data
}
// ấn vào nút edit
const handleEdit = (id) => {
    let task = getItemByID(id)
    loadForm(task)
}
// thêm dữ liệu vào form
const loadForm = (task) => {
    if(!task) return
    showformOpen = true
    showForm(showformOpen)
    ELEMENT_FORM_INPUT_NAME.val(task.name)
    ELEMENT_FORM_INPUT_LEVEL.val(task.level)
    ELEMENT_ID.val(task.id)
}
// ấn vào nút xóa
const handleDelete = (id) => {
    Swal.fire({
        title: 'Bạn có chắc chắn muốn xóa không?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
            let dataNew = deleteItem(id , ELEMENT_KEY_SUCCESS)
            showItem_succsess(dataNew)
            Swal.fire(
                'Ohh..!',
                'Đã xóa thành công.',
                'success'
            )
        }
    })
}
// chọn sort
const handleSort = (orderBy = 'Name',orderDir = "ASC") => {
    let xhtml = `${orderBy.toUpperCase()} - ${orderDir.toUpperCase()}`
    ELEMENT_SORT_VIEW.html(xhtml);
    let objSort = {orderBy : orderBy,orderDir : orderDir}
    setLocal(ELEMENT_KEY_SORT,objSort)
    showItem()
    showItem_succsess()
}

// chỉnh thứ tự sắp xếp
function compare( a, b ) {
    let obj = getLocal(ELEMENT_KEY_SORT)
    let orderDir    = obj.orderDir
    let orderBy     = obj.orderBy.toLowerCase()

    if(orderDir == "ASC") {
        // tăng dần
        if ( a[orderBy] < b[orderBy] ){
            return -1;
        }
        if ( a[orderBy] > b[orderBy] ){
            return 1;
        }
    }else {
          // giảm dần
          if ( a[orderBy] > b[orderBy] ){
            return -1;
        }
        if ( a[orderBy] < b[orderBy] ){
            return 1;
        }
    }

    return 0;
}