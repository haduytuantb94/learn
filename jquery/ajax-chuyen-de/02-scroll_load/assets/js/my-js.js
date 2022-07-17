let ITEM_PER_PAGE = 8;
let page = 0;
let filmHtmlTemplate = $('#templateHtml');
let showFilmsElement = $('#show-films');
let havemoreItems = true;
$(document).ready(function(){
    loadData();
    $(window).scroll(function(){
            // console.log('scrollTop: '+ $(window).scrollTop());
            // console.log('document: '+ $(document).height());
            // console.log('window: '+ $(window).height());

            if($(window).scrollTop() == ($(document).height() - $(window).height())) {
                if(havemoreItems) {
                    loadData();  
                }
            }
    })
});

function loadData(){
    $('body').loading();
    $.ajax({
        url  : "loadmore.php",
        type : "GET",
        data : {
            limit  : ITEM_PER_PAGE + 1,
            offset : page *ITEM_PER_PAGE
        },
        dataType : "json",
        success : function(data){
            setTimeout(()=>{
                $('body').loading('stop');
                if(data.items.length > ITEM_PER_PAGE) {
                    page++;
                    let showItems = data.items.slice(0,ITEM_PER_PAGE);
                    appendData(showItems,filmHtmlTemplate,showFilmsElement);
                }else {
                    havemoreItems = false;
                }
            },1000);
        }
    });
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
    // $("body, html").animate({scrollTop: $(document).height()}, 700);
}

