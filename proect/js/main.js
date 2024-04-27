$(function() {
    let filter = $("[data-filter]");

    filter.on("click", function(event) {
        event.preventDefault();
        let cat = $(this).data('filter');

        if(cat == 'all'){
            $("[data-cat]").each(function(){
                $(this).removeClass('hide');
            });
        } else {
            $("[data-cat]").each(function() {
                let itemCat = $(this).data('cat');
    
                if(itemCat != cat){
                    $(this).addClass('hide');
                } else {
                    $(this).removeClass('hide');
                }
            });
        }
    });
});