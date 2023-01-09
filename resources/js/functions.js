import { functions } from "lodash";

mercado_chosen: function() {
    if($('.wrap-search-form .wrap-list-cate').length > 0) {
        $('.wrap-search-form .wrap-list-cate').on('click','.link-control', function (event) {
            event.preventDefault();
            $(this).siblings('ul').slideToggle();
        });

        $('.wrap-search-form .wrap-list-cate .list-cate').on('click','li', function (event) {
            var     _this = $(this),
                    _value = _this.attr('value'),
                    _content = _this.text(),
                    _title = _this.text();
            _content = _content.slice(0,12);
            _this.parent().siblings('a').text(_content).attr('title',_title);
            _this.parent().siblings('input[name="product-cate"]').val(_value);
            _this.parent().slideUp();
        });
    }
    if($("select:not(.except-chosen)").length > 0) {
        $("select:not(.except-chosen)").each(function(){
            $(this).chosen();
        });
    }
}