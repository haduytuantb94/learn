let ITEM_PER_PAGE = 4;
let currentPage = 1;
let totalItems = 0;
let totalPages = 0;
let filmHtmlTemplate = $('#templateHtml');
let showFilmsElement = $('.content-movie');

$(document).ready(function(){
    var url = new URL(window.location);
    var pageUrl = url.searchParams.get("page");
    if(pageUrl != null) {
        currentPage = pageUrl;
    }
   init();
   loadData(); 
});

function loadData(){
    $.ajax({
        url  : "loadmore.php",
        type : "GET",
        data : {
            type :'list',
            limit  : ITEM_PER_PAGE,
            offset :(currentPage-1)*ITEM_PER_PAGE
        },
        dataType : "json"
    }).done(function(data){
       appendData(data.items, filmHtmlTemplate, showFilmsElement);
    })
}

function init() {
     $.ajax({
        url  : "loadmore.php",
        type : "GET",
        data : {
            type :'count',
            items  : ITEM_PER_PAGE
        },
        dataType : "json",
    }).done(function(data){
        totalItems = data.totalItems;
        totalPages = data.totalPages;
        setPageInfo();
        setSelectedPageOptions();
    })
}

function setSelectedPageOptions(){
    for(var i = 0; i< totalPages; i++) {
       if(i!=currentPage){
        $('#slbPages').append('<option value="'+i+'">Page'+i+'</option>');
       } else {
        $('#slbPages').append('<option selected="selected" value="'+i+'">Page'+i+'</option>');
       }
    }
}

function setPageInfo(){
    $('.pageInfo').text('Page ' + (currentPage) + ' of ' + totalPages);
    
    $('#slbPages').val(currentPage);
    
    if (currentPage == 1) {
        $('.goStart').attr('disabled','disabled');
        $('.goPrevious').attr('disabled','disabled');
    } else {
        $('.goStart').removeAttr('disabled');
        $('.goPrevious').removeAttr('disabled');
    }
    
    if (currentPage == totalPages) {
        $('.goEnd').attr('disabled','disabled');
        $('.goNext').attr('disabled','disabled');
    } else {
        $('.goNext').removeAttr('disabled');
        $('.goEnd').removeAttr('disabled');
    }
}


function appendData(items, filmHtmlTemplate, showFilmsElement) {
    if (items.length > 0) {
        $.each(items, (index, value) => {
            let htmlMore = filmHtmlTemplate.html();
            htmlMore = htmlMore.replace(/{image}/g, value.image);
            htmlMore = htmlMore.replace(/{title}/g, value.title);
            htmlMore = htmlMore.replace(/{description}/g, value.description);
            showFilmsElement.append(htmlMore);
        });
    }
}

